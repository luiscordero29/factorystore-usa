    <footer>
     <p> FACTORY STORE USA | Todos los Derechos Reservados
      Venezuela - Caracas. Telf.: +58(212) 443-0790 / 443-3723 / 443-1423 E-mail: info@fatory.com</p>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/offcanvas.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script  src="<?php echo get_template_directory_uri(); ?>/assets/carrousel/files/owl.carousel.min.js"></script>

    <script>
      var li_act = "0";
      var sub_act = "0";
      function toogle_nav(id) {
        var li  = "#li_"+id;
        var sub = "#sub_"+id;
        $("li").removeClass('active');
         if (li_act == "0") {
            $('#nav').addClass('nav-toggle');
            $(sub).addClass('toogle_sub_menu');
            $(li).addClass('active');
            li_act  = li;
            sub_act = sub;
         }else{
           $(sub_act).removeClass('toogle_sub_menu');
           $(li_act).removeClass('active');
           $(sub).addClass('toogle_sub_menu');
           $(li).addClass('active');
           li_act  = li;
           sub_act = sub;
         }
      } 

       var act = 0;
       var px  = $(window).width();
       function view_nav(){
          if (act == 0) {
            $('#btn_mobil').css('background', '#337ab7');
            if (px <= 500 && px >= 400) {
              $('header').css('margin-left', '0px');
              $('#content').css('padding-left', '150px');
            }else if (px <= 400){
               $('header').css('margin-left', '0px');
            }else{
              $('header').css('margin-left', '0px');
              $('#content').css('padding-left', '250px');
            }
            act = 1;
          }else{
            act = 0;
            $('#btn_mobil').css('background', '#ff5b0a');
            if (px <= 500 && px >= 400) {
              $('header').css('margin-left', '-150px');
              $('#content').css('padding-left', '0px');
            }else if (px <= 400){
               $('header').css('margin-left', '-150px');
            }else{
              $('header').css('margin-left', '-250px');
              $('#content').css('padding-left', '0px');
            }
          }
       }

      $(document).ready(function() {
        $("#slide").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items : 1,
            singleItem:true,
            stopOnHover : true
        });
      });
      //toogle_nav('contacto')
    </script>
    <?php wp_footer(); ?>
  </body>
</html>

