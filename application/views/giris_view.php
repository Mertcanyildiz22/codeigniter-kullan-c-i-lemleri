<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Giriş Yap</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/')?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/')?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/')?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/')?>css/style.css" rel="stylesheet">
    
</head>
<body>

	<div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Mertcan Yıldız Proje</h3>
                        
                        <h3>Giriş Yap</h3>
                    </div>
					<form action="<?php echo base_url('Giris/girisyap') ?>" method="POST">
                    <div class="form-floating mb-3">
						<input type="email" class="form-control" name="eposta" placeholder="E-posta">
                        <label for="floatingInput">E-posta Adresiniz</label>
                    </div>
                    <div class="form-floating mb-4">
					<input type="password" class="form-control" name="sifre" placeholder="Şifre">
                        <label for="floatingPassword">Şifreniz</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="<?php echo base_url('Giris/sifreunuttum')?>">Şifremi Unuttum</a>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Giriş Yap</button>
                    <a href="<?php echo base_url('kayit')?>">Kayıt Ol</a>
					</form>
                </div>
            </div>
        </div>
    </div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/')?>lib/chart/chart.min.js"></script>
    <script src="<?php echo base_url('assets/')?>lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url('assets/')?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url('assets/')?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets/')?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url('assets/')?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo base_url('assets/')?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?php echo base_url('assets/')?>js/main.js"></script>

</body>
</html>
