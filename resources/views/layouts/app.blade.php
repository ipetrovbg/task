<!DOCTYPE html>
<html lang="en" ng-app="FooBarApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="{{ url('/') }}/css/app.css" rel="stylesheet">
</head>
<body>
    <div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}">Foo Bars</a></li>
                        <li><a href="{{ url('/foo-bar/create') }}">Create Foo Bar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
<!-- Scripts -->
<script src="{{ url('/') }}/js/app.js"></script>

<script type="text/javascript" src="{{ url('/') }}/node_modules/angular/angular.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/node_modules/angular-messages/angular-messages.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/scripts/foo-bar-app/app.js"></script>
<script type="text/javascript" src="{{ url('/') }}/scripts/foo-bar-app/controllers/foo-bar-controller.js"></script>
<script type="text/javascript" src="{{ url('/') }}/scripts/foo-bar-app/services/main-services.js"></script>
</body>
</html>