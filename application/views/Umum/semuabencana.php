 <section class="profil " id="profil">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Semua Bencana</h2>
            <hr>
            <center>
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listgunungmeletus">Gunung Meletus</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listbanjir">Banjir</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listtanahlongsor">Tanah Longsor</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listangintopan">Angin topan</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listkebakaran">Kebakaran</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listgempa">Gempa Bumi</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listtsunami">Tsunami</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listkekeringan">Kekeringan</a></li>

  </ul>
</nav>

           </center>
          </div>

        </div>
        <div class="row">
        <div class="col-sm-12"> 

        <?php foreach ($bencanagunung->result() as $key) { ?>
        
         
          <div class="list-group">
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action"> <?php echo $key->nama_gunung;?></a>
             <!-- <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Tsunami Aceh</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Angin topan jepara</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action ">Tanah longsor Malang</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Kebakaran Kilang Minyak Aceh</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Kekeringan Boyolali</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Tanah Longsor Karanganyar</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action ">Kebakaran Kilang Minyak Balikpapan</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gempa Bumi Sumenep</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Angin Topan Tuban</a>  -->
              
          </div>

        <?php }?>

        <?php foreach ($bencanatsunami->result() as $key) { ?>
        
         
          <div class="list-group">
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action"> <?php echo $key->nama_tsunami;?></a>
             <!-- <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Tsunami Aceh</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Angin topan jepara</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action ">Tanah longsor Malang</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Kebakaran Kilang Minyak Aceh</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Kekeringan Boyolali</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Tanah Longsor Karanganyar</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action ">Kebakaran Kilang Minyak Balikpapan</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gempa Bumi Sumenep</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Angin Topan Tuban</a>  -->
              
          </div>

        <?php }?>

        </div>
        </div>

            
    </section>
 