<?php $this->view('static/messages'); ?>
<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html"><?=$lang['home']?></a></span> <span><?=$lang['contact']?></span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?=$lang['contact']?></h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4"><?=$lang['contact_information']?></h2>
                </div>
                <div class="w-100"></div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <form action="<?=base_url('contact/send');?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?=$lang['your_name']?>" name="name" value="<? echo $this->session->flashdata('datas')['name']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="<?=$lang['your_email']?>" name="email" value="<? echo $this->session->flashdata('datas')['email']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?=$lang['subject']?>" name="subject" value="<? echo $this->session->flashdata('datas')['subject']; ?>">
                        </div>
                        <div class="form-group">
                            <textarea id="" cols="30" rows="7" class="form-control" placeholder="<?=$lang['message']?>" name="message" value="<? echo $this->session->flashdata('datas')['message']; ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="<?=$lang['send_message']?>" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 pr-md-5">
                    <div class="alert alert-primary" role="alert">
                       <span class="font-weight-bold"><i class="fas fa-phone"></i> <?=$lang['phone']?>: </span> <span>+36 20 5678911</span>
                    </div>
                    <div class="alert alert-primary" role="alert">
                        <span class="font-weight-bold"><i class="fas fa-envelope"></i> <?=$lang['email']?>: </span> <span>youremail@email.hu</span>
                    </div>

                </div>
            </div>
        </div>
    </section>
