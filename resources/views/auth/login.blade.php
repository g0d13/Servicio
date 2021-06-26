<x-guest-layout>
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image" data-background-lg="../../assets/img/illustrations/signin.svg">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Inicia sesion</h1>
                        </div>
                        <form action="{{ route('login') }}" method="POST" class="mt-4">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="email">Tu correo</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Correo" id="email" autofocus required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group mb-4">
                                    <label for="password">Tu Contraseña</label>
                                    <div class="input-group">
                                        <input type="password" name="password" placeholder="Contraseña" class="form-control" id="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Iniciar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-4 offset-md-4">--}}
{{--                <div class="login-form shadow mt-4 p-4">--}}
{{--                    <form  class="row g-3">--}}
{{--                        @csrf--}}
{{--                        <h4 class="col-12">Bienvenido</h4>--}}
{{--                        <div class="col-12">--}}
{{--                            <label for="email">Correo</label>--}}
{{--                            <input id="email" type="email" name="email" class="form-control" placeholder="Correo" required>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 mt-2">--}}
{{--                            <label for="password">Contraseña</label>--}}
{{--                            <input id="password" type="password" name="password" class="form-control" placeholder="Contraseña" required>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 mt-3">--}}
{{--                            <button type="submit" class="btn btn-primary float-right">Login</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-guest-layout>
