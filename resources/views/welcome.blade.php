@extends('layouts.layout')
@section('content')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
      <div class="container">
        <h2>OM SAI MOTAR DRIVING SCHOOL</h2>
        <p>
        N9 M 2, Tv Centre, CIDCO, Behind Pharshi Ground, Aurangabad.
        </p>
        <li class="menu-active"><a class="nav-link page-scroll " href="\"></a></li>
        <!-- <a href="#" class="btn-get-work scrollto">Order Now</a> -->
        <!-- <a class="btn-get-started scrollto" href="#">First Free Order</a> -->
      </div>
    </div>
  </section><!-- #intro -->


  

  <!--==========================
      Gallery Section
    ============================-->
  <section id="gallery">
    <div class="container-fluid">
      <div class="section-header">
        <h3 class="section-title">Gallery</h3>
        <span class="section-divider"></span>
        <p class="section-description text-uppercase">
          NT License | TR License | AUTO TR License | Renewal License
        </p>
      </div>

      <div class="row no-gutters">

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="{{ asset('web/img/g-1.jpg')}}" class="gallery-popup">
              <img src="{{ asset('web/img/g-1.jpg')}}" alt="1">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="{{ asset('web/img/g-4.jpeg')}}" class="gallery-popup">
              <img src="{{ asset('web/img/g-4.jpeg')}}" alt="2">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="{{ asset('web/img/g-4.jpeg')}}" class="gallery-popup">
              <img src="{{ asset('web/img/g-4.jpeg')}}" alt="3">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="{{ asset('web/img/g-4.jpeg')}}" class="gallery-popup">
              <img src="{{ asset('web/img/g-4.jpeg')}}" alt="4">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="{{ asset('web/img/g-4.jpeg')}}" class="gallery-popup">
              <img src="{{ asset('web/img/g-4.jpeg')}}" alt="5">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="{{ asset('web/img/g-4.jpeg')}}" class="gallery-popup">
              <img src="{{ asset('web/img/g-4.jpeg')}}" alt="6">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #gallery -->


  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">About Us</h3>
          <span class="section-divider section-divider-dark"></span>
          <!-- <p class="section-description">
            LETS GET DIGITIZED
          </p> -->
        </div>

        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="{{asset('web/img/om-2.jpg')}}" class="img-thumbnail" alt="">
          </div>

          <div class="col-lg-6 content wow fadeInRight">

            <p>
              Om Sai Motor Driving School in Aurangabad-maharashtra is one of the leading businesses in the Motor Training Schools.<br> Also known for Motorcycle Dealers-Honda, Car Dealers-Maruti Suzuki, Motorcycle Dealers-Hero, Motorcycle Dealers-TVS, Motorcycle Dealers-Royal Enfield, Motor Training Schools, Car Dealers-Hyundai, Car Dealers and much more.<br> Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Om Sai Motor Driving School, Aurangabad-maharashtra.
            </p>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Om Sai Motor Driving School in CIDCO, Aurangabad-maharashtra is a top player in the category Motor Training Schools in the Aurangabad-maharashtra. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Aurangabad-maharashtra. Over the course of its journey, this business has established a firm foothold in it’s industry.</li>
              <li><i class="ion-android-checkmark-circle"></i>  The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. </li>
              <li><i class="ion-android-checkmark-circle"></i> In Aurangabad-maharashtra, this establishment occupies a prominent location in CIDCO. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Tv Centre, Behind Pharshi Ground, which makes it easy for first-time visitors in locating this establishment.</li>
              <li><i class="ion-android-checkmark-circle"></i>It is known to provide top service in the following categories: Motorcycle Dealers-Honda, Car Dealers-Maruti Suzuki, Motorcycle Dealers-Hero, Motorcycle Dealers-TVS, Motorcycle Dealers-Royal Enfield, Motor Training Schools, Car Dealers-Hyundai, Car Dealers.</li>
              

            </ul>

            <!-- <p>
              We charge a flat rate of $10 for any left chest / hat / sleeve size design (Free edits). <br /> <br />
              Jacket back size we charge $20. (Free edits). <br /><br />
              Delivery is within 8 - 12 hrs max <br /><br />

              We also do Vector Artwork for $10. <br />
            </p> -->
            <p class="font-weight-bold">
              Working Days: Mon-Sat <br />
              Time : 6:00am - 08:00pm (IST)
            </p>
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Product Featuress Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">Why Choose Us?</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="{{ asset('web/img/product-features.png')}}" alt="" class="wow fadeInLeft">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box wow fadeInRight">
                <div class="icon"><i class="fab fa-slack"></i></div>
                <h4 class="title"><a href="#">Experience Trainer</a></h4>
                <p class="description">
                  Our Expertise includes All Types Of Digitizing, Cap Digitizing, 3D puff Digitizing, Applique
                  Digitizing, Sequin Digitizing, Cross Stitch, Photo Stitch, Lace Digitizing, Chenille Digitizing etc.
                </p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                <div class="icon"><i class="fas fa-stopwatch"></i></div>
                <h4 class="title"><a href="">Flexible Time</a></h4>
                <p class="description">
                  8 Hour Average Turnaround 24 Hours is the maximum time you need to wait for very complex logos.
                  Guaranteed 6 Hours Rush time also available.
                </p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                <div class="icon"><i class="fas fa-redo"></i></div>
                <h4 class="title"><a href="">Fees installment</a></h4>
                <p class="description">
                  Unlimited free revisions will be provided on priority basis if you are not happy with embroidered
                  results 30 Days Money back guarantee.
                </p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="fa fa-border-style"></i></div>
                <h4 class="title"><a href="">WE SERVE WITH 100% DRIVING GUARANTEE</a></h4>
                <p class="description">
                  A variety of all machine embroidery formats available e.g. dst, pes, pcs, jef, exp, xxx etc. & also
                  many native embroidery software formats e.g emb, ngs, pxf, pof, ofm etc.
                </p>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- #features -->

    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Our Services</h3>
          <span class="section-divider section-divider-dark"></span>
          <p class="section-description">
            WE ALWAYS DO MORE THAN IS REQUIRED
          </p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fab fa-pied-piper"></i></div>
              <h4 class="title"><a href="">NT License </a></h4>
              <p class="description">What does LMV-NT mean? Light Motor Vehicle - Non Transport (LMV-NT) is a licence category in India. LMV licence is used to drive light motor vehicles such as cars, jeeps, small vans for personal purposes, but not for commercial transportation.
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fab fa-slack"></i></div>
              <h4 class="title"><a href="">TR License </a></h4>
              <p class="description">LMV -TR stands for Light Motor Vehicle- Transport. This type of driving licence is issued for driving light transport vehicles (commercial), either passenger carrying or goods carrying being used for hire or reward and is valid for 3 years from the date of its issuance.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fab fa-pied-piper-hat"></i></div>
              <h4 class="title"><a href="">AUTO TR License </a></h4>
              <p class="description">LMV -TR stands for Light Motor Vehicle- Transport. This type of driving licence is issued for driving light transport vehicles (commercial), either passenger carrying or goods carrying being used for hire or reward and is valid for 3 years from the date of its issuance.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fas fa-bezier-curve"></i></div>
              <h4 class="title"><a href=""> Renewal License</a></h4>
              <p class="description">As per the new Motor Vehicles (Amendment) Act, 2019, an individual can apply for renewal of driving licence any time between one year before its expiry and up to one after its expiry. ... Earlier rule of one-month grace period after the expiry of licence has been scrapped.</p>
            </div>
          </div>
         <!--  <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fab fa-pied-piper-hat"></i></div>
              <h4 class="title"><a href="">COCONUT OIL </a></h4>
              <p class="description">Cap embroidery Personalization with customisation options available via the latest
                technology of cap embroidery digitizing.<a class="order_link" href="">Order Now</a></p>
            </div>
          </div> -->

          <!-- <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fas fa-bezier-curve"></i></div>
              <h4 class="title"><a href="">SAFFLOWER OIL</a></h4>
              <p class="description">Vector files are a type of graphic that uses mathematical algorithms, allowing the
                image to be scaled or modified without loss of image quality or resolution. <a class="order_link" href="">Order Now</a></p>
            </div>
          </div> -->

        </div>
      </div>
    </section><!-- #more-features -->

    <!-- facts Section Start -->
  ``  <!-- <div id="counter">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Our Recent Statistics</h3>
          <span class="section-divider"></span>
        </div>
        <div class="row count-to-sec">
          <div class="col-lg-3 col-md-6 col-xs-12 count-one">
            <span class="icon"><i class="fab fa-slack"></i></span>
            <h3 class="timer count-value" data-to="36591" data-speed="20000">36591</h3>
            <hr class="width25-divider">
            <small class="count-title">Digitized Embriodery</small>
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12 count-one">
            <span class="icon"><i class="fab fa-pied-piper"></i></span>
            <h3 class="timer count-value" data-to="6753" data-speed="20000">6753</h3>
            <hr class="width25-divider">
            <small class="count-title">Logo Design</small>
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12 count-one">
            <span class="icon"><i class="fas fa-bezier-curve"></i></span>
            <h3 class="timer count-value" data-to="42356" data-speed="20000">42356</h3>
            <hr class="width25-divider">
            <small class="count-title">Vector Conversion</small>
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12 count-one">
            <span class="icon"><i class="fas fa-users"></i></span>
            <h3 class="timer count-value" data-to="1700" data-speed="20000">1700</h3>
            <hr class="width25-divider">
            <small class="count-title">Our Members</small>
          </div>
        </div>
      </div>
    </div>`` -->
    <!-- facts Section End -->


    <!--==========================
      Order Process Section
    ============================-->

    

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>OM SAI MOTAR DRIVING SCHOOL</h3>
              <p>
                 Om Sai Motor Driving School in Aurangabad-maharashtra is one of the leading businesses in the Motor Training Schools. 
              </p>
              <div class="social-links">
                <div class="fb-like" data-href="https://www.facebook.com/digitizingcraft/" data-width="" data-layout="button_count"
                  data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>
                  N9 M 2, Tv Centre, CIDCO,<br/>
                  Behind Pharshi Ground,<br />
                  Aurangabad,<br/>Maharashtra,
                  India Pin- 431003
                </p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p><a href="mailto: omsaimotardriving@gmail.com">omsaimotardriving@gmail.com</a></p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+9763222820</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Thank you for enquiry our team get touch with you shortly.</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                 {{  csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile Number" data-rule="mobile"
                      data-msg="Please enter a valid Mobile Number" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                    data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                    placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button id="sendBtn" type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>
@endsection