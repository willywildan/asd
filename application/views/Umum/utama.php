<link rel="stylesheet"  href="<?php echo base_url();?>/assets/css/style.css">

<hr>
<section class="about " id="about" style="border:0">
      <div class="container " >
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Laporan Bencana Terdekat</h2>
            <center><hr></center>
          </div>
        </div>



        

        

         


        <div class="row">
<?php foreach ($bencanatanah->result() as $key) { ?>
        <div class="col-sm-4 card" style="width: 18rem; border: 0">
          <a href="<?php echo base_url();?>index.php/rincian"><img class="card-img-top " src="<?php echo base_url();?>/assets/img/e1.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <a href="<?php echo base_url();?>index.php/rincian"> <?php echo $key->nama_tanahLongsor;?></a>
           

            <p><?php $deskripsi=$key->deskripsi_tanahLongsor;
            $potong=substr($deskripsi,0,200);
            echo $potong;
            ?>. . . .</p>
            <p class="text-right"><a href="<?php echo base_url();?>index.php/donasi"  style="background-color: #29a3db; border-color: #caebf2; color: white; font-weight: bold;" class="btn btn-success" >Donasi</a></p>
          </div>
        </div>
         <?php }?>

           <div class="col-sm-4 card" style="width: 18rem; border: 0" >
          <a href="angintopand2.html"><img class="card-img-top" src="<?php echo base_url();?>/assets/img/d2.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title" style="color:#ff3b3f">Angin Topan Lhoksukon</h5>
            <p class="card-text">Angin kencang yang telah menerjang Kabupaten Lhoksukon menyebabkan rumah warga dan fasilitas umum rusak</p>
           <p class="text-right"><a href="<?php echo base_url();?>index.php/donasi"  style="background-color: #29a3db; border-color: #caebf2; color: white; font-weight: bold;" class="btn btn-success" >Donasi</a></p>
          </div>
        </div>

          <div class="col-sm-4 card" style="width: 18rem; border: 0">
          <a href="gunungMugajah.html"><img class="card-img-top" src="<?php echo base_url();?>/assets/img/a6.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title" style="color:#ff3b3f">Gunung Mugajah Meletus</h5>
            <p class="card-text">Senin pukul 21.00 Gunung Mugajah meletus dan melontarkan material vulkanik hinga radius 50km lebih</p>
          <p class="text-right"><a href="<?php echo base_url();?>index.php/donasi"  style="background-color: #29a3db; border-color: #caebf2; color: white; font-weight: bold;" class="btn btn-success" >Donasi</a></p>
          </div>
        </div>
        </div>

          

        <div class="row">

          <div class="col-sm-4 card" style="width: 18rem; border: 0">
          <a href="tsunamig1.html"><img class="card-img-top" src="<?php echo base_url();?>/assets/img/g1.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title" style="color:#ff3b3f">Tsunami Aceh</h5>
            <p class="card-text">Gempa 9,1 skala richter yang terjadi di dasar laut mengakibatkan gelombang tsunami pada daerah pesisir pantai Banda Aceh dan sekitarnya</p>
            <p class="text-right"><a href="<?php echo base_url();?>index.php/donasi"  style="background-color: #29a3db; border-color: #caebf2; color: white; font-weight: bold;" class="btn btn-success" >Donasi</a></p>
          </div>
        </div>

          <div class="col-sm-4 card" style="width: 18rem; border: 0">
          <a href="banjirb3.html"><img class="card-img-top" src="<?php echo base_url();?>/assets/img/b3.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title" style="color:#ff3b3f">Banjir Bandang Minas</h5>
            <p class="card-text">Banjir bandang di Minas menenggelamkan ratusan rumah warga. Banjir disebabkan oleh banyaknya sampah yang tersumbat di pintu sungai</p>
           <p class="text-right"><a href="<?php echo base_url();?>index.php/donasi"  style="background-color: #29a3db; border-color: #caebf2; color: white; font-weight: bold;" class="btn btn-success" >Donasi</a></p>
          </div>
        </div>

          <div class="col-sm-4 card" style="width: 18rem;border: 0">
          <a href="tanahlongsorc3.html"><img class="card-img-top" src="<?php echo base_url();?>/assets/img/C3.jpg" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-title" style="color:#ff3b3f">Tanah Longsor Bandar</h5>
            <p class="card-text">Curah hujan yang tinggi dan kurangnya pepohonan yang ada pada lahan miring menyebabkan tanah longsor pada pukul 04.30 WIB</p>
           <p class="text-right"><a href="<?php echo base_url();?>index.php/donasi"  style="background-color: #29a3db; border-color: #caebf2; color: white; font-weight: bold;" class="btn btn-success" >Donasi</a></p>
          </div>
        </div>
        </div>

          <div class="row">
          <div class="col-sm-12 text-center">
            <a class="btn btn-primary" href="<?php echo base_url();?>index.php/semuabencana" role="button"  style="background-color:#e8e8e8; color:#ff3b3f; border-color: #98c8d3; ">Lihat Semua</a>
          </div>
          </div>
        
    </section>
 
