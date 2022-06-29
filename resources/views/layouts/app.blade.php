<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <title>
        @hasSection('title')
            @yield('title')
        @endif
    </title>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link nav-link-lg nav-link-user">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Masyarakat</div>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                @include('layouts.slidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>

    @include('layouts.script')
</body>

</html>
