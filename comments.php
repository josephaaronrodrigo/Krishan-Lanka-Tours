<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->

    <!-- Head BEGIN -->
    <head>
        <meta charset="utf-8">
        <title>Comments | Krishan Lanka Tours</title>

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta content="Metronic Shop UI description" name="description">
        <meta content="Metronic Shop UI keywords" name="keywords">
        <meta content="keenthemes" name="author">

        <meta property="og:site_name" content="-CUSTOMER VALUE-">
        <meta property="og:title" content="-CUSTOMER VALUE-">
        <meta property="og:description" content="-CUSTOMER VALUE-">
        <meta property="og:type" content="website">
        <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
        <meta property="og:url" content="-CUSTOMER VALUE-">

        <link rel="shortcut icon" href="favicon.ico">

        <!-- Fonts START -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
        <!-- Fonts END -->

        <!-- Global styles START -->          
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Global styles END --> 

        <!-- Page level plugin styles START -->
        <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin styles END -->

        <!-- Theme styles START -->
        <link href="assets/pages/css/components.css" rel="stylesheet">
        <link href="assets/corporate/css/style.css" rel="stylesheet">
        <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
        <link href="assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
        <link href="assets/corporate/css/custom.css" rel="stylesheet">
        <!-- Theme styles END -->
    </head>
    <!-- Head END -->

    <!-- Body BEGIN -->
    <body class="corporate">
        <!-- BEGIN HEADER -->
        <div class="header" style='background-color: #E64F00;'>
            <div class="container" style='background-color: #E64F00;'>


                <!-- BEGIN NAVIGATION -->
                <div class="header-navigation" style="height: 50px; background-color: #E64F00; margin-top: 5px;">
                    <ul>
                        <li>
                            <a href="index.php">
                                <b>HOME</b>
                            </a>
                        </li>
                        <li>
                            <a href="packages.html">
                                <b>TOUR PACKAGES</b>
                            </a>
                        </li>
                        <li>
                            <a href="services.html">
                                <b>OTHER SERVICES</b>
                            </a>
                        </li>
                        <li class="active">
                            <a href="comments.php">
                                <b>GUESTS COMMENTS</b>
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                <b>CONTACT</b>
                            </a>
                        </li>
                        <!-- END TOP SEARCH -->
                    </ul>
                </div>
                <!-- END NAVIGATION -->
            </div>
        </div>
        <!-- Header END -->

        <div class="main">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Comments</li>
                </ul>
                <div class="row margin-bottom-40">
                    <!-- BEGIN CONTENT -->
                    <div class="col-md-12">
                        <h1>Comments</h1>
                        <div class="content-page">
                            <div class="row">
                                <div class="col-md-9 col-sm-9">
                                    <!-- TESTIMONIALS -->
                                    <br><br><br>
                                    <div class="col-md-12 testimonials-v1">
                                        <div id="myCarousel" class="carousel slide">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">

                                                <?php
                                                include 'dbConnection.php';
                                                $conn = new Connection();
                                                $sql = "SELECT * FROM comment";
                                                $result = $conn->query($sql);
                                                $i = 1;
                                                while ($row = mysqli_fetch_array($result)) {
                                                    if ($i == 1) {
                                                        ?>
                                                        <div class="active item">
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <div class="item">
                                                                <?php
                                                            }
                                                            ?>
                                                            <blockquote><p><?php echo $row['comment'];?></p></blockquote>
                                                            <div class="carousel-info">

                                                                <div class="pull-left">
                                                                    <span class="testimonials-name"><?php echo $row['name'];?></span>
                                                                    <span class="testimonials-post"><?php echo $row['country'];?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $i++;
                                                    }
                                                    ?>

                                                </div>
                                                <br><br>
                                                <!-- Carousel nav -->
                                                <a class="left-btn" href="#myCarousel" data-slide="prev"></a>
                                                <a class="right-btn" href="#myCarousel" data-slide="next"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <h2>Write a Comment</h2>
                                        <p>Give us your feedback because a happy customer is what thrives us to be better each day!</p>

                                        <!-- BEGIN FORM-->
                                        <form action="addComment.php" role="form" method="POST">
                                            <div class="form-group">
                                                <label for="contacts-name">Name</label>
                                                <input type="text" class="form-control" id="contacts-name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="contacts-country">Country</label>
                                                <input type="text" class="form-control" id="contacts-country" name="country">
                                            </div>
                                            <div class="form-group">
                                                <label for="contacts-message">Message</label>
                                                <textarea class="form-control" rows="5" id="contacts-message" name="comment"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Send</button>
                                            <button type="button" class="btn btn-default">Cancel</button>
                                        </form>
                                        <!-- END FORM-->
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- END CONTENT -->
                    </div>
                </div>
            </div>



            <!-- BEGIN FOOTER -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <!-- BEGIN COPYRIGHT -->
                        <div class="col-md-4 col-sm-4 padding-top-10">
                            2017 &COPY; Quoded&TRADE;
                        </div>
                        <!-- END COPYRIGHT -->
                        <!-- BEGIN PAYMENTS -->
                        <div class="col-md-4 col-sm-4">
                            <ul class="social-footer list-unstyled list-inline pull-right">
                                <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-github"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="javascript:;"><i class="fa fa-dropbox"></i></a></li>
                            </ul>  
                        </div>
                        <!-- END PAYMENTS -->
                        <!-- BEGIN POWERED -->
                        <div class="col-md-4 col-sm-4 text-right">
                            <p class="powered">Powered by: <a href="http://www.bluehost.com/">www.bluehost.com</a></p>
                        </div>
                        <!-- END POWERED -->
                    </div>
                </div>
            </div>
            <!-- END FOOTER -->

            <!-- Load javascripts at bottom, this will reduce page load time -->
            <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
            <!--[if lt IE 9]>
            <script src="assets/plugins/respond.min.js"></script>
            <![endif]-->
            <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
            <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
            <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
            <script src="assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->

            <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
            <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
            <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
            <script src="assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
            <script src="assets/pages/scripts/contact-us.js" type="text/javascript"></script>

            <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
            <script type="text/javascript">
                jQuery(document).ready(function () {
                    Layout.init();
                    Layout.initUniform();
                    ContactUs.init();
                    Layout.initTwitter();
                });
            </script>
            <!-- END PAGE LEVEL JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>