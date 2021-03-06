<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Analyzer</title>
    <link rel="icon" href="images/favicon.png">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
    <!-- end font -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
<div class="wrapper">
    <!-- header -->
    <header class="home">
        <!-- navbar -->
    @section('navbar')
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">

                <a href="{{ route('index') }}" class="navbar-brand">
                    <h2>Analyzer</h2>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbarTogglerDemo" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="{{ route('index') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('domains.index') }}" class="nav-link">Domains</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @include('flash::message')
        </div>
    @show
        <!-- end navbar -->
    </header>

    <main class="flex-grow-1">
        @yield('content')
        @yield('additional-content')
    </main>
</div>
<!-- footer -->
<footer>
    <div class="container">
        <div class="box-content">
            <p>Copyright © All Right Reserved</p>
        </div>
    </div>
</footer>
<!-- end footer -->
</body>
</html>