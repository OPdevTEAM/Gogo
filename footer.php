    <?php wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.customSlider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            responsive: [
                {
                breakpoint: 1225,
                settings: {
                    slidesToShow: 2,
                    arrows:false
                }
            }, {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                    arrows:false

                }
            }]
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.customSliderNoArrows').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            responsive: [
                {
                breakpoint: 1225,
                settings: {
                    slidesToShow: 2,
                }
            }, {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                }
            }]
        });
    });
</script>
    </body>

    </html>