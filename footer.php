            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://unpkg.com/popper.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script>
$('.carousel').carousel({
  interval: 6000,
  pause: "false"
});
    </script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="./js/slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.clients-slider').slick({ 
          dots: false,
          infinite: true,
          speed: 500,
          slidesToShow: 4,
          slidesToScroll: 2,
          autoplay: true,
          responsive: [
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }]
        });
        var scroll = new SmoothScroll('a[href*="#"]', {
          speed: 1500
      });
    });

  </script>
      <script type="text/javascript">

(function() {
    var burger = document.querySelector('.ix_mobile_menu');
    var menu = document.querySelector('.ix_mobile_menu_wrap');
    var body = document.querySelector('body');
    var logo = document.querySelector('.ix_logo');
    burger.addEventListener('click', function() {
        burger.classList.toggle('ix_menu_btn_active');
        menu.classList.toggle('ix_menu_container_active');
        logo.classList.toggle('ix_hide_logo');
        body.classList.toggle('disable_scroll');
    });
})();
</script>
  </body>
</html>