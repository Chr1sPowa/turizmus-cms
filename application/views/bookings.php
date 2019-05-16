<?php $this->view('static/messages'); ?>
    <div class="hero-wrap js-fullheight" style="background-image: url('http://apartmarkt.eu/assets/images/bg_2.jpg');">
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
            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="th-sm">#</th>
                    <th class="th-sm">Kép</th>
                    <th class="th-sm">Gyerekek</th>
                    <th class="th-sm">Felnőttek</th>
                    <th class="th-sm">Éjszakák</th>
                    <th class="th-sm">Wifi</th>
                    <th class="th-sm">Parking</th>
                    <th class="th-sm">Hotel neve</th>
                    <th class="th-sm">Kezelés</th>
                </tr>
                </thead>
                <tbody>
                <? $i = 1; ?>
                <?foreach($getAllBookings as $key => $booking):?>
                    <?php
                    if (strpos($booking->Path, 'http') || strpos($booking->Path, 'https') !== false) {
                        $path = $booking->Path;
                    }
                    else {
                        $path = base_url($booking->Path);
                    }
                    ?>
                <tr id="booking_<?=$booking->BookingID?>">
                    <td><?=$i?></td>
                    <td><div class="pop"><img src="<?=$path?>" width="75" height="75"></div></td>
                    <td><?=$booking->ChildrenNum?></td>
                    <td><?=$booking->AdultNum?></td>
                    <td><?=$booking->NumOfDays?></td>
                    <td><?=($booking->Wifi == 1) ? 'Elérhető' : 'Nincs'?></td>
                    <td><?=($booking->Parking == 1) ? 'Elérhető' : 'Nincs'?></td>
                    <td><?=$booking->NameofHotel?></td>
                    <td><button class="btn btn-danger deleteBooking" data-id="<?=$booking->BookingID?>">Lemondás</button></td>
                </tr>
                    <? $i++; ?>
                <? endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Kép</th>
                    <th>Gyerekek</th>
                    <th>Felnőttek</th>
                    <th>Éjszakák</th>
                    <th>Wifi</th>
                    <th>Parking</th>
                    <th>Hotel neve</th>
                    <th>Kezelés</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="w-100"></div>
    </div>
    </section>