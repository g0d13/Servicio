<!-- Top navigation-->
<nav class="navbar navbar-light shadow-md mt-3 mx-3 px-0 rounded-3" style="background: white!important;">
    <div class="d-flex justify-content-between w-100 px-3 align-items-center">
        <div class="d-flex align-items-center">
            <button class="btn rounded-0" id="sidebarToggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <button class="btn d-block d-md-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            {{$slot}}
        </div>
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-center me-3 flex-column d-none d-md-block">
                <span class="m-0 p-0 fw-bold">Margot Robbie</span>
            </div>
            <div class="btn-group dropstart d-flex">
                <div class="btn p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                     aria-expanded="false">
                    <img
                        src="https://graziamagazine.com/mx/wp-content/uploads/sites/13/2019/01/MARGOT-ROBBIE.jpg?fit=1500%2C1000"
                        alt="" class="rounded-pill" style="width: 40px; height: 40px;">
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
