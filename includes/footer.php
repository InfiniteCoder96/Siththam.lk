<div class="row justify-content-center footer">
    <div class="col-md-12 text-center py-5">
        <p style="color: aliceblue;">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://rcu.lk" target="_blank" style="color: gold;">Royal College 2002 Batch</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
    </div>
</div>

<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sidebar = document.getElementById("mySidebar");
    var sidebarnav = document.getElementById("mySidebarnav");

    var stickyheader = header.offsetTop;
    var stickySidebar = sidebar.offsetTop;
    var stickySidebarnav = sidebarnav.offsetTop;

    function myFunction() {
        if (window.pageYOffset > stickyheader) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }

        if (window.pageYOffset > stickySidebar) {
            sidebar.classList.add("stickyside");
        } else {
            sidebar.classList.remove("stickyside");
        }

        if (window.pageYOffset > stickySidebarnav) {
            sidebarnav.classList.add("stickysidenav");
        } else {
            sidebarnav.classList.remove("stickysidenav");
        }

    }


</script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/jquery.fancybox.min.js"></script>

<script src="js/main.js"></script>
