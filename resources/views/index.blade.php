<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid col-12">
            <a class="navbar-brand text-white" href="#">
                Logo
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justyfi-content-right" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">@lang('public.contact')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">@lang('public.about')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled text-white">@lang('public.services')</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-danger" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Language
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="locale/en">English</a></li>
                            <li><a class="dropdown-item" href="locale/de">Germany</a></li>

                        </ul>
                    </li>
            </div>

            </ul>


        </div>
    </nav>
    </div>
    <div class="container-fluid">
        <h1 class="text-center mt-3">@lang('public.english translation')</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
