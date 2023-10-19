<?= $this->extend('layouts/templates'); ?>


<?= $this->section('content'); ?>
<style>
    .row-lebih{
        width: 100vw !important;
    }

    .img-prof {
        position: relative !important;
    }

    .edit-img {
        position: absolute !important;
        right: 46%;
        top: 64%;
        background-color: white !important;
        border-radius: 100%;
    }
</style>
<div class="container akun">
    <div class="row mt-5 mb-5">
            <div class="col-lg-12 mb-3 text-center img-prof">
                <img class="my-3 " style="width: 100px;" src="/images/profile-foto.png" alt="">
                <div class="edit-img px-2 py-1 border border-secondary">
                <i class="bi bi-pencil-fill"></i>
                </div>
            </div>
            <div class="col-lg-12 saldo text-center">
                <h3 class="fw-bolder fs-5"><?php echo session()->get('firstName') ?> <?php echo session()->get('lastName') ?></h3>   
            </div>
        </div>
    </div>
    <div class="row justify-content-center row-lebih">
        <div class="col-md-6">
            <form action="/update/" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="<?php echo session()->get('email') ?>">
                </div>
                <div class="mb-3">
                    <label for="firstName" class="form-label">Nama Depan</label>
                    <input type="firstName" class="form-control" id="firstName" value="<?php echo session()->get('firstName') ?>">
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Nama Belakang</label>
                    <input type="lastName" class="form-control" id="lastName" value="<?php echo session()->get('lastName') ?>">
                </div>
                <button type="submit" class="btn btn-danger w-100" >Simpan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>