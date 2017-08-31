
<?php include_once("shared/header.php") ?>
<?php
require_once("../controller/registration.php");
?>

<!-- Preloader -->
<!-- <div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div> -->
<!--End off Preloader -->


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
                    <li class="search"><a href="#"><i class="fa fa-search" style="color:white;"></i></a></li>
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
                    <!--  <li data-toggle="modal" data-target="#loginModal"><a href="#login">Login</a></li>-->
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
                        <div class="hello_slid" style="">
                            <div class="slid_item slide-one">
                                <!-- <img src="../assets/images/home-bg.jpg" alt="Bootstrap Touch Slider" class="slide-image img-responsive"/> -->
                                <!-- <div class="home_text ">
                                     <h2 class="text-white">Let's Play<strong> Chess</strong></h2>
                                     <h1 class="text-white">ENJOY THE GAME AT YOUR COMFORT</h1>
                                     <h3 class="text-white">- Let's Play <strong>Chess</strong> our game -</h3>
                                 </div>-->

                                <div class="home_btns m-top-40">
                                    <a href="" data-toggle="modal" data-target="#regModal" class="btn btn-primary btn-lg bg-orange"style="margin-top:210px; background-color: orange;border: 1px solid orange" >Register for Competition</a>

                                </div>
                            </div><!-- End off slid item -->
                            <div class="slid_item">
                                <div class="home_text ">
                                    <h2 class="text-white">Let's Play<strong> Chess</strong></h2>
                                    <h1 class="text-white">ENJOY THE GAME AT YOUR COMFORT</h1>
                                    <h3 class="text-white">- Let's Play <strong>Chess</strong> our game -</h3>
                                </div>

                                <div class="home_btns m-top-40">
                                    <a href="" class="btn btn-primary m-top-20 bg-orange" style="background-color: orange;border: 1px solid orange">Watch Now</a>
                                    <a href="" class="btn btn-default m-top-20">Take a Tour</a>
                                </div>
                            </div>
                            <!-- End off slid item -->
                            <div class="slid_item">
                                <div class="home_text ">
                                    <h2 class="text-white">Let's Play<strong> Chess</strong></h2>
                                    <h1 class="text-white">ENJOY THE GAME AT YOUR COMFORT</h1>
                                    <h3 class="text-white">- Let's Play <strong>Chess</strong> our game -</h3>
                                </div>

                                <div class="home_btns m-top-40">
                                    <a href="" class="btn btn-default m-top-20">Take a Tour</a>
                                </div>
                            </div>
                            <!-- End off slid item -->
                        </div>
                    </div>

                </div>


            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Home Sections-->

    <!--Login Modal-->
    <div id="loginModal" class="close-modal modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-modal close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                        </div>
                        <div class="checkbox">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Remember Me</span>
                            </label>
                        </div>
                        <p style="text-align:center">Create Account<a href="#registration"  data-toggle="modal" data-target="#regModal"> Register</a></p>
                        <!--			    <button type="submit" class="btn btn-default" style="float:right; background:orange; border:1px solid orange; color:white;">Submit</button>-->

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" style="float:right; background:orange; border:1px solid orange; color:white;">Submit</button>
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal" style="background:orange; border:1px solid orange; color:white;">Close</button>-->
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--./ Login Modal-->

    <!--Registration Modal--->


    <div id="regModal" class="close-modal modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-modal close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registration</h4>
                </div>
                <form method="post" id="registration-form">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="category" >Category</label>
                        <select class="" vlaue="<?php echo escape(Input::get('category')); ?>" name="category", id="category">
                            <option selected disabled="disabled"> - Select Category - </option>
                            <option value="Master">Master</option>
                            <option value="Open">Open</option>
                            <option value="Amateur">Amateur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input class="form-control" type="text" name="name" value="<?php echo escape(Input::get('name')); ?>" id="name">
                    </div>

                    <div class="form-group">
                        <label for="username">Player Name</label>
                        <input class="form-control" type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" name="phone" id="phone" value="<?php escape(Input::get('phone')); ?>">
                    </div>


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="insert_email" id="insert_email" value="<?php escape(Input::get('insert_email')); ?>">
                    </div>


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password" value="<?php  escape(Input::get('password')); ?>">
                    </div>

                    <div class="form-group rating">
                        <p  id="out" class="text-warning"></p>
                        <label for="elo_rating">Elo_Rating</label>
                        <input class="form-control" name="elo_rating" id="elo_rating" value="<?php escape(Input::get('elo_rating')); ?>">
                    </div>

                    <input type="hidden" name="token" id="token" value="<?php echo Token::generate(); ?>">
                    <!--<input type="submit" value="Register">-->

                    <!-- <p style="text-align:center">Create Account<a href="#"  data-toggle="modal2" data-target="#regModal"> Register</a></p>-->
                    <!--  <button type="submit" class="btn btn-default" style="background:orange; border:1px solid orange; color:white; float:right;">Submit</button>-->

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-default btn-lg" value="Register" style=" background:orange; border:1px solid orange; color:white;"/>
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal" style="background:orange; border:1px solid orange; color:white;">Close</button>-->
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--./ Registration Modal-->

    <section id="business" class="business bg-grey roomy-70">
        <div class="container">
            <h2>Latest Update</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="update update1">
                        <img class="logo img-responsive" alt="" src="../assets/img/holding_a_phone-wallpaper-3554x1999.jpg">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="update update2">
                        <img class="logo img-responsive" alt="" src="../assets/img/house_of_lies_tv_series-2880x1800.jpg">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="update update3">
                        <img class="logo img-responsive" alt="" src="../assets/img/imagine-wallpaper-1920x1080.jpg">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="update update1">
                        <img class="logo img-responsive" alt="" src="../assets/img/makeup_2.jpeg">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="update update2">
                        <img class="logo img-responsive" alt="" src="../assets/img/makeup_1.jpeg">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="update update3">
                        <img class="logo img-responsive" alt="" src="../assets/img/makeup_1.jpeg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   </section>&lt;!&ndash; End off Business section &ndash;&gt;
   -->
    <?php include_once("shared/footer.php") ?>
    <script type="text/javascript" src="../assets/js/jquery-1.11.2.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#registration-form")[0].reset();

