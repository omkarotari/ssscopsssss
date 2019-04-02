<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once('title.html'); ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="about-page">
    <div class="page-header">
        <?php include_once('header.php'); ?>
        <div class="page-header-overlay">
			<!--<video autoplay muted loop class="video-background" id="myVideo" style="position: fixed; top: 0; width: 100%; height: inherit; z-index: -1;">
				<source src="video/1.mp4" type="video/mp4">
			</video>-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1>Alumni Register</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container" style="background">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs">
                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li>Alumni Register</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12">
                <div class="about-heading">
                    <h2 class="entry-title">Pharmacist Association of Sawarda Students (PASS) Registration</h2>

                    <p>Aluminous Association of SSSCOPS</p>
                </div><!-- .about-heading -->
            </div><!-- .col -->

            <div class="col-12 col-lg-12">
                <div class="about-values">
                    <h3>Alumni Form</h3>
<form id="contact-form" action="registerAlumni.php" method="post"  role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">First Name *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Last Name *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email id *" required="required" data-error="Valid email id is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			 <div class="col-md-4">
                <div class="form-group">
                    <label for="form_contact">Contact No *</label>
                    <input id="form_contact" type="text" name="contact" pattern="[7-9]{1}[0-9]{9}" class="form-control" placeholder="Phone number with 7-9 and remaing 9 digit with 0-9 *" required="required" data-error="Please enter valid contact numer.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_year">Passing Year *</label>
					<select id="form_year" name="batchyear" class="form-control" required="required" data-error="Please specify your batch year.">
					<option value="">Select year</option>
					<?php for($i=1984; $i<= date('Y'); $i++ ){ ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php } ?>
					 </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_address">Address *</label>
                    <textarea id="form_address" name="address" class="form-control" placeholder="Please specify your address" rows="3" required="required" data-error="Please specify your address."> </textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			<div class="col-md-4">
                <div class="form-group">
                    <label for="form_address">Pharmacist Registration No</label>
					<div class="form-check">
						<input id="form_pregistration" type="text" name="pregistrationno" class="form-control" placeholder="Please enter your Pharmicist registration number *" required="required" data-error="Please mention your Pharmicist registration number.">
					</div>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
				<div class="col-md-4">
                 <div class="form-group">
                    <label for="form_profession">Profession *</label>
                    <input id="form_profession" type="text" name="profession" class="form-control" placeholder="Please enter your profession *" required="required" data-error="Please mention your profession.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			<div class="col-md-6">
                 <div class="form-group">
                    <label for="form_afterdiploma">What did you do after SSSCOPS ? *</label>
                    <input id="form_afterdiploma" type="text" name="afterdiploma" class="form-control" placeholder="What did you do after SSSCOPS? *" required="required" data-error="What did you do after SSSCOPS ?">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			<div class="col-md-6">
                 <div class="form-group">
                    <label for="form_extraachivements">Extra Achivements </label>
                    <input id="form_extraachivements" type="text" name="extraachivements" class="form-control" placeholder="Please mention your extra achivements, if any">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="submitButton" class="btn btn-success btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> These fields are required.</p>
            </div>
        </div>
    </div>

</form>
                   

                </div><!-- .about-values -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
   <!--  <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="team-heading">
                    <h2 class="entry-title">Meet Our Team</h2>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
         <!--        </div><!-- .team-heading -->
        <!--     </div><!-- .col -->

        <!--     <div class="col-12 col-md-6 col-lg-3">
                <div class="team-member">
                    <img src="images/team-1.jpg" alt="">

                    <h3>Mr. John Wick</h3>
                    <h4>Materials</h4>

                    <ul class="p-0 m-0 d-flex justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div><!-- .team-member -->
          <!--   </div><!-- .col -->

         <!--    <div class="col-12 col-md-6 col-lg-3">
                <div class="team-member">
                    <img src="images/team-2.jpg" alt="">

                    <h3>Michelle Golden</h3>
                    <h4>WordPress</h4>

                    <ul class="p-0 m-0 d-flex justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div><!-- .team-member -->
            <!-- </div><!-- .col -->

          <!--   <div class="col-12 col-md-6 col-lg-3">
                <div class="team-member">
                    <img src="images/team-3.jpg" alt="">

                    <h3>Ms. Lucius</h3>
                    <h4>Data Analysis</h4>

                    <ul class="p-0 m-0 d-flex justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div><!-- .team-member -->
         <!--    </div><!-- .col -->

         <!--    <div class="col-12 col-md-6 col-lg-3">
                <div class="team-member">
                    <img src="images/team-4.jpg" alt="">

                    <h3>Ms. Lara Croft </h3>
                    <h4>HTML CSS</h4>

                    <ul class="p-0 m-0 d-flex justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div><!-- .team-member -->
        <!--     </div><!-- .col -->
      <!--   </div><!-- .row -->
    <!-- </div><!-- .container -->
	 <footer class="site-footer" style="background-color:white;">
        <?php  include_once('footer.php'); ?>
		
	</footer>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
	<script type='text/javascript' src='bootstrap/js/bootstrap.min.js'></script>

</body>
</html>