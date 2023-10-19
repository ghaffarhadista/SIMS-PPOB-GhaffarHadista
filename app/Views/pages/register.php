<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>
  <body>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }

        .bg-image {
          background: url("/images/login.png");
          background-position:center ;
          background-repeat: no-repeat;
        }
    </style>
    <div class="container-fluid">
      <div class="row h-100">
        <div class="col-lg-6 col-12 text-black">
           <div class="d-flex justify-content-center align-items-center h-100 ">
            <form method="post" action="/register" class="text-center" >
                <div class="mb-3">
                  <img src="/icons/logo.png" class="me-1" alt="logo">
                  <a class="navbar-brand fw-bolder" href="/pages">SIMS PPOB</a>
                </div>
                  <h3 class="fw-normal mb-3 pb-3 fw-bolder">Lengkapi data untuk <br> membuat akun</h3>
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" placeholder="masukkan email anda" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="firstName" name="firstName" placeholder="nama depan" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="lastName" name="lastName" placeholder="nama belakang" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" placeholder="buat password" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="confpassword" id="password" placeholder="konfirmasi password" class="form-control form-control-lg" />
                </div>
                <div class="pt-1 mb-4">
                    <button class="btn btn-danger w-100 btn-lg btn-block" type="submit">Daftar</button>
                </div>
                  <p>sudah punya akun? login <a href="/" class="link-danger text-decoration-none fw-bold">di sini</a></p>
              </form>
           </div>
        </div>
        <div class="col-lg-6 col-12 text-black text-center">
          <div class="d-flex align-items-center bg-image h-100">
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>