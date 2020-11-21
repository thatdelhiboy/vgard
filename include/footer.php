


    <div class="bg-ebony-clay context-dark">
      <section class="section-40 section-sm-75">
        <div class="shell">
          <div class="range range-xs-center">
            <div class="cell-xs-9 cell-sm-11 cell-lg-12">
              <div class="range">
                <div class="cell-sm-6 cell-md-10 cell-lg-6">
                  <div style="max-width: 510px;" class="inset-lg-right-20">
                    <a href="/" class="brand brand-inverse">
                      <img src="/ui/client/images/rehan-logo.jpg" alt="Livpower" width="145" height="30" />
                    </a>
                    <p class="offset-top-22 text-shuttle-gray">Livpower offers a range of products from Voltage
                      Stabilizer to Digital UPS, Inverter and Inverter Batteries, Electric Water Heaters, Solar Water
                      Heaters, Domestic Pumps, Agricultural Pumps, Industrial Motors, Domestic Switch Gears,
                      Distribution Boards, Wiring Cables, Industrial Cables, Induction Cooktops, Mixer Grinders, Fans,
                      Rice Cooker, Gas Stoves, Solar Power Systems & Air Coolers.</p>
                    <a href="#" class="link link-group link-group-animated link-bold link-white">
                      <span>Contact Us</span>
                      <span class="icon icon-xxs icon-primary fa fa-angle-right"></span>
                    </a>
                  </div>
                </div>

                <div class="cell-sm-6 cell-md-4 cell-lg-3 offset-top-50 offset-lg-top-0">
                  <h6 class="text-uppercase">Products</h6>
                  <div style="max-width: 270px;" class="row offset-top-22 offset-md-top-30">
                    <div class="col-xs-12">
                      <ul class="list-marked-variant-2">
                        <li>
                          <a href="#">Voltage Stabilizers</a>
                        </li>
                        <li>
                          <a href="#">
                            Room Heater
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Washing Machine </a>
                        </li>
                        <li> <a href="#">Water Geaser</a></li>
                        
                        <li><a href="#" target="_blank">Product Brochures</a></li>
                      </ul>
                    </div>

                  </div>
                </div>
                <div class="cell-sm-6 cell-md-4 cell-lg-3 offset-top-50 offset-lg-top-0">
                  <h6 class="text-uppercase">Company</h6>
                  <div style="max-width: 270px;" class="row offset-top-22 offset-md-top-30">
                    <div class="col-xs-12">
                      <ul class="list-marked-variant-2">

                        <li><a href="#">ABOUT Livpower</a></li>

                        <li><a href="#" target="_blank">BRAND PHILOSOPHY</a></li>
                        <li>
                          <a href="#">FAQs</a>
                        </li>
                        <li><a href="#">FIND A DEALER</a></li>
                        <li><a href="#">CUSTOMER CARE</a></li>
                      </ul>
                    </div>

                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="shell">
        <hr>
      </div>
      <footer class="page-foot section section-35 bg-ebony-clay context-dark">
        <div class="shell text-center">
          <div class="range range-sm-reverse range-sm-justify range-sm-middle">
            <div class="cell-sm-3 text-sm-right">
              <div class="group-sm group-middle">
                <p class="text-italic text-white">Follow Us:</p>
                <ul class="list-inline list-inline-reset">
                  <li>
                    <a href="https://www.facebook.com/"
                      class="icon icon-round icon-pciked-bluewood icon-xxs-smallest fa fa-facebook" target="_blank"></a>
                  </li>
                  <li>
                    <a href="https://twitter.com/"
                      class="icon icon-round icon-pciked-bluewood icon-xxs-smallest fa fa-twitter" target="_blank"></a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/"
                      class="icon icon-round icon-pciked-bluewood icon-xxs-smallest fa fa-youtube" target="_blank"></a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/"
                      class="icon icon-round icon-pciked-bluewood icon-xxs-smallest fa fa-linkedin" target="_blank"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cell-sm-9 offset-top-15 offset-sm-top-0 text-sm-left">
              <p class="rights text-white">
                <span id="copyright-year"></span><span>&nbsp;&#169;&nbsp;</span><span>Livpower INDUSTRIES LTD.&nbsp;ALL
                  RIGHTS RESERVED.</span>
                <a href="#" class="link-white-v2">PRIVACY</a>
                &nbsp;<a href="#" class="link-white-v2">TERMS OF USE</a>
                &nbsp; <a href="#" class="link-white-v2">DISCLAIMER</a>

              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>





    <!-- JS library -->

    <!-- End Facebook Pixel Code -->
    <script src="/ui/client/scripts/core.min.js">
    </script>
    <script src="/ui/client/scripts/script-new.js">
    </script>
    <script>
      var a = $(document).height();
      //alert(a);
      $(".container").height(a);
    </script>
    <script>
      $(function () {
        var SITE_URL = "https://rehaaninternational.com/";
        // for web search page

        $('#search_header').click(function () {



          var keyword = $('#search').val();

          if (keyword === '') {

            window.location.href = SITE_URL + "search-results";

          } else {

            //           var keyword_search = btoa(keyword);

            var keyword_search = encodeURI(keyword);

            window.location.href = SITE_URL + "search-results/" + keyword_search;

          }

        });



        $("#search").on("keydown", function (event) {

          if (event.which == 13) {


            $('#search_header').trigger('click');

          }

        });



        // for mobile search page

        $('#search_header1').click(function () {



          var keyword = $('#search1').val();

          if (keyword === '') {

            window.location.href = SITE_URL + "search-results";

          } else {

            //           var keyword_search = btoa(keyword);

            var keyword_search = encodeURI(keyword);

            window.location.href = SITE_URL + "search-results/" + keyword_search;

          }

        });



        $("#search1").on("keydown", function (event) {

          if (event.which == 13) {

            $('#search_header1').trigger('click');

          }

        });

      });
    </script>
    <script>
      function OnMouseIn(elem) {
        var categoryBlock = "#categoryBlock" + elem;
        var categoryItem = "#category" + elem;

        $(categoryItem).addClass("white")

        $(categoryBlock).mouseout(function () {
          $(categoryItem).removeClass("white")
        })

      }

      $("#legacyBox").mouseover(function () {
        $('.image-container').attr('src', $(".image-container").data("hover"));
      }).mouseout(function () {
        $('.image-container').attr('src', $(".image-container").data("src"));
      });

      $("#milestoneBox").mouseover(function () {
        $('.image-container1').attr('src', $(".image-container1").data("hover"));
      }).mouseout(function () {
        $('.image-container1').attr('src', $(".image-container1").data("src"));
      });
    </script>
    <script>
      $("#close_button").click(function () {
        $(".homepage_message").hide();
      });
      $("#RegCom").click(function () {
        $("#homepage_message").show().delay(25000).fadeOut();
      });
      $("#ProEnq").click(function () {
        $("#homepage_message").show().delay(25000).fadeOut();
      });
      $("#RegPro").click(function () {
        $("#homepage_message").show().delay(25000).fadeOut();
      });
      $("#InsReq").click(function () {
        $("#homepage_message").show().delay(25000).fadeOut();
      });
      $("#proAut").click(function () {
        $("#homepage_message").show().delay(25000).fadeOut();
      });
      $("#CusCar").click(function () {
        $("#homepage_message").show().delay(25000).fadeOut();
      });
    </script>

    <link rel="stylesheet" href="/ui/client/css/custom.css">
    <script src="/ui/client/scripts/owl/owl.carousel.min.js"></script>
    
    <script>
      jQuery(document).ready(function ($) {
        $('.owl-carousel').owlCarousel({
          items: 1,
          lazyLoad: true,
          nav: true,
          autoplay: true,

          autoplayHoverPause: true,
          lazyLoadEager: 1,
          loop: true,
          margin: 10,
          autoHeight: true,
          smartSpeed: 2000,
          pagination: false,

          dots: false,
          navText: ["<span class='fa-3x fa-arrow-circle-o-left'></span>",
            "<span class='fa-3x fa-arrow-circle-o-right'></span>"
          ]
        });

      });
    </script>

    

</body>

</html>