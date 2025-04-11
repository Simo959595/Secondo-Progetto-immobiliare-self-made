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
          <a href="{{ url('servizi') }}" class="btn btn-primary">Servizi</a>
          <a href="{{ url('chi-siamo') }}" class="btn btn-secondary">Chi siamo</a>
        </div></div></div></div>
</header>
<!-- FINE TESTATA -->

<!-- TESTO -->
 <div>
<p class="text-break">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus nostrum delectus, dolores, voluptates culpa corporis, eveniet architecto placeat dolorem illum odit labore tempore blanditiis enim minima? Recusandae, nobis suscipit.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus obcaecati impedit dolorum. Praesentium sed ullam omnis pariatur. Praesentium deserunt cumque ab accusamus distinctio dolorum enim, neque aliquid, laborum quod eligendi!   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus voluptate deserunt deleniti, ratione atque aut recusandae, pariatur expedita nobis esse unde. Aut modi quibusdam eaque facere harum laborum animi cumque!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi veritatis pariatur necessitatibus voluptatum enim asperiores corporis, non cupiditate. Dignissimos possimus, odit tenetur fugiat numquam iure natus. Deserunt reprehenderit eaque consectetur!   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus nostrum delectus, dolores, voluptates culpa corporis, eveniet architecto placeat dolorem illum odit labore tempore blanditiis enim minima? Recusandae, nobis suscipit.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus obcaecati impedit dolorum. Praesentium sed ullam omnis pariatur. Praesentium deserunt cumque ab accusamus distinctio dolorum enim, neque aliquid, laborum quod eligendi!   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus voluptate deserunt deleniti, ratione atque aut recusandae, pariatur expedita nobis esse unde. Aut modi quibusdam eaque facere harum laborum animi cumque!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi veritatis pariatur necessitatibus voluptatum enim asperiores corporis, non cupiditate. Dignissimos possimus, odit tenetur fugiat numquam iure natus. Deserunt reprehenderit eaque consectetur!</p>
</div>
<!-- FINE TESTO -->

<!-- CARDS -->
<div class="container">
<div class="row">
<div class="col-4, col-md-8, col-lg-12">
<div class="card-group">
  <div class="card">
    <img src="/media/casa.mare.jpg" class="card-img-top" alt="Foto di case">
    <div class="card-body">
        <h5 class="card-title">Foto di case al mare</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam obcaecati suscipit maiores ipsa vero nobis, laboriosam veritatis praesentium aliquam quidem, animi ab voluptas quam quod voluptate sequi velit totam cumque.</p>
    </div>
</div>
<div class="card">
    <img src="/media/casa.collina.jpg" class="card-img-top" alt="Foto di case">
    <div class="card-body">
        <h5 class="card-title">Foto di case in montagna</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam obcaecati suscipit maiores ipsa vero nobis, laboriosam veritatis praesentium aliquam quidem, animi ab voluptas quam quod voluptate sequi velit totam cumque.</p>
    </div>
</div>
<div class="card">
    <img src="/media/casa.montagna.jpg" class="card-img-top" alt="Foto di case">
        <div class="card-body">
        <h5 class="card-title">Foto di case in collina</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam obcaecati suscipit maiores ipsa vero nobis, laboriosam veritatis praesentium aliquam quidem, animi ab voluptas quam quod voluptate sequi velit totam cumque.</p>
       </div>
  </div>
</div>
</div>
</div>
</div>
<!-- FINE CARDS -->

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
