<?php

namespace App\Exports;

use App\Models\Bitacora;
use App\Models\Solicitud;
use App\Models\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class BitacoraExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles, WithEvents, WithColumnFormatting
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = Bitacora::with('solicitudes')->get();

        $aux = [];

        foreach ($data as $bitacora) {
            foreach ($bitacora->solicitudes as $solicitud) {
                $reparacion = Solicitud::with('reparacion')->where('id', $solicitud->id)->get()[0]->reparacion;
                $mecanico = User::find($reparacion->mecanico_id);
                array_push($aux, [
                    'Prioridad' => $solicitud->prioridad,
                    'Operación' => $solicitud->operacion,
                    'No. Maquina' => $solicitud->maquina_id,
                    'Módulo' => $solicitud->modulo,
                    'Código del problema' => $solicitud->problema_id,
                    'LLamó al mecanico' => $solicitud->created_at,
                    'Llegó el mecánico' => $solicitud->llegada_mecanico,
                    'Quedó lista' => Carbon::parse($reparacion->quedo_lista)->hour() . ':' . Carbon::parse($reparacion->quedo_lista)->minute,
                    'Tipo de reparación' => $reparacion->tipo_reparacion,
                    'Nombre del mecanico' => $mecanico->nombre . ' ' . $mecanico->apellidos
                ]);
            }
        }
        return collect($aux);
    }

    public function headings(): array
    {
        return [
            ['RUTINA DIARIA DE MANTENIMIENTO CORRECTIVO'],
            [],
            [],
            [],
            [
                'Prioridad',
                'Operación',
                'No. Maquina',
                'Módulo',
                'Código del problema',
                'LLamó al mecanico',
                'Llegó el mecánico',
                'Quedó lista',
                'Tipo de reparación',
                'Nombre del mecánico'
            ]
        ];
    }

    public function columnFormats(): array
    {
        return ['H' => NumberFormat::FORMAT_DATE_DDMMYYYY];
    }

    public function styles($sheet)
    {
        // combinar columnas
        $sheet->mergeCells('A1:J1');
        $sheet->mergeCells('C2:E2');
        $sheet->mergeCells('H2:J2');
        $sheet->mergeCells('F4:H4');
        // Agregar campos
        $sheet->setCellValue('B2', 'Planta:');
        $sheet->setCellValue('G2', 'Fecha:');
        $sheet->setCellValue('F4', 'HORAS');

        // alineación de texto
        $textCenter = array(
            'alignment' => array(
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            )
        );

        $textRight = array(
            'alignment' => array(
                'horizontal' => Alignment::HORIZONTAL_RIGHT,
            )
        );

        $sheet->getStyle("A1:C1")->applyFromArray($textCenter);
        $sheet->getStyle("F4:H4")->applyFromArray($textCenter);
        $sheet->getStyle("B2")->applyFromArray($textRight);
        $sheet->getStyle("G2")->applyFromArray($textRight);


        // estilos
        return [
            1    => ['font' => ['bold' => true, 'size' => 14]],
            2    => ['font' => ['bold' => true, 'size' => 12]],
            'A1'    => ['font' => ['bold' => true]],
            4    => ['font' => ['bold' => true, 'size' => 12]],
            'A5:J5'    => [
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['rgb' => '008686']
                ],
                'font' => [
                    'name'      =>  'Calibri',
                    'size'      =>  12,
                    'bold'      =>  true,
                    'color' => ['rgb' => 'FFFFFF'],
                ],
            ],
            'F4:H4' => [
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['rgb' => '008686']
                ],
                'font' => [
                    'name'      =>  'Calibri',
                    'size'      =>  12,
                    'bold'      =>  true,
                    'color' => ['rgb' => 'FFFFFF'],
                ],
            ],
            'H2:J2' => [
                'borders' => [
                    'bottom' => [
                        'borderStyle' => Border::BORDER_THIN,
                    ]
                ],
            ],
            'C2:E2' => [
                'borders' => [
                    'bottom' => [
                        'borderStyle' => Border::BORDER_THIN,
                    ]
                ],
            ]

        ];
    }

    public function registerEvents(): array
    {
        return [
            BeforeSheet::class => function ($event) {
                $event->sheet->setOrientation(PageSetup::ORIENTATION_LANDSCAPE);
            },
        ];
    }
}
