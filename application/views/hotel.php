 <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/bg_5.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Főoldal</a></span> <span>Szállások</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Szállások</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center">Hotel foglalása</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                            <div class="col-md-7">
                            <input type="text" name="ChildrenNum" id="ChildrenNum" placeholder="Gyerekek száma" class="form-control">
                            <input type="text" name="NumOfDays" id="NumOfDays" placeholder="Hány éjszakára" class="form-control">
                            <input type="text" name="AdultNum" id="AdultNum" placeholder="Felnőttek száma" class="form-control">
                                <div class="form-group text-center">
                                    <br>
                                    <input type="button" name="calculatePrice" id="calculatePrice" class="btn btn-primary" value="Calculate Price">
                                </div>
                                </div>
                                <div class="col-md-5">
                                    Gyerek összes: <span style="color: red" id="allPriceSpanChild">0</span> Ft<br>
                                    Felnőtt összes: <span style="color: red" id="allPriceSpanAdult">0</span> Ft<br>
                                    Teljes fizetendő <span style="color: red" id="allPriceSpan">0</span> Ft
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Bezárás</button>
                            <button type="button" class="btn btn-default" id="bookingSubmit">Rendelés leadása</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 sidebar">
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <h3 class="heading mb-4">Találatok szűkítése</h3>
                        <form action="#">
                            <div class="fields">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Város">
                                </div>
                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control" placeholder="Keyword search">
                                            <option value="">Válasszon régiót!</option>
                                            <option value="2">Dunántúl</option>
                                            <option value="3">Közép-Magyarország</option>
                                            <option value="4">Észak-Magyarország</option>
                                            <option value="5">Tiszántúl</option>
                                            <option value="6">Dél-Alföld</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="checkin_date" class="form-control" placeholder="Érkezés napja">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="checkin_date" class="form-control" placeholder="Távozás napja">
                                </div>
                                <h3 class="heading mb-4">Összeghatár</h3>
                                <div class="form-group">
                                    <div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
                                        <input value="1000" min="0" max="120000" step="500" type="range"/>
                                        <input value="50000" min="0" max="120000" step="500" type="range"/>
                                        </svg>
                                    </div>
                                </div>

                                <h3 class="heading mb-4">Csillagok száma</h3>
                                <form method="post" class="star-rating">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                                        </label>
                                    </div>
                                </form>
                                <div class="form-group">
                                    <input type="submit" value="Szűkítés" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <?
                        if($this->session->flashdata('hotels')) {
                            $hotels = $this->session->flashdata('hotels');
                        }
                        ?>
                        <?foreach($hotels as $key => $hotel):?>
                        <div class="col-md-4 ftco-animate">
                            <div class="destination">
                                <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?=($hotel->Path)?>);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#"><?=$hotel->NumofStarsAll/$hotel->NumofStarsMember?></a></h3>
                                            <p class="rate">
                                                <?php $stars = $hotel->NumofStarsAll/$hotel->NumofStarsMember; ?>
                                                <?for($i = 0; $i < $stars;$i++):?>
                                                    <? if($i+1 > floor($stars) && $stars-floor($stars) >= 0.5):?>
                                                        <i class="icon-star-half"></i>
                                                    <?else:?>
                                                        <i class="icon-star"></i>
                                                    <?endif;?>
                                                <?endfor;?>
                                            </p>
                                        </div>
                                        <div class="two col-md-3">
                                            <span class="price per-price"><?=$hotel->AdultPrice?>Ft <small>Felnőtt/fő/éj</small></span><br>
                                            <span class="price per-price"><?=$hotel->ChildrenPrice?>Ft <small>Gyerek/fő/éj</small></span>
                                        </div>
                                    </div>
                                    <p><?=$hotel->Description?></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> <?=$hotel->vnev?></span>
                                        <span class="ml-auto"><a href="#" class="attachHotel" data-hotel_id="<?=$hotel->HotelID?>" data-placement="top" title="Csak bejelentkezés után lehetséges!" data-toggle="modal" data-target="#myModal">Foglalás</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?endforeach;?>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->
