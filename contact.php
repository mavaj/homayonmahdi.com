<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Homayon Mahdi Commercial Brokerage L.L.C">
        <meta name="author" content="http://www.MavajSunCo.com">

        <title>Contact - Homayon Mahdi Commercial Brokerage L.L.C</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/MavajSunCo.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                    <a class="navbar-brand" href="index.php">Homayon Mahdi</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <?php
                include_once './navigation.php';
                ?>

                <!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>

        <!-- Page Content -->

        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Contact <small>We'd Love to Hear From You!</small></h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>

                <div class="col-lg-12">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.3122342472434!2d55.26655429999998!3d25.192690799999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f69d425123f51%3A0xb1162a7b933f39ee!2sExecutive+Towers+-+Dubai!5e0!3m2!1sen!2s!4v1402731356379"></iframe>

                </div>

            </div><!-- /.row -->

            <div class="row">

                <div class="col-sm-8">
                    <h3>Let's Get In Touch!</h3>
                    <?php
                    // check for a successful form post  
                    if (isset($_GET['s']))
                        echo "<div class=\"alert alert-success\">" . $_GET['s'] . "</div>";

                    // check for a form error  
                    elseif (isset($_GET['e']))
                        echo "<div class=\"alert alert-danger\">" . $_GET['e'] . "</div>";
                    ?>
                    <form role="form" method="POST" action="contact-form-submission.php">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="input1">Name</label>
                                <input type="text" name="contact_name" class="form-control" id="input1">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="input2">Email Address</label>
                                <input type="email" name="contact_email" class="form-control" id="input2">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="input3">Phone Number</label>
                                <input type="phone" name="contact_phone" class="form-control" id="input3">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label for="input4">Message</label>
                                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-sm-4">
                    <h3>Homayon Mahdi</h3>

                    <p>
                        Office number 403, Aspect tower,<br/> The executive towers, <br/>
                        Business bay<br/>
                        P.O.Box : 75580 , Dubai , U.A.E
                    </p>
                    <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: +971.4.2775886</p>
                    <p><i class="fa fa-phone"></i> <abbr title="Fax">F</abbr>: +971.4.2775896</p>
                    <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:info@homayonmahdi.com">info@homayonmahdi.com</a></p>
                    <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Saturday - Thursday: 9:00 AM to 5:00 PM</p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                        <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
                        <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                        <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                    </ul>
                
                </div>

            </div><!-- /.row -->

        </div><!-- /.container -->

        <?php
        include_once './footer.php';
        ?>