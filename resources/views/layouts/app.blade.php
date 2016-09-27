<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Company Structure Registry</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css" />

    <!-- Materialize CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="/css/materialize.css" rel="stylesheet" type="text/css" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <header>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" class="brand-logo" href="/">#CSR</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/types">All types</a></li>
                    <li><a href="/types/create">New type</a></li>
                    <li><a href="/elements">All elements</a></li>
                    <li><a href="/elements/create">New element</a></li>
                    <li><a href="/employees">All employees</a></li>
                    <li><a href="/employees/create">New employee</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
                    <li><a href="/types">All types</a></li>
                    <li><a href="/types/create">New type</a></li>
                    <li><a href="/elements">All elements</a></li>
                    <li><a href="/elements/create">New element</a></li>
                    <li><a href="/employees">All employees</a></li>
                    <li><a href="/employees/create">New employee</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>
            </div>
        </nav>
        <nav>
            <div class="nav-wrapper container">
                @yield('breadcrumb')
            </div>
        </nav>          
    </header>

    <main>      
        <div class="section">
            <div class="container">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer orange">
        <div class="footer-copyright">
            <div class="container">
                Created by Nikolett Hegedüs
            </div>
        </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>