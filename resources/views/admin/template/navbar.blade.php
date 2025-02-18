<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">

            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a href="{{ route('home') }}" class="nav-link text-body font-weight-bold px-0">

                        <button type="" class="d-sm-inline d-none btn"><i class="fa fa-user me-sm-1"></i>Home</button>
                    </a>
                </li>
                <form action="{{ route('logout') }}" method="POST">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            @csrf
                            <button type="submit" class="d-sm-inline d-none btn"><i class="fa fa-user me-sm-1"></i>Log
                                Out</button>
                        </a>
                    </li>
                </form>
            </ul>
        </div>
    </div>
</nav>