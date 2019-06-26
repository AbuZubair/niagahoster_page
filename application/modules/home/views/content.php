
<div class="container">	

	<div class="row page-header" >
		<div class="col-lg-6 col-sm-12">
			<h1>PHP Hosting</h1>
			<p style="font-size:30px;">Cepat, handal, penuh dengan modul PHP yang anda butuhkan</p>
			<ul class="list-unstyled">
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span>&nbsp;Solusi PHP untuk query yang lebih cepat.</li>
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span>&nbsp;Konsumsi memori yang lebih rendah.</li>
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span>&nbsp;Support PHP 5.3, PHP 5.4, PHP 5.6, PHP 5.7.</li>
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span>&nbsp;Fitur enkripsi IonCube dan Zend Guard Loader</li>
			</ul>
		</div>

		<div class="col-lg-6 col-sm-12">
			<img src="<?php echo base_url()?>assets/svg/illustration banner PHP hosting-01.svg" alt="" width="90%" style="float:right">
		</div> 
			
	</div>

	<div class="row php-tools font-m-light">
		
		<div class="col-lg-4 col-sm-12">
			<div class="img-tools">
				<center><object type="image/svg+xml" data="<?php echo base_url()?>assets/svg/icon PHP Hosting_zendguard.svg" ></object></center>
			</div>
			<center><p>PHP Zend Guard Loader</p></center>
		</div>
		<div class="col-lg-4 col-sm-12">
			<div class="img-tools">
				<center><object type="image/svg+xml" data="<?php echo base_url()?>assets/svg/icon PHP Hosting_composer.svg" height="100"></object></center>
			</div>
			<center><p>PHP Composer</p></center>
		</div>
		<div class="col-lg-4 col-sm-12">
			<div class="img-tools">
				<center><object type="image/svg+xml" data="<?php echo base_url()?>assets/svg/ioncube.svg" ></object></center>
			</div>
			<center><p>PHP Ioncube Loader</p></center>
		</div>
			
	</div>

	<div class="row justify-content-center text-center" style="margin-top:70px !important;">
		<div class="col-lg-12 col-sm-12">
			<h2>Paket Hosting Singapura yang Tepat</h2>
			
			<p class="font-m-light" style="font-size:28px;">Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
		</div>
	</div>
	
	<div class="row p-4 no-gutters justify-content-center price-table">

		<?php foreach($data as $value): ?>
			<div class="col-lg-3 col-sm-12 col-12 <?php echo (isset($value->best_seller) && $value->best_seller==1)?'border border-primary price-highlight" style="height:720px !important;border-radius:3px !important;"':'' ?>" >
				<div class="title" style="<?php echo (isset($value->best_seller) && $value->best_seller==1)?'background-color: #298eea !important;color: #fff !important;border: none !important;':'' ?>" > <?php echo isset($value)?ucfirst($value->paket_name):'' ?> </div>
				<div class="price <?php echo (isset($value->best_seller) && $value->best_seller==1)?'best-seller':'' ?>">
					<div <?php echo (isset($value->best_seller) && $value->best_seller==1)?'class="old-price strike-white" style="color: #fff !important;"':'class="old-price strike-black"' ?> ><sup class="rp">Rp</sup> <?php echo isset($value)?number_format($value->pr_old_price,0,",","."):'' ?></div>
					<div class="new-price" style="<?php echo (isset($value->best_seller) && $value->best_seller==1)?'color: #fff !important;':'' ?>"><sup><span>Rp</span></sup> <span><?php echo isset($value)?$value->pr_new_price_1:'' ?></span><sup><?php echo isset($value)?$value->pr_new_price_2:'' ?>/ <span><?php echo isset($value)?$value->pr_period:'' ?></span></sup></div>
				</div>
				<div class="users" style="<?php echo (isset($value->best_seller) && $value->best_seller==1)?'background:#177eda!important; color:#ffffff !important':'' ?>">
					<?php echo isset($value)?'<b>'.number_format($value->pengguna,0,",",".").'</b> <p>Pengguna Terdaftar</p>':'' ?>
				</div>
				<div class="row justify-content-center text-center" style="padding-top:15px;line-height:2em">
					<div class="resource montserrat-bold">
						<?php echo isset($value)?$value->resource_power.'x Resource Power':'' ?>
					</div>
					<ul class="list-unstyled">
						<?php foreach ($value->fasilitas as $val) : ?>
							<?php if($val!='') echo '<li>'.$val.'</li>' ?>
						<?php endforeach ?>
					</ul>
				</div>
				<div class="button">
					<a href="#"><button type="button" class="btn <?php echo (isset($value->best_seller) && $value->best_seller==1)?'btn-primary':'btn-outline-dark' ?> btn-lg montserrat-bold" style="border-radius:30px !important; font-size:15px !important;"><?php echo (isset($value) && $value->paket_name=='Bisnis')?'Diskon 40%':'Pilih Sekarang' ?></button></a>
				</div>
			</div>

		<?php endforeach ?>

	</div>

	<div class="row limit-php font-m-light">
		<div class="col-lg-12 col-sm-12">		
			<center><p class="font-m-light" style="font-size:28px;">Powerful dengan Limit PHP yang Lebih Besar</p></center>
		</div>

		<div class="col-lg-6 col-sm-12"  style="text-align: left;">
			<ul class="list-unstyled">
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span><span style="margin-left:5%">max execution time 300s</span></li>
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span><span style="margin-left:5%">max execution time 300s</span></li>
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span><span style="margin-left:5%">php memory limit 1024 MB</span></li>
			</ul>
		</div>
		<div class="col-lg-6 col-sm-12">
			<ul class="list-unstyled">
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span><span style="margin-left:5%">post max size 128 MB</span></li>
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span><span style="margin-left:5%">upload max filesize 128 MB</span></li>
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span><span style="margin-left:5%">max input vars 2500</span></li>
			</ul>
		</div>
	</div>


	<div class="row p-4 paket-hosting font-m-light">

	
		<div class="col-lg-12 col-sm-12">		
			<center><p class="font-m-light" style="font-size:28px;">Semua Paket Hosting Sudah Termasuk</p></center>
		</div>

		<div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="card-logo">
					<object type="image/svg+xml" data="<?php echo base_url()?>assets/svg/icon PHP Hosting_PHP Semua Versi.svg" height="100"></object>
				</div>
				<div class="card-body">
					<h4 class="card-title montserrat-bold">PHP Semua Versi</h4>
					<p class="card-text">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
				</div>
			</div>

		</div>

		<div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="card-logo">
					<object type="image/svg+xml" data="<?php echo base_url()?>assets/svg/icon PHP Hosting_My SQL.svg" height="100"></object>
				</div>
				<div class="card-body">
					<h5 class="card-title montserrat-bold">MySQL Versi 5.6</h5>
					<p class="card-text">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="card-logo">
					<object type="image/svg+xml" data="<?php echo base_url()?>assets/svg/icon PHP Hosting_CPanel.svg" height="100"></object>
				</div>
				<div class="card-body">
					<h5 class="card-title montserrat-bold">Panel Hosting cPanel</h5>
					<p class="card-text">Kelola website dengan panel canggih yang familiar di hati Anda.</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="card-logo">
					<object type="image/svg+xml" data="<?php echo base_url()?>assets/svg/icon PHP Hosting_garansi uptime.svg" height="100"></object>
				</div>
				<div class="card-body">
					<h5 class="card-title montserrat-bold">Garansi Uptime 99.99%</h5>
					<p class="card-text">Data center yang mendukung kelangsungan website Anda 24/7.</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="card-logo">
					<object type="image/svg+xml" data="<?php echo base_url()?>assets/svg/icon PHP Hosting_InnoDB.svg" height="100"></object>
				</div>
				<div class="card-body">
					<h5 class="card-title montserrat-bold">Database InnoDB Unlimited</h5>
					<p class="card-text">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="card-logo">
					<object type="image/svg+xml" data="<?php echo base_url()?>assets/svg/icon PHP Hosting_My SQL remote.svg" height="100"></object>
				</div>
				<div class="card-body">
					<h5 class="card-title montserrat-bold">Wildcard Remote MySQL</h5>
					<p class="card-text">Mendukung s/d 25 max_user_connection dan 100 max_connection.</p>
				</div>
			</div>
		</div>
		
	</div> 
	
	<div class="row p-4 framework-php font-m-light">
		<div class="col-lg-12 col-sm-12">		
			<center><p class="font-m-light" style="font-size:28px;">Mendukung Penuh Framework Laravel</p></center>
		</div>

		<div class="col-lg-7 col-sm-12">
			<p>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP Hosting murah kami mendukung penuh framework favorit Anda</p>
			<ul class="list-unstyled">
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span><span style="margin-left:5%">Install Laravel <b>1 klik</b> dengan Softaculous Installer.</span></li>
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span><span style="margin-left:5%">Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json, dan fileinfo</b> </span></li>
				<li><span class="text-success"><i class="fas fa-check-circle"></i></span><span style="margin-left:5%">Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstal packages pilihan Anda. </span></li>
			</ul>
			<p style="font-size:12px;">Nb: Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
			<div class="button">
				<a href="#"><button type="button" class="btn btn-primary btn-lg montserrat-bold" style="border-radius:30px !important; font-size:15px !important;">Pilih Hosting Anda</button></a>
			</div>
		</div>
		<div class="col-lg-5 col-sm-12 flex-center">
			<img src="<?php echo base_url()?>assets/svg/illustration banner support laravel hosting.svg" alt="" width="100%" style="float:right">
		</div>
	</div>

	<div class="row modul-php font-m-light">
		<div class="col-lg-12 col-sm-12" style="margin-bottom:50px;">		
			<center><p class="font-m-light" style="font-size:28px;">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</p></center>
		</div>

		<div class="col-lg-3 col-sm-6 col-6 flex-center"  style="text-align: left;">
			<ul class="list-unstyled">
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
			</ul>
		</div>
		<div class="col-lg-3 col-sm-6 col-6 flex-center">
			<ul class="list-unstyled">
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
			</ul>
		</div>
		<div class="col-lg-3 col-sm-6 col-6 flex-center">
			<ul class="list-unstyled">
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
			</ul>
		</div>
		<div class="col-lg-3 col-sm-6 col-6 flex-center">
			<ul class="list-unstyled">
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
				<li>IcePHP</li>
				<li>apc</li>
				<li>apcu</li>
				<li>apm</li>
				<li>ares</li>
				<li>bcmath</li>
			</ul>
		</div>
		<div class="col-lg-12 col-sm-12 button">
			<center><a href="#"><button type="button" class="btn btn-outline-dark btn-lg montserrat-bold" style="border-radius:30px !important; font-size:15px !important;">Selengkapnya</button></a></center>
		</div>
	</div>
	
	<div class="row p-4 tek-php font-m-light">
		
		<div class="col-lg-5 col-sm-12">
			<p class="font-m-light" style="font-size:28px;">Linux Hosting yang Stabil dengan Teknologi LVE</p>
			<p>SuperMicro <b>Intel Xeon 24-Cores</b> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quia autem totam est vel quod aspernatur placeat? Rem, est adipisci perspiciatis tempora velit id ex voluptates, necessitatibus minus provident odio?</p>
			<div class="button">
				<a href="#"><button type="button" class="btn btn-primary btn-lg montserrat-bold" style="border-radius:30px !important; font-size:15px !important;">Pilih Hosting Anda</button></a>
			</div>
		</div>
		<div class="col-lg-7 col-sm-12 flex-center">
			<img src="<?php echo base_url()?>assets/images/Image support.png" alt="" width="80%" style="float:right">
		</div>
	</div>

	<div class="row font-m-light" style="padding-left:1.5rem!important;margin-bottom:30px;">
		<div class="col-lg-6 col-sm-12">
			<p>Bagikan jika Anda menyukai halaman ini</p>
		</div>
		<div class="col-lg-2 col-sm-4 ">
			<a href="#" class="my-2 my-sm-0" style="text-decoration:none;margin-right:2px;"><img src="<?php echo base_url()?>assets/images/fb.png" alt="" width="38" style="border-radius:5px"></a>
			80 k
		</div>
		<div class="col-lg-2 col-sm-4 medsos" >
			<a href="#" class="my-2 my-sm-0" style="text-decoration:none;margin-right:2px;"><img src="<?php echo base_url()?>assets/images/twitter.png" alt="" width="38" style="border-radius:5px"></a>
			450
			
		</div>
		<div class="col-lg-2 col-sm-4 medsos">
			<a href="#" class="my-2 my-sm-0" style="text-decoration:none;margin-right:2px;"><img src="<?php echo base_url()?>assets/images/google.png" alt="" width="38" style="border-radius:5px"></a>
			1900
			
		</div>
	</div>

</div>



