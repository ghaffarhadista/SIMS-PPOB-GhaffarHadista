<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMS PPOB-GHAFFAR HADISTA | <?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
  <body>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }

        .nav-link {
            font-size: 1rem;
        }
    </style>

    <?= $this->include('layouts/header') ?>

    <?= $this->renderSection('content'); ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
      // SLIDER BANNER
       $(document).ready(function(){
        $('.slick-js').slick({
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          centerMode: true,
          variableWidth: true
        });
    });
    </script>
    <script>
      // CEK SALDO TOGGLE
       $(".cek-saldo").click(function(){
        $(".saldo-user").toggleClass("opacity-0");
        $(".saldo-sensor").toggleClass("opacity-0");
    });
    </script>
    <script>
      // SHOW MORE TRANSACTION
    const loadmore = document.querySelector('.load-more');

    let currentItems = 5;
    loadmore.addEventListener('click', (e) => {
        const elementList = [...document.querySelectorAll('.post li')];
        e.target.classList.add('show-loader');

        for (let i = currentItems; i < currentItems + 3; i++) {
            setTimeout(function () {
                e.target.classList.remove('show-loader');
                if (elementList[i]) {
                    elementList[i].style.display = 'block';
                }
            }, 2000)
        }
        currentItems += 5;

        //sembunyiin tomboal load jika udh muncul semua
        if(currentItems >= elementList.length) {
            event.target.classList.add()
        }
    })
</script>
<script>
    $(".nav-link").click(function(){
        $(".nav-link").addClass("text-danger");
    });
</script>
  </body>
</html>