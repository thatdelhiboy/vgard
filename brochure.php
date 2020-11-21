<?php include "./include/header.php";?>


    <div class="navex bse" style=float:left;font-size:75%>
    </div>

    <div class="popdemo col-md-10" style=display:none>
      <div class=row>
        <a href="#" class=demolink>
          <div class="col-md-2 pdt_drop_holder">
            <div class=pdtdrop>
              <img width="125px" height="100px" src="/uploads/category/voltage_stabiliser_logo_2.png" alt="Livpower Voltage
                Stabilizers" title="Livpower Voltage Stabilizers">
              <p class=align-center>Voltage Stabilizers</p>
            </div>
          </div>
        </a>
        <a href="#" class=demolink>
          <div class="col-md-2 pdt_drop_holder">
            <div class=pdtdrop>
              <img width="125px" height="100px" src="/uploads/category/ups_logo_1.png" alt="Livpower Inverter, DUPS, Solar
                Power Systems & Inverter Batteries" title="Livpower Inverter, DUPS, Solar Power Systems & Inverter
                Batteries">
              <p class=align-center>Room Heater</p>
            </div>
          </div>
        </a>
        <a href="#" class=demolink>
          <div class="col-md-2 pdt_drop_holder">
            <div class=pdtdrop>
              <img width="125px" height="100px" src=/uploads/category/water_heater_pdt_logo_3.png alt="Livpower Electric,
                Solar & Heat Pump Water Heaters" title="Livpower Electric, Solar & Heat Pump Water Heaters">
              <p class=align-center>Washing Machine</p>
            </div>
          </div>
        </a>
        <a href="#" class=demolink>
          <div class="col-md-2 pdt_drop_holder">
            <div class=pdtdrop>
              <img width="125px" height="100px" src=/uploads/category/fan_pdt_logo_1.png alt="Livpower Fans title=Livpower
                Fans">
              <p class=align-center>Water Geyser</p>
            </div>
          </div>
        </a>
        
      </div>
    </div>


    <style>
      .slider-content-container {
        position: absolute;
        top: 5%;
        width: 100%;
        text-align: center;
      }

      slider .item h1 {
        color: #111;
        border-bottom: none;
        font-size: 2.5em;
        text-transform: uppercase;
        font-family: SoletoBold;
        line-height: 1em
      }

      slider .item h2 {
        color: #111;
        text-align: center;
        font-size: 1.25em;
        margin-top: 10px;
      }

      h2:before,
      h2:after {
        background-color: #000;
        content: "";
        display: inline-block;
        height: 4px;
        position: relative;
        vertical-align: middle;
        width: 30px;
      }

      h2:before {
        right: 0.5em;
        margin-left: -50%;
      }

      h2:after {
        left: 0.5em;
        margin-right: -50%;
      }

      @media (max-width: 480px) {
        slider .item h1 {
          font-size: 1.5em;
        }

        slider .item h2 {
          font-size: .7em;
        }
      }
    </style>

    <!-- owl          -->
    <link rel="stylesheet" href="./ui/client/css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="./ui/client/css/owl/owl.theme.default.min.css">
    <input type="hidden" id="refreshed" value="no">

    <slider>

      <div class="owl-carousel owl-theme">
        <a href="#"><!-- Interter  -->
          <div class="item">
            <picture>
              <source class="owl-lazy" media="(max-width: 480px)"
                data-srcset="/ui/client/images/compressed/livepure-inverter-mob.jpg" />
              
              <img class="owl-lazy" data-src="/ui/client/images/compressed/livepure-inverter.jpg"
                alt="Vguard Products" />
            </picture>
            <div class="slider-content-container">
            </div>
          </div>
        </a>
        <a href="#"><!-- water geser  -->
          <div class="item">
            <picture>
              <source class="owl-lazy" media="(max-width: 480px)"
                data-srcset="/ui/client/images/compressed/watergeaser_banner-mob.jpg" />
              <img class="owl-lazy" data-src="/ui/client/images/compressed/watergeaser_banner.jpg"
                alt="Vguard Inverters" />
            </picture>
            <div class="slider-content-container">
            </div>
          </div>
        </a>
        
        <a href="#"><!-- Room heater  -->
          <div class="item">
            <picture>
              <source class="owl-lazy" media="(max-width: 480px)"
                data-srcset="/ui/client/images/compressed/watergeaser_banner-mob.jpg" />
              <img class="owl-lazy" data-src="/ui/client/images/compressed/livepure-roomheater.jpg"
                alt="Vguard Inverters" />
            </picture>
            <div class="slider-content-container">
            </div>
          </div>
        </a>
        <a href="#"><!-- WASHING MACHINE  -->
          <div class="item">
            <picture>
              <source class="owl-lazy" media="(max-width: 480px)"
                data-srcset="/ui/client/images/compressed/livepure-inverter-mob.jpg" />
              <img class="owl-lazy" data-src="/ui/client/images/compressed/livepure-washingmachine.jpg"
                alt="Vguard Inverters" />
            </picture>
            <div class="slider-content-container">
            </div>
          </div>
        </a>
      </div>

    </slider>

    <!-- Banner ends -->

    <!-- Products -->
    <div class="product-section-home">
      <div class="category_list">

        <div class="category_block" onmouseover="OnMouseIn (1)" id="categoryBlock1">

          <div class="category_item">
            <a href="#">
              <img src="/ui/client/images/v2/home-icon-voltage-stabalizer.png" alt="Voltage Stabilizers" />
              <h4 class="category_item_text" id="category1">Voltage Stabilizers</h4>
          </div>
          </a>
        </div>


        <div class="category_block" onmouseover="OnMouseIn (2)" id="categoryBlock2">
          <div class="category_item">

            <a href="#">
              <img src="/ui/client/images/v2/home-icon-room-heater.png"
                alt="Inverters, DUPS, Solar Power System & Batteries" />

              <h4 class="category_item_text" id="category2">Room Heater</h4>


            </a>

          </div>
        </div>

        <div class="category_block" onmouseover="OnMouseIn (3)" id="categoryBlock3">
          <div class="category_item">

            <a href="#"><img src="/ui/client/images/v2/home-Icon-washing-machine.png"
                alt="Electric & Solar Water Heaters" />

              <h4 class="category_item_text" id="category3">Washing Machine</h4>

            </a>

          </div>
        </div>
        <div class="category_block" onmouseover="OnMouseIn (4)" id="categoryBlock4">
          <div class="category_item">

            <a href="#"><img src="/ui/client/images/v2/home-icon-water-geaser.png" alt="Fans" />

              <h4 class="category_item_text" id="category4">Water Geaser</h4>
            </a>

          </div>
        </div>
      </div>


    </div>





    <?php include "./include/footer.php";?>