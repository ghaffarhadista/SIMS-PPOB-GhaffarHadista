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

    .top-up-btn {
        width: 10% !important;
    }
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
        <h6 class="text-secondary">PemBayaran</h6>
        <h4 class="fw-bolder">Listrik Prabayar</h4>
        <div class="col-lg-12 pt-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                <button type="button" class="btn btn-danger w-100 mt-3">Top Up</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>