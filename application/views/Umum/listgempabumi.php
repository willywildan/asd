<section class="profil " id="profil">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Gempa Bumi</h2>
            <hr>
            <center>
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listgunungmeletus">Gunung Meletus</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listbanjir">Banjir</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listtanahlongsor">Tanah Longsor</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listangintopan">Angin topan</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listkebakaran">Kebakaran</a></li>
    <li class="page-item active"><a class="page-link" href="<?php echo base_url();?>index.php/listgempabumi">Gempa Bumi</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listtsunami">Tsunami</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url();?>index.php/listkekeringan">Kekeringan</a>

  </ul>
</nav>    

           </center>
          </div>

        </div>
        <div class="row">
        <div class="col-sm-12">  
        <?php foreach ($bencanagempa->result() as $key) {?>
          <div class="list-group">
          

            <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">
              <?php echo $key->nama_gempa;?> </a>

             <!--  <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Ponorogo</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Minas</a> -->
              
              
              
          </div>
           <?php }?>
        </div>
        </div>

            
    </section>