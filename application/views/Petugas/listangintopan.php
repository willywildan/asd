<section class="profil " id="profil">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Bencana</h2>
            <hr>
            <center>
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
   <li class="page-item"><a class="page-link" href="<?php echo site_url('ListGunungMeletus/listgunungmeletuspetugas') ?>">Gunung Meletus</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListBanjir/listbanjirdonatur')?>">Banjir</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListTanahLongsor/listtanahlongsorpetugas')?>">Tanah Longsor</a>
    </li>
    <li class="page-item active"><a class="page-link" href="<?php echo site_url('ListAnginTopan/listangintopanpetugas')?>">Angin topan</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListKebakaran/listkebakaranpetugas')?>">Kebakaran</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListGempaBumi/listgempabumipetugas')?>">Gempa Bumi</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListTsunami/listtsunamipetugas')?>">Tsunami</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListKekeringan/listkekeringanpetugas')?>">Kekeringan</a>
    </li>

  </ul>
</nav>

           </center>
          </div>

        </div>
        <div class="row">
        <div class="col-sm-12">  
         <?php foreach ($bencanaangin->result() as $key) {?>
          <div class="list-group">
          

            <a href="<?php echo site_url('Rincian/rincianpetugas')?>" class="list-group-item list-group-item-action">
              <?php echo $key->nama_angin;?> </a>

             <!--  <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Ponorogo</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Minas</a> -->
              
              
              
          </div>
           <?php }?>
        </div>
        </div>

            
    </section>