<nav id="navbar" class="navbar navbar-light navbar-expand-md shadow-lg" style="background-color: #CC1505;">
    <div class="container">
        <a class="navbar-brand text-white" href="/" id="brand">I-Order.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsNav">
            <ul class="navbar-nav mr-auto" id="first_uls">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            {{--  Admin navigation  --}}
            <ul class="navbar-nav ml-auto bg-danger" id="second_uls">
                <li class="nav-item dropdown bg-danger">
                    <a class="nav-link dropdown-toggle btn" id="my_account" href="#!" data-toggle="dropdown">My account</a>
                    <div class="dropdown-menu dropdown-menu-right" id="second_dropdown_menu">
                        <a class="dropdown-item" href="#">Login</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
