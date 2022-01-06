<?php 
// gets the current URI, remove the left / and then everything after the / on the right
$directory = explode('/',ltrim($_SERVER['REQUEST_URI'],'/'));

// loop through each directory, check against the known directories, and add class   
$directories = array("index", "about","services","contact"); // set home as 'index', but can be changed based of the home uri
foreach ($directories as $folder){
$active[$folder] = ($directory[0] == $folder)? "active":"";
}
?>
<!-- Mirrored from slimhamdi.net/amira/demos/index-kenburns.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 09:29:13 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Knights & King</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/skins/red.css" />

    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/navigation.css" />


    

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>

</head>

<body class="double-diagonal dark">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="img/styleswitcher/logos/logo.png" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header class="header">
            <div class="header-inner">
                <!-- Navbar Starts -->
                <nav class="navbar">
                    <!-- Logo Starts -->
                    <div class="logo">
                        <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand" href="index.php">
                            <!-- <img src="img/myLogo/logo.png" alt="logo"/> -->
                            <img src="img/myLogo/logo.png" alt="logo">
                            <!-- <img src=""> -->
                        </a>
                    </div>
                    <!-- Logo Ends -->
					<!-- Toggle Icon for Mobile Starts -->
					<button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span id="icon-toggler">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</span>
					</button>
					<!-- Toggle Icon for Mobile Ends -->
					<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
						<!-- Main Menu Starts -->
						<ul class="nav navbar-nav" id="main-navigation">
							<li class="<?php echo $active['index']?>"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
							<li class= "<?php echo $active['about']?>"><a href="about.php"><i class="fa fa-user"></i> About Us</a></li>
							<li class="<?php echo $active['services']?>"><a href="services.php"><i class="fa fa-wrench"></i> Services</a></li>
                            <li class="<?php echo $active['contact']?>"><a href="contact.php"><i class="fa fa-envelope"></i> Contact</a></li>
							<!-- <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-image"></i> portfolio <i class="fa fa-angle-down icon-angle"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
									<li><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
									<li><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
									<li><a href="image-project.html">Image Project</a></li>
									<li><a href="slider-project.html">Slider Project</a></li>
									<li><a href="gallery-project.html">Gallery Project</a></li>
									<li><a href="video-project.html">Video project</a></li>
									<li><a href="youtube-project.html">youtube Project</a></li>
									<li><a href="vimeo-project.html">Vimeo Project</a></li>
								</ul>
							</li> -->
							<!-- <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> Blog <i class="fa fa-angle-down icon-angle"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
									<li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
									<li><a href="blog-grid-no-sidebar.html">Grid No Sidebar</a></li>
									<li><a href="blog-post.html">Single Post</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> pages <i class="fa fa-angle-down icon-angle"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="register.html">Register page</a></li>
									<li><a href="login.html">Login page</a></li>
									<li><a href="pricing.html">Pricing</a></li>                                        
									<li><a href="shopping-cart.html">Shopping cart</a></li>
									<li><a href="shopping-checkout.html">shopping checkout</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
									<li><a href="404.html">404 Page</a></li>
									<li><a href="503.html">Server Error Page</a></li>
									<li><a href="faq.html">FAQ page</a></li>
									<li><a href="terms-of-services.html">Terms of Services</a></li>
								</ul>
							</li> -->
							
							<!-- Cart Icon Starts -->
							<!-- <li class="cart hidden-xs hidden-sm"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i></a></li> -->
							<!-- Cart Icon Starts -->
							<!-- Search Icon Starts -->
							<!-- <li class="search hidden-xs hidden-sm"><button id="search-button" class="fa fa-search"></button></li> -->
							<!-- Search Icon Ends -->
						</ul>
						<!-- Main Menu Ends -->
					</div>
					<!-- Search Input Starts -->
					<!-- <div class="site-search hidden-xs">
						<div class="search-container">
							<input id="search-input" type="text" placeholder="type your keyword and hit enter ...">
							<span class="close">×</span>
						</div>
					</div> -->
					<!-- Search Input Ends -->
                    <!-- Navigation Menu Ends -->
                </nav>
                <!-- Navbar Ends -->
            </div>
        </header>