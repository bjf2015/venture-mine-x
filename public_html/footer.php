<?php
/**
 * @author JKetelaar
 */
?>

<div class="news-modal modal fade" id="slide-bottom-popup">
    <div class="modal-news-body">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <p id="newbidtext">Someone bid 200 shares, each for $20, on First Invention</p>
        <a href="" class="btn-primary btn-plain btn popup-button" id="newbidlink">View this auction</a>
    </div>
</div>

<section id="copyright" class="light_section bg_image">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center to_animate">

                <p>&copy; Venture Mine, made by <a href="http://jketelaar.nl">JKetelaar</a></p>
            </div>

        </div>
    </div>
</section>


</div>
<!-- eof #box_wrapper -->

<div class="preloader">
    <div class="preloader_image"></div>
</div>


<!-- libraries -->
<script src="js/vendor/jquery-1.11.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/jquery.appear.js"></script>

<!-- superfish menu  -->
<script src="js/vendor/jquery.hoverIntent.js"></script>
<script src="js/vendor/superfish.js"></script>

<!-- page scrolling -->
<script src="js/vendor/jquery.easing.1.3.js"></script>
<script src="js/vendor/jquery.ui.totop.js"></script>
<script src="js/vendor/jquery.localscroll-min.js"></script>
<script src="js/vendor/jquery.scrollTo-min.js"></script>
<script src='js/vendor/jquery.parallax-1.1.3.js'></script>

<!-- sliders, filters, carousels -->
<script src="js/vendor/jquery.isotope.min.js"></script>
<script src='js/vendor/owl.carousel.min.js'></script>
<script src='js/vendor/jquery.flexslider-min.js'></script>

<!-- custom scripts -->
<script src="js/vendor/jquery.cookie.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/vendor/jquery.canvasjs.min.js"></script>
<?php
if (isset($custom_scripts)){
    foreach ($custom_scripts as $script){
        echo('<script src="' . $script . '"></script>');
    }
}
?>
</body>

</html>