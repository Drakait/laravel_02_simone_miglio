<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Sito </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <script src="https://kit.fontawesome.com/109fb709db.js" crossorigin="anonymous"></script>
</head>

<body>
    
    
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}"><i class="fa-solid fa-tent"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('chi-siamo') }}">Chi siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contatti') }}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('varie') }}">Varie</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid header"> 
    <div class="row h-100 align-items-center justify-content-center">
        <div class="col-12 text-center">
            <h1 class="text-primary display-5 fw-bold text-color">Varie ed Eventuali</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        @foreach ($varie as $item)
        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center py-5 my-3">
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/100" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item['name']}} {{$item['surname']}}</h5>
                    <p class="card-text">{{$item['age']}}</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            
        </div>
        @endforeach
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>
</body>

</html>
