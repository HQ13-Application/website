<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png" width="100" height="50" class="d-inline-block" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <form class="form-inline" style="padding-left:55px;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </ul>

            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">
                        <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/register') }}">
                        <i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
                </li>
            </ul>
        </div>
    </nav>