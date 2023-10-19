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

    .slick-arrow {
        display: none !important;
    }

    .slick-slide {
        padding-right: 20px;
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
    <div class="row text-center mb-5">
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/PBB.png" alt="">
                <p class="text-ket">PBB</p>
            </a>
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/Listrik.png" alt="">
                <p class="text-ket">Listrik</p>
            </a>
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/Pulsa.png" alt="">
                <p class="text-ket">Pulsa</p>
            </a>
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/PDAM.png" alt="">
                <p class="text-ket">PDAM</p>
            </a>
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/PGN.png" alt="">
                <p class="text-ket">PGN</p>
            </a>
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/Televisi.png" alt="">
                <p class="text-ket">Televisi</p>
            </a>
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/Musik.png" alt="">
                <p class="text-ket">Musik</p>
            </a>
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/Game.png" alt="">
                <p class="text-ket">Game</p>
            </a>
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/VM.png" alt="">
                <p class="text-ket">Makanan</p>
            </a>
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/Kurban.png" alt="">
                <p class="text-ket">Kurban</p>
            </a>
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/Zakat.png" alt="">
                <p class="text-ket">Zakat</p>
            </a>
            <a href="#" class="btn col-lg-1 col-md-3 col-sm-3 col-4">
                <img src="/icons/PaketData.png" alt="">
                <p class="text-ket">Paket Data</p>
            </a>    
    </div>
    <div class="row">
        <h3 class="fs-4 fw-bold mb-4">Temukan Promo Menarik</h3>
        <div class="slick-js">
        <img src="/images/Banner 1.png" alt="">
        <img src="/images/Banner 2.png" alt="">
        <img src="/images/Banner 3.png" alt="">
        <img src="/images/Banner 4.png" alt="">
        <img src="/images/Banner 5.png" alt="">
        </div>
    </div>
</div>    
<?= $this->endSection(); ?>

