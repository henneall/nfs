    
    <!-- Footer Start-->
    <!-- <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2018 Colorlib All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Footer End-->
    <!-- Chat Box End-->
    <!-- jquery
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <!-- modal JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/modal-active.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow/wow.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.symbol.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/flot/dashtwo-flot-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table-export.js"></script>
    <!-- select2 JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/select2/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/select2/select2-active.js"></script>
    
    <!-- icheck JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/icheck/icheck-active.js"></script>

    <!-- main JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).on("click", "#upUser", function () {
            var user_id = $(this).attr("data-id");
            var fullname = $(this).attr("data-name");
            var username = $(this).attr("data-username");
            var usertype = $(this).attr("data-usertype");
            $("#user_id").val(user_id);
            $("#fullname").val(fullname);
            $("#username").val(username);
            $("#usertype").val(usertype);
        });

        $(document).on("click", "#upBank", function () {
            var bank_id = $(this).attr("data-id");
            var bank_name = $(this).attr("data-name");
            var location = $(this).attr("data-location");
            $("#bank_id").val(bank_id);
            $("#bank").val(bank_name);
            $("#location").val(location);
        });

        $(document).on("click", "#upInsurer", function () {
            var insurer_id = $(this).attr("data-id");
            var insurer_name = $(this).attr("data-name");
            $("#insurer_id").val(insurer_id);
            $("#insurer").val(insurer_name);
        });

        function readPic1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#pic1').attr('src', e.target.result);
                    $('.pictures1').attr('src', e.target.result);
                };
                var size1 = input.files[0].size;
                if(size1 >= 6000000){
                    $("#img1-check").show();
                    $("#img1-check").html("Warning: Image too big. Upload images less than 5mb.");
                    $('input[type="button"]').attr('disabled','disabled');
                    $("#img2").attr('disabled','disabled');
                    $("#img3").attr('disabled','disabled');
                } else {
                    $("#img1-check").hide();
                    $('input[type="button"]').removeAttr('disabled');
                    $("#img2").removeAttr('disabled');
                    $("#img3").removeAttr('disabled');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readPic2(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#pic2').attr('src', e.target.result);
                $('.pictures2').attr('src', e.target.result);
            };
            var size2 = input.files[0].size;
            if(size2 >= 6000000){
                $("#img2-check").show();
                $("#img2-check").html("Warning: Image too big. Upload images less than 5mb.");
                $('input[type="button"]').attr('disabled','disabled');
                $("#img3").attr('disabled','disabled');
            } else {
                $("#img2-check").hide();
                $('input[type="button"]').removeAttr('disabled');
                $("#img3").removeAttr('disabled');
            }

            reader.readAsDataURL(input.files[0]);
            }
        }

        function readPic3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#pic3').attr('src', e.target.result);
                    $('.pictures3').attr('src', e.target.result);
                };
                var size3 = input.files[0].size;
                if(size3 >= 6000000){
                    $("#img3-check").show();
                    $("#img3-check").html("Warning: Image too big. Upload images less than 5mb.");
                    $('input[type="button"]').attr('disabled','disabled');
                } else {
                    $("#img3-check").hide();
                    $('input[type="button"]').removeAttr('disabled');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        setInterval(function(){
            var currentTime = new Date();
            var currentHours = currentTime.getHours();
            var currentMinutes = currentTime.getMinutes();
            var currentSeconds = currentTime.getSeconds();
            currentMinutes = (currentMinutes < 10 ? "0" : '') + currentMinutes;
            currentSeconds = (currentSeconds < 10 ? "0" : '') + currentSeconds;

            var timeOfDay = (currentHours < 12) ? "AM" : "PM";
            currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
            currentHours = (currentHours == 0) ? 12 : currentHours;
            var currentTimeString = currentHours+":"+currentMinutes+":"+currentSeconds+" "+timeOfDay;
            document.getElementById('timer').innerHTML = currentTimeString;

        },1000);
    </script>
</body>

</html>