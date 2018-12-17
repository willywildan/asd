<!doctype html>
  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Daftar untuk berdonasi</title>
  </head>
  
  <body>
  	<div class="container">
	  	<div class="row">
			<div class="col-md-6">
			<form action="<?php echo base_url();?>daftardonatur.php" method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			    <label >Nama Lengkap</label>
			    <input type="text" class="form-control" id="namalengkap" name="namalengkap">
			  </div>

			  <div class="form-group">
			    <label >Email</label>
			    <input type="text" class="form-control" id="email" name="email">
			  </div>

			  <div class="form-group">
			    <label >Telepon</label>
			    <input type="text" class="form-control" id="telepon" name="telepon">
			  </div>

			   <div class="form-group">
			    <label >Photo Profile</label>
			     <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control-file" id="foto" name="foto">
			  </div>


			   <div class="form-group">
			    <label >Alamat</label>
			   <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
			  </div>
			
			<div class="col-md-6">
				
				<div class="form-group">
			    	<label >Username</label>
			    	<input type="text" class="form-control" id="username" name="username">
			  	</div>

			  	<div class="form-group">
			    	<label >Password</label>
			    	<input type="password" class="form-control" id="password" name="password">
			  	</div>

			  	<div class="form-group">
			    	<label >NIK</label>
			    	<input type="password" class="form-control" id="nik" name="nik">
			  	</div>

			  	<div class="form-group">
			    	<input type="text" class="form-control" id="level" name="level" value="donatur" readonly="TRUE" style="display: none;"> 
			  	</div>
			  	
			  	<button type="submit" class="btn btn-outline-primary">Daftar Sekarang</button>	
			  </div>

			</form>  
			</div>
	  	</div>
  	</div>
  </body>
</html>