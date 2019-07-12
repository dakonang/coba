<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/css.css') ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <title>danang rifai</title>
    <style>

    </style>
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark">
	<div class="container">
  <a class="navbar-brand" href="#">Danang rifai</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div id="navbar-example2" class="navbar-nav ml-auto">
      <a class="nav-item nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#abaut">Abaut me</a>
      <a class="nav-item nav-link" href="#project">My project</a>
      <a class="nav-item nav-link" href="#contact">Contact me</a>
    </div>
  </div>
  </div>
</nav>


<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <img class="img-thumbnail rounded-circle" src="<?php echo base_url('assets/images/danang-rifai.jpg') ?>" alt="danang rifai">
    <p class="data text-light"><a class="text-light" href="https://danangrifai.000webhostapp.com">web developer</a></p>
  </div>
</div>

<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
	
<section class="abaut" id="abaut">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php echo $this->session->userdata('alert'); ?>
				<h2 class="text-center">abaut me</h2>
			<hr>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6 mb-2">
				nama saya danang rifai lahir di kota klaten pada tanggal 21 september 1993. sekarang saya tinggal di dk.tlogiwono ds.bono kec.tulung kab.klaten
			</div>
		
			<div class="col-md-6">
				saya belajar menjadi web developer secara otodidak
				meski saya hanya lulus smk tetapi saya tidak akan kalah dengan lulusan sarjanah. kemampuan yang saya miliki 
				<ul>
					<li>php(codeigniter)</li>
					<li>java script(jquery)</li>
					<li>css(bootstrap)</li>
					<li>html</li>
					<li>rest api</li>
				</ul>
			</div>
		</div>
		
	</div>
</section>


<section class="portfolio" id="project">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 pt-5">
				<h2 class="text-center">my project</h2>
				<hr>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-6 p-5">
				<p class="h5 text-dark">aplikasi penjualan/ kasir codeigniter</p><br>
					<a href="https://dakon.000webhostapp.com" target="_blank">
					<img src="https://1.bp.blogspot.com/-KvCAlIc81ZM/W_tTeeIUISI/AAAAAAAAAcs/2dgmErNdQaUef1nYXqLYEmieyLzGTFgRQCEwYBhgL/s1600/kasir-codeigniter-php.png" alt="danang rifai" class="img-fluid">
					</a>
			</div>
		
			<div class="col-md-6 p-5">
				<p class="h5 text-dark">aplikasi ecomerce/ toko online codeigniter</p><br>
				<img src="<?php echo base_url('assets/images/ecomerce.jpg') ?>" alt="danang rifai" class="img-fluid">
			</div>
		</div>
	
	
	
	</div>
</section>

<section class="contact" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-12 pt-5">
				<h2 class="text-center">contact me</h2>
				<hr>
			</div>
		</div>
		
		<form id="form-send-pesan" class="form-signin" action="<?php echo site_url('danangrifai') ?>" method="post" >
			
				<div class="form-group">
					<label for="nama" >nama</label>
					<input type="text" name="nama" id="nama" placeholder="nama" class="form-control required" value="<?php echo set_value('nama'); ?>">
						<?php echo"<span class='text-danger'>". form_error('nama')."</span>"; ?>
					<div class="invalid-feedback"></div>
				</div>
				
				<div class="form-group">
					<label for="email" class="labelfrm ">email</label>
					<input type="text" name="email" id="email" placeholder="email" class="form-control required" value="<?php echo set_value('email'); ?>">
						<?php echo"<span class='text-danger'>". form_error('email')."</span>"; ?>
					<div class="invalid-feedback"></div>
				</div>
				
				<div class="form-group">
					<label for="telephone">telephone</label>
					<input type="number" name="telephone" id="telephone" placeholder="telephone" value="<?php echo set_value('telephone'); ?>" class="form-control required">
						<?php echo"<span class='text-danger'>". form_error('telephone')."</span>"; ?>
					<div class="invalid-feedback"></div>
				</div>
				
				<div class="form-group">
					<label for="pesan">pesan</label>
					<textarea name="pesan" id="pesan" placeholder="pesan" class="form-control required" rows="3"></textarea>
					<?php echo"<span class='text-danger'>". form_error('pesan')."</span>"; ?>
					<div class="invalid-feedback"></div>
				</div>
				
				<button class="btn btn-success" type="submit">kirim</button>
				
		</form>
				
	</div><!--container-->
		
		<div class="container mt-5 mb-3">
			<div class="row">
				<div class="col-md-6 my-2">
				<i class="fab fa-fw fa-2x fa-whatsapp"></i>
				<a class="text-decoration-none text-dark font-weight-bold"  href="https://wa.me/082221370880"><span>082221370880</span></a>
				</div>
				<div class="col-md-6 my-2">
				<i class="fab fa-fw fa-2x fa-facebook"></i>
				<a class="text-decoration-none text-dark font-weight-bold" href="https://www.facebook.com/danangrife" target="_blank">danang konang</a>
				</div>
				<div class="col-md-6 my-2">
				<i class="fab fa-fw fa-2x fa-instagram"></i>
				<a class="text-decoration-none text-dark font-weight-bold" href="https://www.instagram.com/dng_konang" target="_blank">danang konang</a>
				</div>
			</div>
		</div><!--container-->
		
</section> <!--ahir kontak-->

</div><!--scroll-->


<footer>
	<div class="container text-center">
		<div class="row">
			<div class="col-12">
				<a href="#">&copy; danangrifai 2018 - <?php echo date('Y'); ?></a>
			</div>
		</div>
    </div>
</footer>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="<?php echo base_url().'assets/js/validasi.js'?>"></script>
    <script>
        
    </script>
  </body>
</html>