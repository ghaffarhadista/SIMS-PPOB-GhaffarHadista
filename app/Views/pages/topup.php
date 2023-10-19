<?= $this->extend('layouts/templates'); ?>


<?= $this->section('content'); ?>
<style>
     .cek-saldo {
        font-size: 12px;
    }

    .text-ket {
        font-size: 14px;
        padding-top:5px;
    }

    /* .top-up-btn {
        width: 10% !important;
    } */
</style>
<div class="container">
<div class="row mt-5 mb-5">
        <div class="col-lg-5 mb-3">
            <img class="my-3" src="/images/profile-foto.png" alt="">
            <h5>Selamat Datang,</h5>
            <h3 class="fw-bolder"><?php echo session()->get('firstName') ?> <?php echo session()->get('lastName') ?></h3>
        </div>
        <div class="col-lg-7 saldo relative bg-danger rounded p-2">
            <h5 class="text-light fw-bold ps-3 pt-4 fs-6">Saldo Anda</h5>
            <h3 class="text-light fw-bold ps-3 fs-1 saldo-user position-absolute">Rp. 20.000.000</h3>
            <h3 class="text-light fw-bold ps-3 fs-1 saldo-sensor opacity-0">Rp. ********</h3>
            <h5 class="text-light fw-bold ps-3 pb-3 cek-saldo btn">Lihat Saldo <i class="bi bi-eye"></i></h5>
              
        </div>
    </div>
    <div class="row mt-5">
        <h6>Silahkan masukan</h6>
        <h4 class="fw-bolder">Nominal Top Up</h4>
        <div class="col-lg-8 col-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control" onkeyup="checkform()" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

        </div>
        <div class="col-lg-4 col-md-4 top-up-btn">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                <label class="btn btn-outline-danger ms-2" for="btnradio1">Rp.10.000</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-danger ms-2" for="btnradio2">Rp.20.000</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-danger ms-2" for="btnradio3">Rp.50.000</label>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-lg-8 col-12">
            <div class="input-group">
                <button type="button" class="btn btn-danger btn-isi w-100 mt-3" >Top Up</button>
             </div>
        </div>
        <div class="col-lg-4 col-md-4 top-up-btn mt-3">
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                <label class="btn btn-outline-danger ms-2" for="btnradio4">Rp.100.000</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                <label class="btn btn-outline-danger ms-2" for="btnradio5">Rp.250.000</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                <label class="btn btn-outline-danger ms-2" for="btnradio6">Rp.500.000</label>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>