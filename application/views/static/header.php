<?
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ApartMarkt – Foglalja nálunk utazását!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url('assets/css/open-iconic-bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/animate.css')?>">

    <link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/magnific-popup.css')?>">

    <link rel="stylesheet" href="<?=base_url('assets/css/aos.css')?>">

    <link rel="stylesheet" href="<?=base_url('assets/css/ionicons.min.css')?>">

    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/jquery.timepicker.css')?>">


    <link rel="stylesheet" href="<?=base_url('assets/css/flaticon.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/icomoon.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
    <!-- MDBootstrap Datatables  -->
    <link href="<?=base_url('assets/css/datatables.min.css')?>" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?=base_url('welcome')?>"><?=$lang['apart']?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menü
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?=($this->uri->rsegments[1] == "welcome") ? 'active' : '' ?>"><a href="<?=base_url('welcome');?>" class="nav-link"><?=$lang['home']?></a></li>
                <li class="nav-item <?=($this->uri->rsegments[1] == "AboutController") ? 'active' : '' ?>"><a href="<?=base_url('about');?>" class="nav-link"><?=$lang['about']?></a></li>
                <li class="nav-item <?=($this->uri->rsegments[1] == "HotelController") ? 'active' : '' ?>"><a href="<?=base_url('hotels');?>" class="nav-link"><?=$lang['hotels']?></a></li>
                <li class="nav-item <?=($this->uri->rsegments[1] == "BlogController") ? 'active' : '' ?>"><a href="<?=base_url('blog');?>" class="nav-link"><?=$lang['blog']?></a></li>
                <li class="nav-item <?=($this->uri->rsegments[1] == "ContactController") ? 'active' : '' ?>"><a href="<?=base_url('contact');?>" class="nav-link"><?=$lang['contact']?></a></li>
                <li class="nav-item cta <?=($this->uri->rsegments[1] == "RegisterController") ? 'active' : '' ?>"><a href="<?=base_url('register');?>" class="nav-link"><span><?=$lang['register']?></span></a></li>
                <? if(isset($_SESSION['userSession'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?=$user[0]->FirstName . " " .  $user[0]->LastName?></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?=base_url('home/bookings')?>">Foglalásaim</a>
                            <a class="dropdown-item" href="<?=base_url('logout')?>">Kijelentkezés</a>
                        </div>
                    </li>
                <? else: ?>
                <li class="nav-item <?=($this->uri->rsegments[1] == "LoginController") ? 'active' : '' ?>"><a href="<?=base_url('login');?>" class="nav-link"><span><?=$lang['login']?></span></a></li>
                <? endif; ?>
            </ul>
        </div>
    </div>
</nav>


