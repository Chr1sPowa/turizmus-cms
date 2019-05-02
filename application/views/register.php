<?php $this->view('static/messages'); ?>
<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html"><?=$lang['home']?></a></span> <span><?=$lang['register']?></span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?=$lang['register_h1']?></h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4 text-center">
                <h2 class="h4"><?=$lang['register_text']?></h2>
            </div>
            <div class="w-100"></div>
        </div>
        <div class="row block-9">
            <div class="col-md-12 pr-md-5">
                <form action="<?=base_url('register/send');?>" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="LastName"  placeholder="Keresztnév" value="<? echo $this->session->flashdata('datas')['LastName']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Vezetéknév" value="<? echo $this->session->flashdata('datas')['FirstName']; ?>" name="FirstName">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email cím" value="<? echo $this->session->flashdata('datas')['Email']; ?>" name="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Felhasználónév" value="<? echo $this->session->flashdata('datas')['UserName']; ?>" name="UserName">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Jelszó" value="<? echo $this->session->flashdata('datas')['Password']; ?>" name="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Jelszó újra" value="<? echo $this->session->flashdata('datas')['PasswordAgain']; ?>" name="PasswordAgain">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Küldés" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
