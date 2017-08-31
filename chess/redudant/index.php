<?php include_once("shared/header.php") ?>
        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">
                 
                </div>

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->


                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <!-- <img src="assets/images/logo.png" class="logo" alt=""> -->
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                            <strong style="font-size: 30px;color: orange;">CHESS.NG</strong>
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#header">Home</a></li>
                            <li><a href="#services">Blog</a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Association
                            <span class=""></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">NCF</a></li>
                                  <li><a href="#">CPAN</a></li>
                                  <li><a href="#">NFOC</a></li>
                                  <li class="dropdown"><a href="#" class="pull-left dropdown-toggle" data-toggle="dropdown">NFOC</a>

                                  <ul class="dropdown-menu">
                                  <li><a href="#">NCF</a></li>
                                  <li><a href="#">CPAN</a></li>
                                  <li><a href="#">NFOC</a></li>
                                  <li><a href="#">NFOC</a></li>
                                </ul></li>
                                </ul>
                            </li>
                            <!--<li><a href="#pricing">Pricing</a></li>
                            <li><a href="#our-team">Team</a></li>-->
                            <li><a href="#about-us">Resources</a></li>
                            <li><a href="#contact">Live Events</a></li>
                            <li data-toggle="modal" data-target="#myModal"><a href="#contact">Login</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>

            <!--Home Sections-->

            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello_slid">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Let's Play<strong> Chess</strong></h2>
                                            <h1 class="text-white">ENJOY THE GAME AT YOUR COMFORT</h1>
                                            <h3 class="text-white">- Let's Play <strong>Chess</strong> our game -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="" class="btn btn-primary m-top-20 bg-orange"style="background-color: orange;border: 1px solid orange">Buy Now</a>
                                            <a href="" class="btn btn-default m-top-20">Take a Tour</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                             <h2 class="text-white">Let's Play<strong> Chess</strong></h2>
                                            <h1 class="text-white">ENJOY THE GAME AT YOUR COMFORT</h1>
                                            <h3 class="text-white">- Let's Play <strong>Chess</strong> our game -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="" class="btn btn-primary m-top-20 bg-orange" style="background-color: orange;border: 1px solid orange">Buy Now</a>
                                            <a href="" class="btn btn-default m-top-20">Take a Tour</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                             <h2 class="text-white">Let's Play<strong> Chess</strong></h2>
                                            <h1 class="text-white">ENJOY THE GAME AT YOUR COMFORT</h1>
                                            <h3 class="text-white">- Let's Play <strong>Chess</strong> our game -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="" class="btn btn-primary m-top-20 bg-orange" style="background-color: orange;border: 1px solid orange">Buy Now</a>
                                            <a href="" class="btn btn-default m-top-20">Take a Tour</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                </div>
                            </div>

                        </div>


                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->




            <!-- Modal -->


            <section id="business" class="business bg-grey roomy-70" style="height:400px">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
                <div class="container">
                <h2>Latest Update</h2>
                    <div class="row">
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Some text in the modal.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </section><!-- End off Business section -->
<?php include_once("shared/footer.php") ?>