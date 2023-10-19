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
    .tgl-topup {
        font-size: 12px;
    }
    
    .post li:nth-child(5) ~ li {
        display: none;
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
    <div class="row mt-5 post">
        <h4 class="fw-bolder mb-3">Semua Transaksi</h4>
        <ul class="list-group">
            <li class="w-100 border rounded mb-3 list-group-item">
                <div class="row">
                    <div class="col-6 ps-2 pt-2">
                        <p class="fw-bold text-success fs-4">+ Rp.10.000</p>
                        <p class="tgl-topup ps-2">17 Agustus 2023  | 17:50 WIB</p>
                    </div>
                    <div class="col-6 text-end pt-4">Top Up Saldo</div>
                </div>
            </li>
            <li class="w-100 border rounded mb-3 list-group-item">
                <div class="row">
                    <div class="col-6 ps-2 pt-2">
                        <p class="fw-bold text-success fs-4">+ Rp.10.000</p>
                        <p class="tgl-topup ps-2">17 Agustus 2023  | 17:50 WIB</p>
                    </div>
                    <div class="col-6 text-end pt-4">Top Up Saldo</div>
                </div>
            </li>
            <li class="w-100 border rounded mb-3 list-group-item">
                <div class="row">
                    <div class="col-6 ps-2 pt-2">
                        <p class="fw-bold text-success fs-4">+ Rp.10.000</p>
                        <p class="tgl-topup ps-2">17 Agustus 2023  | 17:50 WIB</p>
                    </div>
                    <div class="col-6 text-end pt-4">Top Up Saldo</div>
                </div>
            </li>
            <li class="w-100 border rounded mb-3 list-group-item">
                <div class="row">
                    <div class="col-6 ps-2 pt-2">
                        <p class="fw-bold text-success fs-4">+ Rp.10.000</p>
                        <p class="tgl-topup ps-2">17 Agustus 2023  | 17:50 WIB</p>
                    </div>
                    <div class="col-6 text-end pt-4">Top Up Saldo</div>
                </div>
            </li>
            <li class="w-100 border rounded mb-3 list-group-item">
                <div class="row">
                    <div class="col-6 ps-2 pt-2">
                        <p class="fw-bold text-success fs-4">+ Rp.10.000</p>
                        <p class="tgl-topup ps-2">17 Agustus 2023  | 17:50 WIB</p>
                    </div>
                    <div class="col-6 text-end pt-4">Top Up Saldo</div>
                </div>
            </li>
            <li class="w-100 border rounded mb-3 list-group-item">
                <div class="row">
                    <div class="col-6 ps-2 pt-2">
                        <p class="fw-bold text-success fs-4">+ Rp.10.000</p>
                        <p class="tgl-topup ps-2">17 Agustus 2023  | 17:50 WIB</p>
                    </div>
                    <div class="col-6 text-end pt-4">Top Up Saldo</div>
                </div>
            </li>
            <li class="w-100 border rounded mb-3 list-group-item">
                <div class="row">
                    <div class="col-6 ps-2 pt-2">
                        <p class="fw-bold text-success fs-4">+ Rp.10.000</p>
                        <p class="tgl-topup ps-2">17 Agustus 2023  | 17:50 WIB</p>
                    </div>
                    <div class="col-6 text-end pt-4">Top Up Saldo</div>
                </div>
            </li>
            <li class="w-100 border rounded mb-3 list-group-item">
                <div class="row">
                    <div class="col-6 ps-2 pt-2">
                        <p class="fw-bold text-success fs-4">+ Rp.10.000</p>
                        <p class="tgl-topup ps-2">17 Agustus 2023  | 17:50 WIB</p>
                    </div>
                    <div class="col-6 text-end pt-4">Top Up Saldo</div>
                </div>
            </li>
            <li class="w-100 border rounded mb-3 list-group-item">
                <div class="row">
                    <div class="col-6 ps-2 pt-2">
                        <p class="fw-bold text-success fs-4">+ Rp.10.000</p>
                        <p class="tgl-topup ps-2">17 Agustus 2023  | 17:50 WIB</p>
                    </div>
                    <div class="col-6 text-end pt-4">Top Up Saldo</div>
                </div>
            </li>
            <li class="w-100 border rounded mb-3 list-group-item">
                <div class="row">
                    <div class="col-6 ps-2 pt-2">
                        <p class="fw-bold text-success fs-4">+ Rp.10.000</p>
                        <p class="tgl-topup ps-2">17 Agustus 2023  | 17:50 WIB</p>
                    </div>
                    <div class="col-6 text-end pt-4">Top Up Saldo</div>
                </div>
            </li>

        </ul>
        <a href="#showmore" id="showmore" class="fw-bolder text-center text-danger fs-5 my-3 load-more text-decoration-none">Show more</a>
    </div>
</div>


<?= $this->endSection(); ?>