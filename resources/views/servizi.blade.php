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
    
    
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top" data-bs-theme="dark">
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
                    <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid header p-5"> 
    <div class="row h-100 align-items-center justify-content-center">
        <div class="col-12 text-center">
            <h1 class="text-primary display-5 fw-bold text-color"> I nostri articoli </h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    @foreach ($articoli as $item)
                    <button type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="{{ $loop->index }}"
                    class="{{ $loop->first ? 'active' : '' }}"
                    @if ($loop->first) aria-current="true" @endif
                    aria-label="Slide {{ $loop->iteration }}"></button>
                    @endforeach
                </div>
                
                <div class="carousel-inner">
                    @foreach ($articoli as $item)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <a href="{{ route('dettaglio', ['id' => $loop->index]) }}">
                            <img src="https://picsum.photos/800/400?random={{ $loop->iteration }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="{{ $item['titolo'] }}">
                        </a>
                        <div class="carousel-caption">
                            <div class="d-inline-block bg-dark bg-opacity-75 text-white rounded-3 p-3">
                                <h5 class="text-primary mb-0 mb-md-2">{{ $item['titolo'] }}</h5>
                                <h6 class="d-none d-md-block">{{ $item['categoria'] }}</h6>
                                <p class="d-none d-md-block mb-0">{{ $item['sommario'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>
</body>

</html>
