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
	
	<link rel="stylesheet" href="css/dataTables.min.css">
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
                        <li>Alumni Data Forum</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12">
                <div class="about-heading">
                    <h2 class="entry-title">College of Pharmacy, Sawarde</h2>

                    <p>Education Pioneer In Konkan Region </p>
                </div><!-- .about-heading -->
            </div><!-- .col -->

            <div class="col-12 col-lg-12">
                <div class="about-values">
                    <h3>Alumni Data</h3>

                   <div class="form-group">
						<label for="usr">Name:</label>
						<input type="text" class="form-control" id="usr">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd">
					</div>
				   <div class="form-group">
						
						<button type="button"  id="btnSubmit" class="btn btn-primary">getData</button>
				   
				   </div>
				   <div id="test_tables">
						<!--<table id="alumniTable" class="display">
							<thead>
								<tr>
									<th>id</th>
									<th>Name</th>
									<th>SurName</th>
									<th>email</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table> -->
				   </div>

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

    <!--<script type='text/javascript' src='js/jquery.js'></script>
	
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
	<script type='text/javascript' src='bootstrap/js/bootstrap.min.js'></script> -->
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
</body>
</html>