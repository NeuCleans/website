<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHH3298');</script>
        <!-- End Google Tag Manager -->
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Neu </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/" media="all" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css'>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107991313-1"></script> -->
        <!-- <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-107991313-1');
        </script> -->
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHH3298"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <?php
        if(isset($_POST['submit'])){
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'altar34.supremepanel34.com';

        $mail->SMTPAuth = true;
        $mail->Username = 'admin@neucleans.com';
        $mail->Password = 'securepassword912';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('admin@neucleans.com', 'Neu mail form neucleans.com');
        $mail->addReplyTo('admin@neucleans.com', 'Neu Website');
        // Add a recipient
        $mail->addAddress('sales@neucleans.com');
        // Email subject
        $mail->Subject = 'New Mail from neucleans.com ';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mailContent = "<br> Name: " . $_POST['uname']. "<br><br> Email: " . $_POST['umail']. "<br><br> Phone: " . $_POST['uphone'] . "<br><br> Message: ". $_POST['umessage'];
        $mail->Body = $mailContent;
        // Send email
        if(!$mail->send()) {
        echo '<div class="alert  alert-danger alert-dismissable text-center" style="background:indianred !important; color:#fff !important; border-radius:0px !important"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong> Message could not be sent. </div>';
        } else {

        echo '<div class="alert  alert-success alert-dismissable text-center" style="background:green !important; color:#fff !important; border-radius:0px !important"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Your Message has been sent. </div>';
        }
        }
        ?>
        <!-- navbar start -->
        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-scroll href="#home">home</a></li>
                        <li><a data-scroll href="#services">services</a></li>
                        <li><a data-scroll href="#features">features</a></li>
                        <li><a data-scroll href="#reviews">reviews</a></li>
                        <li><a data-scroll href="#pricing">pricing</a></li>
                        <li><a data-scroll href="#contact">Contact</a></li>
                        <li ><a href="https://neucleans.typeform.com/to/Aj0KLL" target="_blank" class="signup">sign up</a></li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <!-- end start -->
                <!-- Start slider -->
                <div class="slider-wrapper" id="home">
                    <div class="container">
                        <div class="row">
                            <div class="slider-content">
                                <h1>Airbnb. Homeaway. VRBO. FlipKey.</h1>
                                <h2>Sign up  for Hotel-grade turnovers!</h2>
                                <div class="quote">
                                   <p>
                                        <a href="https://neucleaningcompany.typeform.com/to/EBU0Yq" target="_blank">Get a free quote </a>
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End slider -->
                <!-- Start service -->
                <div class="service-wrapper" id="services">
                    <div class="container ">
                        <div class="service-content">
                            <div class="row">
                                <div class="section-title text-center">
                                    <h1>Our Services </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="single-service">
                                    <div class="col-md-4">
                                        <p class="text-center"><img src="img/simple.png" class=""></p>
                                        <h3 class="text-center" >simple</h3>
                                        <p class="text-justify">
                                            This clean is perfectly suited for high turnover vacation rentals. Our cleaners will clean your home after your guests checkout. Cleaners only use green cleaning supplies so no need to worry about toxins or overexposure.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-service">
                                    <div class="col-md-4">
                                        <p class="text-center"><img src="img/simple-plus.png"></p>
                                        <h3 class="text-center" >simple plus</h3>
                                        <p class="text-justify">
                                            This clean includes everything from the Simple clean, PLUS linens and toiletries. Stop those last minute runs to wholesale markets and confidently know that we’ve got you covered.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-service">
                                    <div class="col-md-4">
                                        <p class="text-center"><img src="img/deep-clean.png"></p>
                                        <h3 class="text-center" >deep clean</h3>
                                        <p class="text-justify">
                                            This clean is our deepest clean and is handled exclusively by our most trusted professional partners. Done once every 5 weeks, we’ll clean your listing from top to bottom, provide you with a detailed report, and ensure that it’s picture perfect, every time.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="service-quote text-center">
                                <a href="https://neucleaningcompany.typeform.com/to/EBU0Yq" target="_blank">Get a free quote </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service -->
                <!-- Start slider -->
                <!-- Start features -->
                <div class="feature-wrapper" id="features">
                    <div class="container">
                        <div class="feature-content">
                            <div class="section-title text-center">
                                <h1>Neu features</h1>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 sborder-rt sborder-btm feature1 ">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-1.png">
                                        </p>
                                        <h3 class="text-center">Cross Platform</h3>
                                        <p>
                                            Airbnb, VRBO, Homeaway, Flipkey; you name it, we cover it!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-sm-6 feature2">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-2.png">
                                        </p>
                                        <h3 class="text-center">Automated Billing</h3>
                                        <p>
                                            Never worry about leaving cash under the mat for cleaners again! We safely process your CC after each turnover.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 feature3">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-3.png">
                                        </p>
                                        <h3 class="text-center">Automated Scheduling</h3>
                                        <p>
                                            Once you sign up, all check-ins and checkouts are automatically synced into our system. We’ll know when we’ll have to clean your home as soon as you’re booked.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 feature4">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-4.png">
                                        </p>
                                        <h3 class="text-center">Late Checkout Request</h3>
                                        <p>
                                            Have a late checkout? Give us a heads up and our cleaners will do their best to accommodate you.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 feature5">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-5.png">
                                        </p>
                                        <h3 class="text-center">Clean Status</h3>
                                        <p>
                                            Receive SMS notifications as soon as your home is cleaned; never allow your guest to check-in to a dirty listing!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 feature6">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-6.png">
                                        </p>
                                        <h3 class="text-center">Toiletries</h3>
                                        <p>
                                            Paper towels, facial tissues, toilet tissue, and more to come. Upgrade to PLUS, to have toiletries provided with every clean.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 feature7">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-7.png">
                                        </p>
                                        <h3 class="text-center">7/365</h3>
                                        <p>
                                            You can count on us! We operate everyday of the year, including holidays.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 feature8">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-8.png">
                                        </p>
                                        <h3 class="text-center">Linens</h3>
                                        <p>
                                            Stop those frequent trips to the local laundromat. Upgrade to PLUS and you’ll never have to worry about doing laundry ever again!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12  feature9">
                                    <div class="row">
                                        <div class="single-feature fqoute" >
                                        <div class="feature-quote text-center">
                                            <a href="https://neucleaningcompany.typeform.com/to/EBU0Yq" target="_blank">Get a free quote</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features -->
                <!-- Start Testimonial -->
                <div class="testimonial-wrapper" id="reviews">
                    <div class="section-title text-center">
                        <h1> WHAT HOSTS SAY ABOUT OUR SERVICE</h1>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <article>
                                    <div id="owl">

                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client4.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Awesome product, working a 9-5 has not allowed me to perform cleans during the checkout checking window. NEU has saved me</p>
                                                    </div>
                                                    <p class="name">Greg</p>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client5.jpg">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>After my last cleaner canceled on me last minute, I switched to NEU and its been smooth sailing ever since.
                                                        </p>
                                                    </div>
                                                    <p class="name">Emma</p>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client14.jpg">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>
                                                        I'm a property manager and my biggest headache is cleans, managing multiple cleaner availabilities and schedules was a nightmare and outsourcing the cleaning portion of my business to NEU has be a dream come true.
                                                        </p>
                                                    </div>
                                                    <p class="name">John</p>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client6.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>We own a second property and took turns cleaning after guest checkouts. Neu has given us time back.
                                                        </p>
                                                    </div>
                                                    <p class="name">Alex and Emily</p>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client30.jpg">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>I love their linen service. I never worry about buying linens after permanent stains.
                                                        </p>
                                                    </div>
                                                    <p class="name">Chris</p>
                                                </div>

                                            </div>
                                        </div>





                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Testimonial -->
                <!-- Start pricing -->
                <div class="pricing-wrapper" id="pricing">
                    <div class="container ">
                        <div class="row">
                            <div class="section-title text-center">
                                <h1>Our Pricing </h1>
                            </div>
                        </div>
                        <div class="pricing-content">
                            <div class="row">
                                <ul  class="nav nav-pills">

                                    <li class="active">
                                        <a  href="#1a" data-toggle="tab">
                                        <h2>SIMPLE</h2>
                                        <div class="single-price">
                                            <h4>PRICING STARTS</h4>
                                            <h1>$45</h1>
                                            <h4>400 SQ FT 0BD/1BR</h4>
                                        </div>
                                        </a>

                                        <div id="p1" class="hidden-lg hidden-md hidden-sm">
                                            <div class="row service_lists">
                                            <div class="row">
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="service-list">
                                                        <h2>bedroom</h2>
                                                        <ul>
                                                            <li>Strip sheets.</li>
                                                            <li>Make beds.</li>
                                                            <li>Wipe down all surfaces.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="service-list">
                                                        <h2>Common areas</h2>
                                                        <ul>
                                                            <li>Fold blankets & arrange pillows on couch.</li>
                                                            <li>Wipe down & dust all hard surfaces.</li>
                                                            <li>Wipe down all cloth surfaces &  upholstery.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="">
                                                        <div class="service-list">
                                                            <h2>Bathroom</h2>
                                                            <ul>
                                                                <li>Collect trash & replace garbage bags.</li>
                                                                <li>Wipe Top to Bottom</li>
                                                                <ul>
                                                                    <li>Mirrors</li>
                                                                    <li>Counters</li>
                                                                    <li>Sinks</li>
                                                                    <li>Shower/Walls</li>
                                                                    <li>Bathtub</li>
                                                                    <li>Toilet </li>
                                                                </ul>

                                                                <li>Vacuum/Mop floor.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6  col-sm-6">
                                                    <div class="">
                                                        <div class="service-list">
                                                            <h2>kitchen</h2>
                                                            <ul>
                                                                <li>Wash/Dry/Put away dishes in sink.</li>
                                                                <li>Start dishwasher</li>
                                                                <li>Wipe Top to Bottom</li>
                                                                <ul>
                                                                    <li>Microwave cleaned (inside/outside)</li>
                                                                    <li>Refrigerator (inside)</li>
                                                                    <li>Counters and Stovetop</li>
                                                                    <li>Sink </li>
                                                                </ul>
                                                                <li>Collect trash & replace garbage bags.</li>
                                                                <li>Vacuum/Mop floor.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="service-quote text-center">
                                                    <p><a href="https://neucleaningcompany.typeform.com/to/EBU0Yq" target="_blank">Get a free quote</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>


                                    </li>

                                    <li>
                                        <a href="#2a" class="" data-toggle="tab">
                                        <h2>SIMPLE PLUS</h2>

                                        <div class="simple-plus">
                                            <h4>PRICING STARTS </h4>
                                            <h1>$69</h1>
                                            <h4>400 SQ FT 0BD/1BR</h4>
                                        </div>

                                        </a>

                                        <div id="p2" class="hidden-lg hidden-md hidden-sm">
                                        <div class="row service_lists">
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>bedroom</h2>
                                                    <ul>

                                                        <li>Strip sheets.</li>
                                                        <li>Make beds.</li>
                                                        <li class="item-clr1">Provide fresh bed linens.</li>
                                                        <li>Wipe down all surfaces.</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>Common areas</h2>
                                                    <ul>
                                                        <li>Fold blankets & arrange pillows on couch.</li>
                                                        <li>Wipe down & dust all hard surfaces.</li>
                                                        <li>Wipe down all cloth surfaces &  upholstery.</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>Bathroom</h2>
                                                        <ul>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Wipe Top to Bottom</li>
                                                            <ul>
                                                                <li>Mirrors</li>
                                                                <li>Counters</li>
                                                                <li>Sinks</li>
                                                                <li>Shower/Walls</li>
                                                                <li>Bathtub</li>
                                                                <li>Toilet </li>
                                                            </ul>
                                                            <li  class="item-clr1">Replace toilet paper.</li>
                                                            <li  class="item-clr1">Replace facial Tissue.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>kitchen</h2>
                                                        <ul>
                                                            <li>Wash/Dry/Put away dishes in sink.</li>
                                                            <li>Start dishwasher</li>
                                                            <li>Wipe Top to Bottom </li>
                                                            <ul>
                                                                <li>Microwave cleaned (inside/outside)</li>
                                                                <li>Refrigerator (inside)</li>
                                                                <li>Counters and Stovetop</li>
                                                                <li>Sink </li>
                                                            </ul>
                                                            <li  class="item-clr1">Replace paper towels.</li>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="service-quote text-center">
                                                <p><a href="https://neucleaningcompany.typeform.com/to/EBU0Yq" target="_blank">Get a free quote</a></p>
                                            </div>
                                        </div>
                                    </div>

                                        </div>
                                    </li>
                                    <li>
                                        <a href="#3a"  class="" data-toggle="tab">
                                        <h2>DEEP CLEAN</h2>

                                        <div class="deep-clean">
                                            <h4>DONE ONCE EVERY  </h4>
                                            <p>- 5 WEEKS</p>
                                            <p>- 10 STAYS</p>
                                            <p>- 7+ DAY STAY</p>
                                            <h4>INCLUDED W/ SERVICE </h4>
                                        </div>

                                        </a>

                                        <div id="p3" class="hidden-lg hidden-md hidden-sm">

                                            <div class="row service_lists">
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>bedroom</h2>
                                                    <ul>
                                                        <li>Strip sheets.</li>
                                                        <li>Make beds.</li>
                                                        <li class="item-clr2">Strip and replace comforter.</li>
                                                        <li class="item-clr2">Wipe inside all cabinets/drawers.</li>
                                                        <li>Wipe down all surfaces.</li>
                                                        <li class="item-clr2">Vacuum/Mop (under bed).</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>All rooms</h2>
                                                    <ul>
                                                        <li class="item-clr2">Take pictures. Document status. </li>
                                                        <li class="item-clr2">Cobweb removal.</li>
                                                        <li class="item-clr2">Dust ceiling fans.</li>
                                                        <li class="">Wipe Top to Bottom</li>
                                                        <ul>
                                                            <li class="item-clr2">Ceiling fan</li>
                                                            <li class="item-clr2">Light fixtures</li>
                                                            <li class="item-clr2">Windows (interior)</li>
                                                            <li class="item-clr2">Stair railings</li>
                                                            <li class="item-clr2">Walls (spot clean)</li>
                                                            <li>Hard surfaces</li>
                                                            <li>Cloth surfaces & upholstery</li>
                                                            <li class="item-clr2">Doorknobs</li>
                                                            <li class="item-clr2">Light switches & thermostats</li>
                                                            <li class="item-clr2">Baseboards</li>
                                                        </ul>
                                                        <li class="item-clr2">Move furniture (whenever possible). </li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>



                                        </div>

                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>kitchen</h2>
                                                        <ul>
                                                            <li class="item-clr2">Wipe cupboards (inside/outside).</li>
                                                            <li>Wash/Dry/Put away dishes in sink</li>
                                                            <li>Start dishwasher</li>
                                                            <li class="item-clr2">Deep scrub of stove burners and oven.</li>
                                                            <li>Wipe Top to Bottom </li>
                                                            <ul>
                                                                <li>Microwave cleaned (inside/<span  class="item-clr2">outside/top</span>)</li>
                                                                <li>Refrigerator (inside)</li>
                                                                <li>Counters and Stovetop</li>
                                                                <li>Sink </li>
                                                            </ul>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">

                                                <div class="service-list">
                                                    <h2>Bathroom</h2>
                                                    <ul>
                                                        <li>Collect trash & replace garbage bags.</li>
                                                        <li>Spot clean mold mildew on wall and ceilings.</li>
                                                        <li>Deep scrub shower walls, tubs and curtains.</li>
                                                        <li>Wipe Top to Bottom</li>
                                                        <ul>
                                                            <li>Mirrors</li>
                                                            <li>Counters</li>
                                                            <li>Sinks</li>
                                                            <li>Shower/Walls</li>
                                                            <li>Bathtub</li>
                                                            <li>Toilet </li>
                                                        </ul>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-md-12 col-sm-6">
                                            <div class="service-quote text-center">
                                                <p><a href="https://neucleaningcompany.typeform.com/to/EBU0Yq" target="_blank">Get a free quote</a></p>
                                            </div>
                                        </div>
                                    </div>

                                        </div>
                                    </li>

                                </ul>
                            </div>






                            <div class="tab-content clearfix hidden-xs">
                                <div class="tab-pane active" id="1a">
                                    <div class="">
                                        <div class="row service_lists">
                                            <div class="row">
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="service-list">
                                                        <h2>bedroom</h2>
                                                        <ul>
                                                            <li>Strip sheets.</li>
                                                            <li>Make beds.</li>
                                                            <li>Wipe down all surfaces.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="service-list">
                                                        <h2>Common areas</h2>
                                                        <ul>
                                                            <li>Fold blankets & arrange pillows on couch.</li>
                                                            <li>Wipe down & dust all hard surfaces.</li>
                                                            <li>Wipe down all cloth surfaces &  upholstery.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="">
                                                        <div class="service-list">
                                                            <h2>Bathroom</h2>
                                                            <ul>
                                                                <li>Collect trash & replace garbage bags.</li>
                                                                <li>Wipe Top to Bottom</li>
                                                                <ul>
                                                                    <li>Mirrors</li>
                                                                    <li>Counters</li>
                                                                    <li>Sinks</li>
                                                                    <li>Shower/Walls</li>
                                                                    <li>Bathtub</li>
                                                                    <li>Toilet </li>
                                                                </ul>

                                                                <li>Vacuum/Mop floor.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6  col-sm-6">
                                                    <div class="">
                                                        <div class="service-list">
                                                            <h2>kitchen</h2>
                                                            <ul>
                                                                <li>Wash/Dry/Put away dishes in sink.</li>
                                                                <li>Start dishwasher </li>
                                                                <li>Wipe Top to Bottom</li>
                                                                <ul>
                                                                    <li>Microwave cleaned (inside/outside)</li>
                                                                    <li>Refrigerator (inside)</li>
                                                                    <li>Counters and Stovetop</li>
                                                                    <li>Sink </li>
                                                                </ul>
                                                                <li>Collect trash & replace garbage bags.</li>
                                                                <li>Vacuum/Mop floor.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="service-quote text-center">
                                                    <p><a href="https://neucleaningcompany.typeform.com/to/EBU0Yq" target="_blank">Get a free quote</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="2a">
                                    <div class="row service_lists">
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>bedroom</h2>
                                                    <ul>

                                                        <li>Strip sheets.</li>
                                                        <li>Make beds.</li>
                                                        <li  class="item-clr1">Provide fresh bed linens.</li>
                                                        <li>Wipe down all surfaces.</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>Common areas</h2>
                                                    <ul>
                                                        <li>Fold blankets & arrange pillows on couch.</li>
                                                        <li>Wipe down & dust all hard surfaces.</li>
                                                        <li>Wipe down all cloth surfaces &  upholstery.</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>Bathroom</h2>
                                                        <ul>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Wipe Top to Bottom</li>
                                                            <ul>
                                                                <li>Mirrors</li>
                                                                <li>Counters</li>
                                                                <li>Sinks</li>
                                                                <li>Shower/Walls</li>
                                                                <li>Bathtub</li>
                                                                <li>Toilet </li>
                                                            </ul>
                                                            <li  class="item-clr1 item-style-1">Replace toilet paper.</li>
                                                            <li  class="item-clr1">Replace facial Tissue.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>kitchen</h2>
                                                        <ul>
                                                            <li>Wash/Dry/Put away dishes in sink.</li>
                                                            <li>Start dishwasher</li>
                                                            <li>Wipe Top to Bottom</li>
                                                            <ul>
                                                                <li>Microwave cleaned (inside/outside)</li>
                                                                <li>Refrigerator (inside)</li>
                                                                <li>Counters and Stovetop</li>
                                                                <li>Sink </li>
                                                            </ul>
                                                            <li  class="item-clr1">Replace paper towels.</li>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="service-quote text-center">
                                                <p><a href="https://neucleaningcompany.typeform.com/to/EBU0Yq" target="_blank">Get a free quote</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane" id="3a">
                                    <div class="row service_lists">
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>bedroom</h2>
                                                    <ul>
                                                        <li>Strip sheets.</li>
                                                        <li>Make beds.</li>
                                                        <li class="item-clr2">Strip and replace comforter.</li>
                                                        <li class="item-clr2">Wipe inside all cabinets/drawers.</li>
                                                        <li>Wipe down all surfaces.</li>
                                                        <li class="item-clr2">Vacuum/Mop (under bed).</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>All rooms</h2>
                                                    <ul>
                                                        <li class="item-clr2">Take pictures. Document status. </li>
                                                        <li class="item-clr2">Cobweb removal.</li>
                                                        <li class="item-clr2">Dust ceiling fans.</li>
                                                        <li class="">Wipe Top to Bottom</li>
                                                        <div class="row">
                                                            <ul>
                                                            <div class="col-md-5 col-sm-5">
                                                                  <li class="item-clr2">Ceiling fan</li>
                                                                <li class="item-clr2">Light fixtures</li>
                                                                <li class="item-clr2">Windows (interior)</li>
                                                                <li class="item-clr2">Stair railings</li>
                                                                <li class="item-clr2">Walls (spot clean)</li>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7">
                                                                <li>Hard surfaces</li>
                                                                <li>Cloth surfaces & upholstery</li>
                                                                <li class="item-clr2">Doorknobs</li>
                                                                <li class="item-clr2">Light switches & thermostats</li>
                                                                <li class="item-clr2">Baseboards</li>
                                                            </div>

                                                        </ul>
                                                        </div>

                                                        <li class="item-clr2">Move furniture (whenever possible). </li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>



                                        </div>

                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>kitchen</h2>
                                                        <ul>
                                                            <li class="item-clr2">Wipe cupboards (inside/outside).</li>
                                                            <li>Wash/Dry/Put away dishes in sink</li>
                                                            <li>Start dishwasher</li>
                                                            <li class="item-clr2">Deep scrub of stove burners and oven.</li>
                                                            <li>Wipe Top to Bottom </li>
                                                            <ul>
                                                                <li>Microwave cleaned (inside/<span class="item-clr2">outside/top</span>)</li>
                                                                <li>Refrigerator (inside)</li>
                                                                <li>Counters and Stovetop</li>
                                                                <li>Sink </li>
                                                            </ul>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">

                                                <div class="service-list">
                                                    <h2>Bathroom</h2>
                                                    <ul>
                                                        <li>Collect trash & replace garbage bags.</li>
                                                        <li class="item-clr2">Spot clean mold mildew on wall and ceilings.</li>
                                                        <li class="item-clr2">Deep scrub shower walls, tubs and curtains.</li>
                                                        <li>Wipe Top to Bottom</li>
                                                        <ul>
                                                            <li>Mirrors</li>
                                                            <li>Counters</li>
                                                            <li>Sinks</li>
                                                            <li>Shower/Walls</li>
                                                            <li>Bathtub</li>
                                                            <li>Toilet </li>
                                                        </ul>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-md-12 col-sm-6">
                                            <div class="service-quote text-center">
                                                <p><a href="https://neucleaningcompany.typeform.com/to/EBU0Yq" target="_blank">Get a free quote</a></p>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <!-- tab content start -->

                            <!-- endt tab content  -->

                        </div>
                    </div>

                </div>
                <!-- End Pricing -->
                <!-- Start contact -->
                <div class="contact-wrapper" id="contact">
                    <div class="container ">
                        <div class="service-content">
                            <div class="row">
                                <div class="section-title text-center">
                                    <h1>Contact Neu </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">

                                        <form class="form-horizontal" action="#" method="post">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="col-md-12 ">
                                                    <div class="form-group ">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" name="uname"  placeholder="Name" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="col-md-12 ">
                                                    <div class="form-group ">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                                <input type="text" name="uphone" class="form-control" placeholder="Phone" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="col-md-12 ">
                                                    <div class="form-group ">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa fa-envelope" aria-hidden="true"></i></span>
                                                                <input type="text" name="umail" class="form-control" placeholder="Email" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="col-md-12 ">
                                                    <div class="form-group ">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <textarea name="umessage" placeholder="Type your message here" class="form-control" cols="100" rows="8"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <input name="submit" type="submit" class="form-control" value="SUBMIT">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6  hidden-sm hidden-xs">
                                    <div class="contact-thumb">
                                        <img src="img/contack-sidebar.png" class="img-responsive" style="max-height: 450px">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 partner-quote text-center">
                                    <a href="https://neucleans.typeform.com/to/tbs7mb" target="_blank" role="button" class="btn-lg btn-block">Become a cleaning partner </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End contact -->

                <footer class=" text-center">
                    <!-- <p class="text-center">Copyright &copy | <a href="#">Privacy</a> | <a href="#">Term</a> | <a href="#">Cookies</a></p> -->
                    <ul class="list-inline">
                        <li><a href="#">Copyright &copy</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Term</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li><a href="https://docs.google.com/document/d/1QWq7pqwQZxRDY46cf_WwAvWpxwv4-PuiX6oJTVJie2E" target="_blank">FAQ</a></li>
                    </ul>
                </footer>


                <!-- Start main-wrapper -->
                <!-- end main-wrapper -->

                <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js" type="text/javascript"></script>
                <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/2.0.0/jquery.localScroll.min.js"></script>
                <script src="js/smoot-scroll.js"></script>

                <!--Hellobar Js-->
                <script type="text/javascript" src="https://my.hellobar.com/c68b76509ad5d4b7d763dda37f9f36c800341e61.js" async="async"></script>

                <script src="js/custom-script.js"></script>
                <script>

                $(document).ready(function () {
                $("#owl").owlCarousel({
                navigation: false,
                slideSpeed: 100,
                paginationSpeed: 800,
                singleItem: true,
                autoPlay: true
                });
                });
                </script>
                <!-- Start of Async Drift Code -->
                <script>
                !function() {
                  var t;
                  if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
                  t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
                  t.factory = function(e) {
                    return function() {
                      var n;
                      return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
                    };
                  }, t.methods.forEach(function(e) {
                    t[e] = t.factory(e);
                  }), t.load = function(t) {
                    var e, n, o, i;
                    e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
                    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
                  });
                }();
                drift.SNIPPET_VERSION = '0.3.1';
                drift.load('bx34cws68ue9');
                </script>
                <!-- End of Async Drift Code -->

                <!-- MouseStats:Begin -->
<script type="text/javascript">var MouseStats_Commands=MouseStats_Commands?MouseStats_Commands:[]; (function(){function b(){if(void 0==document.getElementById("__mstrkscpt")){var a=document.createElement("script");a.type="text/javascript";a.id="__mstrkscpt";a.src=("https:"==document.location.protocol?"https://ssl":"http://www2")+".mousestats.com/js/5/0/5088646396414438253.js?"+Math.floor((new Date).getTime()/6E5);a.async=!0;a.defer=!0;(document.getElementsByTagName("head")[0]||document.getElementsByTagName("body")[0]).appendChild(a)}}window.attachEvent?window.attachEvent("onload",b):window.addEventListener("load", b,!1);"complete"===document.readyState&&b()})(); </script>
<!-- MouseStats:End -->

                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            </body>
        </html>