<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link css interno -->
    <link rel="stylesheet" href="/public/style/style.css">
    <title>Primo progetto Laravel</title>
</head>
<body>
<!-- TESTATA -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-4, col-md-8, col-lg-12"></div>
    <div class="card">
        <div class="card-header">
          Mainpage
        </div>
        <div class="card-body">
          <h5 class="card-title">Agenzia immobiliare Simone S.p.A.</h5>
          <p class="card-text">Sempre disponibili per ogni tua esigenza...</p>
          <a href="{{ url('/') }}" class="btn btn-primary">Homepage</a>
        </div></div></div></div>
</header>
<!-- FINE TESTATA -->

<!-- TESTO -->
<div>
<p>Offriamo molti servizi di qualità
</div>
<!-- FINE TESTO -->


<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-10 col-md-10 col-lg-10">
<div class="card w-100">
  <div class="card-body">
    <h5 class="card-title">Sezione contatti</h5>
    <p class="footer-text card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <a href="#" class="btn btn-dark">Contattaci</a>
  </div>
</div>
            </div>
        </div>
    </div>
    </footer>
<!-- FINE FOOTER -->

<!-- script js interno -->
<script src="/public/script/script.js"></script>

<!-- script js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