//               var Category = document.getElementById('category').value
            $("#category").change(function(){
                var selected = document.getElementById('category').value;
                var rate = document.getElementById('elo_rating').value;
                // alert(selected);
                if(selected == "Master"){
                    $('.rating').css("display","block");
                    $('#out').html('Master rating should be between 2000 - 2800');
                }
                if(selected == "Open"){
                    $('.rating').css("display","block");
                    $('#out').html('Open rating should be between 0 - 1999');
                }
                if(selected == "Amateur"){
                    $('.rating').css("display","none");
                }
            });
        });

        $("#registration-form").on('submit', function(event){
            event.preventDefault();

            var fullname = $("#name").val()
            var playername = $("#username").val()
            var email = $("#insert_email").val()
            var password = $("#password").val()
            var category = $("#category").val()
            if(fullname != " " && playername != " " && email != " " && password != " " && category != " ") {
                $.ajax({
                    url: '../controller/registration.php',
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data.toString() === 'success') {
                            swal({
                                    title: "Proceeding to payments",
                                    text: "Please wait",
                                    type: "info",
                                    showCancelButton: false,
                                    closeOnConfirm: false,
                                    showLoaderOnConfirm: true,
                                },
                                function(){
                                    setTimeout(function(){
                                        swal("Requested completed "+email);
                                        payWithPaystack(email);
                                    }, 4000);
                                });
                            $('#registration-form')[0].reset();
                        }
                        else {
                            swal("Check empty fields", "some fields are empty", "error")
                        }
                    },
                    error: function (data) {
                        alert(data);
                    }
                })
            }
            else {
                swal("Check for empty fields", "You clicked the button!", "error")
            }
        })
    </script>

