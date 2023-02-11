  <?php 
if(isset($_POST["send-message"])){
   $name =  $_POST["name"];
   $email = $_POST["email"]; 
   $subject = $_POST["subject"];
   $message =  $_POST["message"];
    
    $from = "sk@inspl.in";
    $to ="sk@inspl.in";
    $subject = "Message from inspl";
    $msg = "<html><head><style>table,tr{padding:10px;}tr,td{padding:10px;border:1 px solid white;}</style></head><body>";
    $msg .= "<table><tr><td><b>Name&nbsp;</b></td><td> $name</td></tr>";
    $msg .= "<tr><td><b>Email&nbsp;</b></td><td> $email</td></tr>";
    $msg .= "<tr><td><b>Subject</b>&nbsp;</td><td>  $subject</td></tr>";
    $msg .= "<tr><td><b>Message</b>&nbsp; </td><td> $message</td></tr>";
    $msg .= "</body></html>";
    $headers = "Content-type:text/html;charset=UTF-8 \r\n";
       $headers .= "From:INTECH INSURANCE<$from> \r\n";
       $headers .= "Bcc: $to2 \r\n";
     if(mail("sk@inspl.in","this is subject","erthyg")){
        echo "<script> alert('Mail Sent INTECH Successfully');</script>";
    }else{
        echo "";
        echo "<script>alert('Cant send Message ');</script>";
    }
}
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>INTECH</title>
      <meta name="description" content="">
      <!-- CSS FILES -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/flexslider.css" />
      <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
      <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
      <link rel="stylesheet" href="css/animate.css" />
      <link rel="icon" type="image/ico" href="images/intech_icon.ico"/>
  </head>

  <body class="home">
      <header id="header">
          <!-- Top Header -->
          <div id="header-top">
              <div class="container">
                  <div class="row">
                      <div class="hidden-xs col-lg-7 col-sm-5 top-info">
                       <span><i class="fa fa-phone"></i>Helpdesk Number: <a style="color: #fff;" href="tel: +91 8247613951">+91 8247613951</a> , <a style="color: #fff;" href="tel:  +91 040 40188844"> +91 040 40188844</a></span>
                          
                      </div>
                      <div class="col-lg-5">
                          <ul class="dropdown-items clearfix">
                              <li>
                                  <div class="shope-cart">
                                  <div class="dropdown">
                                        <div class="cart-dropdown">
                                        <span class="hidden-sm"><i class="fa fa-envelope"></i>Email: <a style="color: #fff;" href="mailto:helpdesk@inspl.in">helpdesk@inspl.in</a></span> &nbsp;&nbsp;
                                            <a style="color: #fff;" href="https://twitter.com/intech_cms" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a style="color: #fff;" href="https://www.linkedin.com/in/intech-insurance-surveyors-83709521b" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>

              </div>
          </div>
          <!--End Top Header -->

          <!-- Main Menu -->
          <div id="menu-bar" style="padding: 15px;">
              <div class="container">
                  <div class="row">
                      <div class="col-md-3 col-sm-3">
                          <div id="logo">
                              <h1><a href="index.html"><img src="images/images/logo.png" /></a></h1>
                          </div>
                      </div>
                      <!-- Navigation -->
                      <div class="col-lg-9 col-sm-9 navbar navbar-default navbar-static-top container"
                          role="navigation">
                          <!--  <div class="container">-->
                          <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse"
                                  data-target=".navbar-collapse">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>
                          </div>
                          <div class="navbar-collapse collapse">
                              <ul class="nav navbar-nav">
                                  <li><a href="index.html">Home</a></li>
                                  <li><a href="#">About Us</a>
                                  <ul class="dropdown-menu">
                                        <li><a class="smooth-goto" href="who-we-are.html#about">Who We Are</a></li>
                                        <li><a class="smooth-goto" href="who-we-are.html#corporatejourny">Corporate Journey</a></li>
                                        <li><a class="smooth-goto" href="who-we-are.html#ourexpert">Fame of Intech</a></li>
                                        <li><a class="smooth-goto" href="who-we-are.html#ourteam">Team</a></li>
                                        <li><a class="smooth-goto" href="who-we-are.html#ourclient">Our Client</a></li>
                                        <li><a class="smooth-goto" href="who-we-are.html#missionvission">Mission & Vision</a></li>
                                    </ul>
                                  </li>

                                  <li><a href="#">Our Services</a>
                                      <ul class="dropdown-menu">
                                          <li>
                                              <a href="">Surveyoors And Loss Assessors</a>
                                              <ul class="dropdown-menu">
                                                  <li><a href="fire.html">Fire</a></li>
                                                  <li><a href="engineering.html">Engineering</a></li>
                                                  <li><a href="business-interruption.html">Business Interruption</a>
                                                  </li>
                                                  <li><a href="marine.html">Marine</a></li>
                                                  <li><a href="miscellaneous.html">Miscellaneous</a></li>
                                                  <li><a href="motor.html">Motor</a></li>
                                                  <li><a href="cat-losses.html">CAT Losses</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="risk-inspections.html">Risk Inspections</a></li>
                                          <li><a href="property-valuations.html">IBBI Registered Property Valuers</a>
                                          </li>
                                          <li><a href="pre-dishpaches.html">Pre-Dispatch Inspections</a></li>
                                          <li><a href="charted-engineering.html">Charted Engineering Certifications</a>
                                          </li>
                                      </ul>
                                  </li>

                                  <!-- <li><a href="our-clients.html">Our Clients</a> </li> -->
                                  <li><a href="#">Culture And Career</a>
                                      <ul class="dropdown-menu">
                                          <li><a href="life@intech.html">Life @ Intech</a></li>
                                          <li><a href="career.html">Career</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="blogs.html">Blogs</a> </li>
                                  <li><a href="contact.php">Reach Us</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--End Main Menu -->
      </header>

      <section class="page_head">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                      <nav id="breadcrumbs">
                          <ul>
                              <li><a href="index.html">Home</a></li>
                              <li>contacts</li>
                          </ul>
                      </nav>
                      <div class="page_title">
                          <h2>contact Us</h2>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--End Header-->

      <!--start wrapper-->
      <section class="wrapper">
          <section class="content contact">
              <div class="container">
                  <div class="row sub_content">
                      <div class="dividerHeading">
                          <h4><span>Get in Touch</span></h4>
                          <p style="text-align:center;">Welcome to INTECH Insurance Surveyors Private Limited. How May I Assist You..?</p> <br>
                      </div>
                     <div class="row card" style="padding:20px;">
                     <div class="col-lg-7 col-md-7 col-sm-7" style="border: 1px solid #182554; padding: 27px;">
                          <form id="contacts" action="contact.php" method="post">
                              <div class="row">
                                  <div class="form-group">
                                      <div class="col-lg-6 ">
                                          <input type="text" id="names" name="name" class="form-control" maxlength="100"
                                              data-msg-required="Please enter your name." value=""
                                              placeholder="Your Name">
                                      </div>
                                      <div class="col-lg-6 ">
                                          <input type="email" id="emails" name="email" class="form-control"
                                              maxlength="100" data-msg-email="Please enter a valid email address."
                                              data-msg-required="Please enter your email address." value=""
                                              placeholder="Your E-mail">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <input type="text" id="subjects" name="subject" class="form-control"
                                              maxlength="100" data-msg-required="Please enter the subject." value=""
                                              placeholder="Subject">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <textarea id="messages" class="form-control" name="message" rows="10"
                                              cols="50" data-msg-required="Please enter your message." maxlength="5000"
                                              placeholder="Message"></textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <input  style="margin-top: 35px; margin-left: 40%;"  type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg"
                                          value="Send Message" name="send-message">
                                  </div>
                              </div>
                          </form>
                      </div>

                      <div class="col-lg-5 d-flex align-items-stretch">
                          <div class="info">
                              <div class="address">
                                  <i class="fa fa-location-arrow"></i>
                                  <h4>Corp. Office </h4>
                                  <p>Intech Insurance Surveyors And Loss Assessors Pvt. Ltd. <br>
                                      Suite No.4D, Vamsiram's Jyothi Square, Road No.3, Banjara Hills,
                                      <strong>Hyderabad</strong> Telangana</p>
                              </div>
                              <p><strong><span style="color: #00325e; font-size: 16px;">Email : </span></strong>
                                  <a href="mailto:sk@inspl.in">sk@inspl.in</a> / <a
                                      href="mailto:claims@inspl.in">claims@inspl.in</a> /
                                  <a href="mailto:madhu@inspl.in">madhu@inspl.in</a>
                              </p>
                              <p><strong><span style="color: #00325e; font-size: 16px;">Call : </span></strong><a
                                      href="tel: +91 40 48526006">040 40188844</a></p>
                              <hr>
                              <br>

                              <div class="address">
                                  <i class="fa fa-location-arrow"></i>
                                  <h4>Regd. Office</h4>
                                  <p>Intech Insurance Surveyors And Loss Assessors Pvt. Ltd. <br>
                                      16-11-20, Flat no. G-3, Bharani Apartments, Saleemnagar, Malakpet ,
                                      <strong>Hyderabad</strong> 500036.</p>
                              </div>
                              <p><strong><span style="color: #00325e; font-size: 16px;">Email : </span></strong>
                                  <a href="mailto:sk@inspl.in">sk@inspl.in</a> / <a
                                      href="mailto:claims@inspl.in">claims@inspl.in</a> /
                                  <a href="mailto:madhu@inspl.in">madhu@inspl.in</a>
                              </p>
                              <p><strong><span style="color: #00325e; font-size: 16px;">Call : </span></strong><a
                                      href="tel: +91 40 - 24544815">+91 40 - 24544815</a></p>


                          </div>
                      </div>
                     </div>

                  </div>
              </div>
          </section>
          <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
              <div class="location-container">
                <!-- <div class="location-left-block">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1xYkx7aurp9O9As7bGw0PUXFP75R080Q&ehbc=2E312F" width="100%" height="725" style="border:1px solid
                    #666b7e; border-radius: 10px;"  allowfullscreen="" loading="lazy"></iframe>
    
                  </div>  -->
                <div class="location-right-block">
                   <ul>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Hyderabad</h4></div>
                        <p>Suit No 4D, Vamsiram’s Jyothi Square, Road No 3, Banjara Hills<br>Hyderabad – 500034 Telangana, India</p>
                        <div class="_flex"><span><i class="fa fa-phone gray-icon gray-icon" aria-hidden="true"></i></span><p><strong>Phone:</strong><a href="+91 8500147993">+91 8500147993</a></p></div>
                        <div class="_flex"><span><i class="fa fa-user gray-icon" aria-hidden="true"></i></span><p><strong> Name: </strong>Mrs. Shirisha</p></div>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span><p><strong> Email: </strong><a href="mailto:claims@inspl.in">claims@inspl.in</a></p></div>
                    </li>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Visakhapatnam</h4></div>
                        <p>Flat No: 3F, 4th Floor, Rednam Alcazar, Opp. SBI Main Branch, Vodafone Building, Ramnagar, Old jail Road<br>Visakhapatnam,  – 530002 ANDHRA PRADESH, India</p>
                        <div class="_flex"><span><i class="fa fa-phone gray-icon" aria-hidden="true"></i></span><p><strong>Phone:</strong><a href="+91 9000789448">+91 9000789448</a></p></div>
                        <div class="_flex"><span><i class="fa fa-user gray-icon" aria-hidden="true"></i></span><p><strong> Name: </strong>Mrs. Jagadeesh  </p></div>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span></strong><p><strong> Email: </strong><a href="mailto:intech_vizag@inspl.in">intech_vizag@inspl.in</a></p></div>
                    </li>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Chennai</h4></div>
                        <p>No.17/1, First street, Santham Colony, Anna Nagar west Extension<br>Chennai,  – 600101 TAMILNADU, India</p>
                        <div class="_flex"><span><i class="fa fa-phone gray-icon" aria-hidden="true"></i></span><p><strong>Phone:</strong><a href="+91 9176258798">+91 9176258798</a></p></div>
                        <div class="_flex"><span><i class="fa fa-user gray-icon" aria-hidden="true"></i></span><p><strong> Name: </strong>Mrs. Vallikkannu </p></div>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span></strong><p><strong> Email: </strong><a href="mailto:chennai_claims@inspl.in">chennai_claims@inspl.in</a></p></div>
                    </li>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Indore</h4></div>
                        <p>510, 5th Floor, Onam Plaza, AB Road, Near Industry House<br>Indore – 452001 Madhya Pradesh, India</p>
                        <div class="_flex"><span><i class="fa fa-phone gray-icon" aria-hidden="true"></i></span><p><strong>Phone:</strong><a href="+91 8806604232">+91 8806604232</a></p></div>
                        <div class="_flex"><span><i class="fa fa-user gray-icon" aria-hidden="true"></i></span><p><strong> Name: </strong>Mrs. Satish Mishra</p></div>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span></strong><p><strong> Email: </strong><a href="intech_indoreclaims@inspl.in">intech_indoreclaims@inspl.in</a></p></div>
                    </li>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Bangalore</h4></div>
                        <p>14-39-108, 2nd Floor, 19th Main, 1st Block, Rajajinagar<br>Bangalore – 560010 KARNATAKA, India</p>
                        <div class="_flex"><span><i class="fa fa-phone gray-icon" aria-hidden="true"></i></span><p><strong>Phone:</strong><a href="+91 9742900777">+91 9742900777</a></p></div>
                        <div class="_flex"><span><i class="fa fa-user gray-icon" aria-hidden="true"></i></span><p><strong> Name: </strong>Mrs. Balasubramanyam</p></div>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span></strong><p><strong> Email: </strong><a href="mailto:intech_bangalore@inspl.in">intech_bangalore@inspl.in</a></p></div>
                    </li>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Delhi</h4></div>
                        <p>RZ-9A, Shankar Park, West Sagarpur<br>Delhi – 110046 Delhi, India</p>
                        <div class="_flex"><span><i class="fa fa-phone gray-icon" aria-hidden="true"></i></span><p><strong>Phone:</strong><a href="+91 8750740427">+91 8750740427</a></p></div>
                        <div class="_flex"><span><i class="fa fa-user gray-icon" aria-hidden="true"></i></span><p><strong> Name: </strong>CA Gaurav Bansal</p></div>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span></strong><p><strong> Email: </strong><a href="mailto:intech_delhi@inspl.in">intech_delhi@inspl.in</a></p></div>
                    </li>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Bhubaneshwar</h4></div>
                        <p>Janpath Tower, B-202, 2nd Floor, Ashok Nagar, Unit- II<br>Bhubaneswar, Khurda – 751009 ORISSA, India</p>
                        <div class="_flex"><span><i class="fa fa-phone gray-icon" aria-hidden="true"></i></span><p><strong>Phone:</strong><a href="+91 9658936260">+91 9658936260</a></p></div>
                        <div class="_flex"><span><i class="fa fa-user gray-icon" aria-hidden="true"></i></span><p><strong> Name: </strong>Mrs. Subhendu Kumar Sabat</p></div>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span></strong><p><strong> Email: </strong><a href="mailto:intech_bhubaneshwar@inspl.in">intech_bhubaneshwar@inspl.in</a></p></div>
                    </li>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Kolkata</h4></div>
                        <p>Siddha Weston, 4th floor, Room No- 419, 9 Weston Street<br>Kolkata – 700013 WEST BENGAL, India</p>
                        <div class="_flex"><span><i class="fa fa-phone gray-icon" aria-hidden="true"></i></span><p><strong>Phone:</strong><a href="+91 8017079675">+91 8017079675</a></p></div>
                        <div class="_flex"><span><i class="fa fa-user gray-icon" aria-hidden="true"></i></span><p><strong> Name: </strong>Mrs. Om Prakash Jena</p></div>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span></strong><p><strong> Email: </strong><a href="mailto:intech_kolkata@inspl.in">intech_kolkata@inspl.in</a></p></div>
                    </li>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Patna</h4></div>
                        <p>Flat No. 4, 2nd Floor, Surabhi Bihar Apartment, Behind Navatara Sweet, Near Mithapur Bus Stand, Kankarbagh<br>Patna – 800020 Bihar, India</p>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span></strong><p><strong> Email: </strong><a href="intech_patna@inspl.in">intech_patna@inspl.in</a></p></div>
                    </li>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Guwahati </h4></div>
                        <p>House No. 09, 2nd Floor, Luit Nagar, Satgaon<br>Guwahati – 781026 Assam, India</p>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span></strong><p><strong> Email: </strong><a href="mailto:intech_guwahati@inspl.in">intech_guwahati@inspl.in</a></p></div>
                    </li>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Cochin</h4></div>
                        <p>Cochin<br>Kerala-682001 Telangana, India</p>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span></strong><p><strong> Email: </strong><a href="mailto:intech_cochin@inspl.in">intech_cochin@inspl.in</a></p></div>
                    </li>
                    <li>
                        <div class="_flex"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><h4>Jharkhand</h4></div>
                        <p>Flat No. 1460,  Sahar Garden City, Adityapur-2, Saraikela Kharsawan<br>Jharkhand – 831014 Jharkhand, India</p>
                        <div class="_flex"><span><i class="fa fa-envelope gray-icon" aria-hidden="true"></i></span></strong><p><strong> Email: </strong><a href="mailto:intech_jharkhand@inspl.in">intech_jharkhand@inspl.in</a></p></div>
                    </li>
                   </ul>
                </div> 
              </div>
            </div>
          </section>
          <section class="promo_box reverse wow bounceInUp" data-wow-offset="50">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-8 col-md-8 col-lg-8">
                          <div class="promo_content">
                              <div class="col-md-3">
                                  <h3>Get In Touch</h3>
                              </div>
                              <div class="col-md-9">
                                  <p>Find out how our wide range of services can support and benefit your business. </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-lg-2">
                          <div class="pb_action">
                              <a class="btn btn-lg btn-default" href="contact.php">
                                  Contact Us
                              </a>
                          </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-lg-2">
                          <div class="pb_action">
                              <a class="btn btn-lg btn-default" href="tel: +91 8247613951">
                                  Find an expert
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </section>
      <!--end wrapper-->

      <!--start footer-->
      <footer class="footer">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 col-md-3 col-lg-3">
                      <div class="widget_title">
                          <h4><span>Find Us</span></h4>
                      </div>
                       <div class="widget_content">
                        <p>Corporate office Address: <br> Intech Insurance Surveyors And Loss Assessors Pvt. Ltd., 
                            Suit No 4D, Vamsiram’s Jyothi Square, Road No 3, Banjara Hills, Hyderabad, Telangana, India – 500034.</p>
                              Contact - <a style="color: #fff;" href="tel: +91 040 40188844"> +91 040 40188844</a>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3">
                      <div class="widget_title">
                          <h4><span>Services</span></h4>
                      </div>
                      <div class="widget_content">
                          <ul class="links">
                              <li> <a href="motor.html">Surveyors And Loss Assessors</a></li>
                              <li> <a href="risk-inspections.html">Risk Inspections </a></li>
                              <li> <a href="property-valuations.html">Property Valuations </a></li>
                              <li> <a href="pre-dishpaches.html">Pre-Dispatches </a></li>
                              <li> <a href="charted-engineering.html">Charted Engineering Certifications </a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3">
                      <div class="widget_title">
                          <h4><span>Additional Information</span></h4>
                      </div>
                      <div class="widget_content">
                          <ul class="links">
                              <li> <a href="who-we-are.html">Who We Are</a></li>
                              <li> <a href="fame of intech.html">LimeLight of INTECH </a></li>
                              <li> <a href="corporate-journey.html">Corporate Journey </a></li>
                              <li> <a href="vission.html">Mission & Vision </a></li>
                              <li> <a href="contact.php">Contact Us </a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3">
                      <div class="widget_title">
                          <h4><span>Social Media Links</span></h4>
                      </div>
                      <div>
                          <ul class="links">
                              <li> <i class="fa fa-twitter"> </i> <a href="https://twitter.com/intech_cms" target="_blank">&nbsp; Twitter</a></li>
                              <li> <i class="fa fa-linkedin"> </i> <a href="https://www.linkedin.com/in/intech-insurance-surveyors-83709521b" target="_blank">&nbsp; Linkedin</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <section class="footer_bottom">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      <p class="copyright">&copy; 2020 INTECH. All Rights Reserved.</p>
                  </div>

                  <div class="col-sm-6 ">
                      <div class="footer_social">
                          <ul class="footbot_social">
                              <li><a class="twtr" href="https://twitter.com/intech_cms" target="_blank" data-placement="top" data-toggle="tooltip"
                                      title="Twitter"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="linkedin" href="https://www.linkedin.com/in/intech-insurance-surveyors-83709521b" target="_blank" data-placement="top" data-toggle="tooltip"
                                      title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      </footer>
      <!--end footer-->

      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/retina-1.1.0.min.js"></script>
      <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
      <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
      <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
      <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="js/jflickrfeed.js"></script>
      <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
      <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
      <script type="text/javascript" src="js/swipe.js"></script>

      <script type="text/javascript" src="js/jquery.validate.js"></script>
      <script type="text/javascript" src="js/view.contact.js"></script>
      <script type="text/javascript" src="js/jquery.gmap.js"></script>
      <script type="text/javascript" src="js/jquery.sticky.js"></script>

      <script src="js/main.js"></script>
  </body>

  </html>