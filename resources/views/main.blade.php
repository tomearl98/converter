<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        body {
            background-color: #1a202c;
            color: #a0aec0;
            overflow-x: hidden;
            -ms-overflow-x: hidden;
        }
        div#converter-page {
            padding: 0;
        }
        div#pageHeader {
            max-height: 15vh;
            text-align: center;
            align-content: center;
            -webkit-align-content: center;
        }
        div.conversionListItem {
            align-content: center;
            -webkit-align-content: center;
            padding: 3vh;
        }
        div.card-body, div.card {
            background-color: #2d3748;
            border-color: #2d3748;
        }
        div.card {
            min-height: 20vh;
        }
    </style>
</head>
<body>
    <div class="container-fluid" id="converter-page">
        <nav class="navbar fixed-bottom navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Converter</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="https://github.com/tomearl98/converter" target="_blank">tomearl98/converter on GitHub</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid" id="pageHeader">
            <h1>Converter</h1>
            <p>A simple PHP/Laravel-based converter for all the things</p>
        </div>
        <br>

        @yield('pageContent')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
