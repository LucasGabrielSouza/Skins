
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>LucaSkins</title>
</head>
<header>
    <div id="Top" class="container-fluid">
        <div class="row">
            <div class="col-9">
                <nav id="Navb" class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#"><img class="img-fluid img-responsive" src="images/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                </nav>

            </div>
            <div id="status" class="col-3">
                @if (Auth::check())
                    <p>{{Auth::user()->username }}</p>
                    <img class="imgUser img-responsive" src="{{Auth::user()->avatar}}" alt="">
                    <p><a href="auth/steam/handle">Logout</a></p>
                @else
                  <a href="auth/steam/handle"><p>login</p></a>
                  <img class="btnLogin" src="images/login.png" alt="">
                @endif
            </div>
        </div>
    </div>
    <hr class="line">
</header>
<body>

@yield('content')

</body>

<div class="container-fluid" id="footer">
    <hr class="underline">
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</html>