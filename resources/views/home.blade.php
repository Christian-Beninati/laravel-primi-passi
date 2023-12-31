<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel First Steps</title>

    <!-- BOOTSTRAP -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-danger ">
            <div class="container ">

                <a class="navbar-brand text-light" href="{{route('home')}}">LARAVEL</a>

                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link active text-light" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('news')}}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('partner')}}">Partner</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container text-center mt-5">
            <h1>{{$welcome}}</h1>
        </div>
    </main>


</body>

</html>