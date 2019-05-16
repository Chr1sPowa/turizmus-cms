<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Információk</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Rólunk</a></li>
                        <li><a href="#" class="py-2 d-block">Szolgáltatás</a></li>
                        <li><a href="#" class="py-2 d-block">Felhasználási feltételek</a></li>
                        <li><a href="#" class="py-2 d-block">Állásajánlatok</a></li>
                        <li><a href="#" class="py-2 d-block">Utasbiztosítás</a></li>
                        <li><a href="#" class="py-2 d-block">Adatkezelési tájékoztató</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Segítség</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Jogi és adatvédelmi nyilatkozat</a></li>
                        <li><a href="#" class="py-2 d-block">Fizetési lehetőségek</a></li>
                        <li><a href="#" class="py-2 d-block">Foglalási tippek</a></li>
                        <li><a href="#" class="py-2 d-block">Ügyfélszolgálat</a></li>
                        <li><a href="#" class="py-2 d-block">Kapcsolat</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Kérdése van?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Veszprém</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+36 88 000 000</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@veszprém.hu</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Minden jog fenttartva!
                    </p>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <img src="" class="imagepreview" style="width: 100%;" >
            </div>
        </div>
    </div>
</div>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery-migrate-3.0.1.min.js')?>"></script>
<script src="<?=base_url('assets/js/popper.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.easing.1.3.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.waypoints.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.stellar.min.js')?>"></script>
<script src="<?=base_url('assets/js/owl.carousel.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?=base_url('assets/js/aos.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.animateNumber.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap-datepicker.js')?>"></script>
<!--<script src="<?=base_url('assets/js/jquery.timepicker.min.js')?>"></script>-->
<script src="<?=base_url('assets/js/scrollax.min.js')?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?=base_url('assets/js/google-map.js')?>"></script>
<script src="<?=base_url('assets/js/main.js')?>"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="<?=base_url('assets/js/datatables.min.js')?>"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-1686162514563267",
        enable_page_level_ads: true
    });
    window.hotelID = null;
    $(".attachHotel").click(function() {
        window.hotelID  = $(this).attr('data-hotel_id');
        var data = {
          hotelID: hotelID
        };
        $.ajax({
            url: '<?=base_url('attach')?>',
            type: 'GET',
            data: data,
            dataType: 'json',
            success: function(result) {
                console.log(result);
                console.log(result.success);
                if(result.success === false) {
                    toastr.error(result.msg);
                }
           }
        });
    });
    $('#bookingSubmit').click(function() {
        var ChildrenNum = $('#ChildrenNum').val();
        var NumOfDays = $('#NumOfDays').val();
        var AdultNum = $('#AdultNum').val();
        var data = {
            HotelID: window.hotelID,
            ChildrenNum: ChildrenNum,
            NumOfDays: NumOfDays,
            AdultNum: AdultNum,
        };
        $.ajax({
            url: '<?=base_url('booking')?>',
            type: 'GET',
            data: data,
            dataType: 'json',
            success: function(result) {
                console.log(result);
                if(result.success === false) {
                    toastr.error(result.msg);
                }
                if(result.success) {
                    toastr.success(result.msg);
                    $(".close").trigger('click');
                    $('#ChildrenNum').val('');
                    $('#NumOfDays').val('');
                    $('#AdultNum').val('');
                }
            }
        });
    });

    $('#calculatePrice').click(function() {
        var ChildrenNum = $('#ChildrenNum').val();
        var NumOfDays = $('#NumOfDays').val();
        var AdultNum =$('#AdultNum').val();
        var data = {
            hotelID: window.hotelID,
            ChildrenNum: ChildrenNum,
            NumOfDays: NumOfDays,
            AdultNum: AdultNum,
        };
        $.ajax({
            url: '<?=base_url('booking/calculatePrice')?>',
            type: 'GET',
            data: data,
            dataType: 'json',
            success: function(result) {
                if(result.success) {
                    var allPrice = parseInt(result.childPriceAll) + parseInt(result.adultPriceAll);
                    var allPriceChild = parseInt(result.childPriceAll);
                    var sllPriceAdult = parseInt(result.adultPriceAll);
                    var allDays = parseInt(NumOfDays);
                    allDays = (allDays === "" || isNaN(allDays)) ? 1 : allDays;
                    $("#allPriceSpanChild").html(allPriceChild);
                    $("#allPriceSpanAdult").html(sllPriceAdult);
                    $("#allPriceSpan").html(allPrice * allDays);
                }
            }
        });
    });
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
    $('.deleteBooking').click(function() {
        var bookingID =  $(this).attr('data-id');
        var data = {
            bookingID: bookingID
        };
        $.ajax({
            url: '<?=base_url('home/bookings/delete')?>',
            type: 'GET',
            data: data,
            dataType: 'json',
            success: function(result) {
                if(result.success) {
                    toastr.success(result.msg);
                    // ezt a fost csináld meg
                    $('#booking_'+bookingID).remove();
                }
                if(result.success === false) {
                    toastr.error(result.msg);
                }
            }
        });
    });
    $(function() {
        $('.pop').on('click', function() {
            $('.imagepreview').attr('src', $(this).find('img').attr('src'));
            $('#imagemodal').modal('show');
        });
    });
    $(function() {
        $('.popp').on('click', function() {
            $('.imagepreview').attr('src', $(this).attr('data-image'));
            $('#imagemodal').modal('show');
        });
    });

</script>


</body>
</html>