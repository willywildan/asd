

  <!-- tutup jumbotron -->
    <section class="profil " id="profil">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Bencana</h2>
            <hr>
            <center>
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
  
    <li class="page-item active"><a class="page-link" href="<?php echo base_url();?>index.php/listgunungmeletus">Gunung Meletus</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listbanjir">Banjir</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listtanahlongsor">Tanah Longsor</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listangintopan">Angin topan</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listkebakaran">Kebakaran</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listgempabumi">Gempa Bumi</a></li>
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

            <!-- <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action"> </a>
            <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Agung</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action ">Gunung Bromo</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Kelud</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Kerinci</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Krakatau</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Mugajah</a>
             
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action ">Gunung Semeru</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Gunung Sinabung</a>
             -->
              
          </div>
          
          <?php }?>
        </div>
        </div>
      </div>
    </section>
