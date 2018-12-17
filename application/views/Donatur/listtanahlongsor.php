 <section class="profil " id="profil">
      <div class="container ">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Bencana</h2>
            <hr>
            <center>
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListGunungMeletus/listgunungmeletusdonatur') ?>">Gunung Meletus</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListBanjir/listbanjirdonatur')?>">Banjir</a>
    </li>
    <li class="page-item active"><a class="page-link" href="<?php echo site_url('ListTanahLongsor/listtanahlongsordonatur')?>">Tanah Longsor</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListAnginTopan/listangintopandonatur')?>">Angin topan</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListKebakaran/listkebakarandonatur')?>">Kebakaran</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListGempaBumi/listgempabumidonatur')?>">Gempa Bumi</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListTsunami/listtsunamidonatur')?>">Tsunami</a>
    </li>
    <li class="page-item"><a class="page-link" href="<?php echo site_url('ListKekeringan/listkekeringandonatur')?>">Kekeringan</a>
    </li>

  </ul>
</nav>

           </center>
          </div>

        </div>
        <div class="row">
        <div class="col-sm-12">

        <?php foreach ($bencanatanah->result() as $key) { ?>

          <div class="list-group">
            <a href="<?php echo site_url('Rincian/rinciandonatur')?>" class="list-group-item list-group-item-action"> <?php echo $key->nama_tanahLongsor;?></a>

              <!-- <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Jepara</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action ">Bandar</a>
              <a href="<?php echo base_url();?>index.php/rincian" class="list-group-item list-group-item-action">Lumajang</a> -->
              
              
          </div>

          <?php }?>
        </div>
        </div>

            
    </section>