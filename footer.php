
<!-- <footer class="row">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-6 columns">
              <p>© Copyright Karwak Inc. 2015.  Website Designed by <a href="http://bhingry.com">Bhingry</a></p>
            </div>
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer> -->
  <footer class="full-width"><img src="../pngs/Footer.png" alt=""></footer>    
       
    <script src="js/foundation/foundation.clearing.js"></script>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript" src="slick-1.5.0/slick/slick.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
      });
    </script>
    <?php if($page_name=='index-content'){ ?> <script type="text/javascript"><?php include 'js/cover-slider.js';?> </script><?php } ?>
  </body>
</html>
