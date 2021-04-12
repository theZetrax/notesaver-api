<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Home | Zetrax</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light box-shadow shadow-sm">
        <a class="navbar-brand" href="#"><span class="text-danger">Notes</span><span
                class="text-muted">-Server</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notes</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search For Notes Here!"
                    aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Your <u><span class="text-muted">personalized</span></u> Note-Server.</h1>
            <p class="lead">You write in <span class="text-muted">markdown</span>, We deliver to your <span
                    class="text-danger">audience</span>.</p>
        </div>
    </div>

    <div class="container d-flex justify-content-center flex-row flex-wrap mb-5">
        {{-- Looping through notes. --}}
        @for ($i = 0; $i < 7; $i++)
            <div class="card mx-1 mb-1" style="width: 18rem;">
                <div class="card-body">
                    {{-- Link heading --}}
                    <h5 class="card-title">Note title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">A little note description here.</h6>
                    {{-- Link body --}}
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <h6 class="card-subtitle mb-2 text-muted"><i><b>Date:</b> Apr-04-2021</i></h6>

                    {{-- Links to access the note --}}
                    <a href="#" class="card-link">Read</a>
                    <a href="#" class="card-link">Share</a>
                </div>
            </div>
        @endfor
    </div>
</body>

</html>
