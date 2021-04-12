<!DOCTYPE html>
<html>
<head>
    <title>Car App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <style>
        .inline { display: inline-flex;}
        .mgr-5 { margin-right: 5px; }
    </style>
</head>
<body>
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('car') }}">Car Collection</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('car') }}">View All Cars</a></li>
                    <li><a href="{{ URL::to('car/create') }}">Create a Car</a>
                </ul>
            </nav>
            @yield('content')
        </div>
    </body>
</html>
