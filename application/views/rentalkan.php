
    <div class="hero-wrap" style="background-image: url(<?php echo base_url('assets/images/bg11.png')?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <!-- <p class="breadcrumbs mb-2"><span class="mr-2"><a href="">Beranda</a></span> <span>Tentang</span></p> -->
	            <h1 class="bread">RENTALKAN BARANGMU</h1>
	            <p class="breadcrumbs mb-5">"Dia membutuhkan, kamu menguntungkan"</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section <?php if($this->session->userdata("log")=="Masuk") echo 'd-none'; else echo 'd-block'?>">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Masuk Untuk Merentalkan</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-3">
                <a href="<?php echo site_url('/home/login')?>" class="btn btn-primary py-3 px-1 col-2 nav-link">Masuk</a>
            </div>
        </div>
    </section>


    <section class="ftco-section contact-section bg-light hidden <?php if($this->session->userdata("log")=="Masuk") echo 'd-block'; else echo 'd-none'?>">
      <div class="container">
        <div class="row d-flexcontact-info">
          <div class="col-md-12">
            <h2 class="h3">Informasi Barang</h2>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-white p-5 contact-form" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Pilih Gambar: </label><input type="file" class="ml-3 coverimage" name="file[]">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Barang">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" placeholder="Harga per jam">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Deskripsi"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Sewakan" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>

          <!-- <div class="col-md-6 d-flex"> -->
			<div class="col-md-6 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('assets/images/map.png')?>);">
          	<!-- <div id="map" class="bg-white"></div> -->
          <!-- </div> -->

        </div>
      </div>
    </section>
    