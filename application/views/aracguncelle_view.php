<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Araç Güncelle</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    
    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="d-none d-lg-inline-flex">Hoş Geldiniz <?php echo $this->session->userdata('kadi')?> Bey</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <a href="<?php echo base_url('profil')?>" class="dropdown-item" style="color:white;">Ana Sayfa</a>
                    <a href="<?php echo base_url('profil/duzenle')?>" class="dropdown-item" style="color:white;">My Profile</a>
                    <a href="<?php echo base_url('cikis')?>" class="dropdown-item" style="color:white;">Log Out</a>
                </div>
            </div>
        </div>
    </nav> 

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Araç Kaydet</h6>
                    <form action="<?php echo base_url('Araba_kayit/guncelle/'.$yeni->id) ?>" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Araç Markası</label>
                            <input type="text" value="<?php echo $yeni->marka;?>" name="marka" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Araç Modeli</label>
                            <input type="text" value="<?php echo $yeni->model;?>" name="model" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Araç Plakası</label>
                            <input type="text" value="<?php echo $yeni->plaka;?>" name="plaka" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kayıt Alan</label>
                            <input type="text" value="<?php echo $yeni->kullanici;?>" name="kullanici" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kayıt Tarih/Saat</label>
                            <input type="text" value="<?php echo $yeni->kayit_tarihi;?>" name="kayit_tarihi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                        </div>
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </form>
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