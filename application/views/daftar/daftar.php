
<style>
    .nav-hide{
        display: none !important;
    }
</style>

<section>
    <div class="container">
        <div class="navbar-logo pt-3">
            <a href="<?php echo base_url('home'); ?>" class="nav-link col-3">
                <img class="img-navbar" src="<?php echo base_url('assets/images/irent-logo-3.2.png')?>" alt="" width="180px" height="80px">
            </a>
        </div>
        <div class="row justify-content-center p-5">
            <div class="col-6 border p-5">
                <form action="<?php echo base_url('home/daftar2'); ?>" method="post">
                    <div class="text-center">
                        <h1>Daftar</h1>
                    </div>  
                    <div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Nama: <span class="text-danger">*</span></label>
                            <input name="" type="text" class="form-control form-in" id="nama" aria-describedby="" placeholder="Masukkan Nama" autocomplete="off" required oninput="nextButt()">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Email: <span class="text-danger">*</span></label>
                            <input name="" type="email" class="form-control form-in" id="email" aria-describedby="" placeholder="Masukkan Email" autocomplete="off" required oninput="nextButt()">
                        </div>
                        <div class="form-group">
                            <small id="emailHelp" class="form-text text-muted">Kami akan menjaga keamanan privasi anda.</small>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success btn-in">Selanjutnya</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
