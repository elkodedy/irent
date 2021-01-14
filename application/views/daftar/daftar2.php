
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
                <form action="<?php echo base_url('home/daftar3'); ?>" method="post">
                    <div class="text-center">
                        <h1>Daftar</h1>
                    </div>  
                    <div class="daftar">
                        <div class="form-group">
                            <label for="exampleInputUsername">No. KTP:</label>
                            <input name="" type="number" class="form-control form-in" id="" aria-describedby="" placeholder="Masukkan No. KTP" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <small id="emailHelp" class="form-text text-muted"><u style="cursor: pointer;"><b><a href="<?php echo site_url('/home/daftar3')?>">Lewati</a></b></u> langkah ini</small>
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
