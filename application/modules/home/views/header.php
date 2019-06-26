<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="<?php echo base_url()?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.cookie.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom.js"></script> 
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css" />  
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />    
    <link href="<?php echo base_url()?>assets/fonts/fontawesome-free-5.8.1/css/all.css" rel="stylesheet"> <!--load all styles -->
    

    <title>Niagahoster</title>
</head>
<body>

	<!-- <button id="back-to-top" title="Go to top">Top</button> -->
	<button type="button" class="btn btn-outline-dark"  id="back-to-top" ><i class="fas fa-arrow-up"></i></button>

	<div id="alert_panel" class="row">
		<div class="col notif-panel">
			<span class="text-primary" style="float:left"><i class="fas fa-bookmark fa-2x"></i></span>
			<p>Gratis Ebook 9 Cara Cerdas Menggunakan Domain</p>
			<button type="button" class="close text-primary" aria-label="Close" id="btn_close">
				<span aria-hidden="true">&times;</span>
			</button>	
		</div>
		<div class="col">
			<div class= "notif-contact" >
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-phone"></i> 0274 5305505</li>
					<li class="list-inline-item"><i class="fas fa-comments"></i> Live Chat</li>
					<li class="list-inline-item"><i class="fas fa-user-circle"></i> Member Area</li>
				</ul>			
			</div>
		</div>
	</div>

	<hr>

	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-light bg-white" style="width:100%">
			<div class="navbar-brand">
				<a href="#">
					<div id="brand"></div>
				</a>
			</div>
				
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav ml-auto">
					<?php foreach($data_menu as $value): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo isset($value->link)?$value->link:'' ?> "><?php echo isset($value->menu_name)?$value->menu_name:'' ?></a>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</nav>

	</div>	



	



