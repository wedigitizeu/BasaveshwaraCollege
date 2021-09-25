<?php include_once('./config.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./includes/head.php') ?>

    <style>
        #sendBtn {

            border-radius: 0px solid white;
            outline: none;

        }

        .warnMessage {
            color: red;
            font-size: 14px;
            padding-top: 10px;
            font-weight: bold;
        }

        #loading {
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.7;
            background-color: #fff;
            z-index: 99;
        }

        #loading-image {
            z-index: 100;
        }
    </style>
</head>

<body>
<div id="loading">
    <img id="loading-image" width="150px" src="./images/loading-buffering.gif" alt="Loading..." />
</div>
    <!-- Wrapper -->
    <div class="site-wrapper">

        <!-- Top Bar -->
        <div class="site-top-bar">
            <?php include_once('./includes/topBar.php') ?>

        </div>
        <!-- End Top Bar -->

        <!-- Header -->
        <header class="site-header" id="sticky-header">
            <?php include_once('./includes/header.php') ?>
        </header>
        <!-- End Header -->

        <!-- This section classes require for whole page sliders -->
        <div id="sequence" style="display:none;">
            <ul class="seq-canvas">
            </ul>
        </div>

        <!-- End Slider -->

        <!-- Main banner -->
        <div class="inner-page-main-banner contact-us">
            <!-- Bootstrap -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- H2 heading -->
                        <h2>Contact us</h2>
                        <!-- H1 Heading -->
                        <h1>Get in touch</h1>
                        <!-- Bredcum links -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                <ul>
                                    <li> <a href="index.html">Home » </a> </li>
                                    <li>Contact us</li>
                                </ul>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting indus orem Ipsum has been the industry's standard dummy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End bootstrap -->
        </div>
        <!-- End Main banner -->

        <!-- Dont remove this section, it's classes is nececery for swiper slider used in other sections-->
        <div id="team" class="site-team site-white-section" style="display:none;">

            <!-- Bootstrap -->
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-md-10 col-md-push-2">

                        <!-- Swiper slider -->
                        <div class="swiper-container team-section-slider" id="team-section-slider">

                            <!-- Content -->
                            <div class="swiper-wrapper">
                            </div>

                        </div>
                        <!-- End slider -->

                    </div>
                    <div class="col-xs-12 col-md-2 col-md-pull-10">

                        <!-- Thumbnail -->
                        <div class="swiper-container thumbnail" id="team-thumbnails">
                            <ul class="swiper-wrapper">

                            </ul>
                        </div>
                        <!-- End thumbnail -->

                    </div>
                </div>
            </div>
            <!-- End Bootstrap -->

        </div>
        <!-- End team -->

        <!-- contact box -->
        <div id="contact-us" class="contact-section inner-page-grey-section">

            <!-- Bootstrap -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- Site box -->
                        <div class="site-box">
                            <!-- H3 Heading -->
                            <h3>New York Office</h3>
                            <!-- 3 colom -->
                            <div class="inner">

                                <!-- adress -->
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="ttl">
                                        <!-- Icon -->
                                        <figure><i class="fa fa-map-marker"></i></figure>
                                        <!-- Location -->
                                        <h4> Location </h4>
                                    </div>
                                    <a class="adress" target="_blank" href="#">
                                        158 Corporate avenue, South pol New York, USA
                                    </a>
                                </div>

                                <!-- phone -->
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <div class="ttl">
                                        <!-- Icon -->
                                        <figure><i class="fa fa-phone"></i></figure>
                                        <!-- Location -->
                                        <h4> Call us </h4>
                                    </div>
                                    <div class="clearfix"> </div>
                                    <a class="call" href="tel:19876543213">+1 987 654 3213</a>
                                    <div class="clearfix"> </div>
                                    <a class="call" href="tel:19876543213">+1 123 456 7890</a>
                                </div>

                                <!-- email -->
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <div class="ttl mail">
                                        <!-- Icon -->
                                        <figure><i class="fa fa-envelope"></i></figure>
                                        <!-- Location -->
                                        <h4> Email us </h4>
                                    </div>
                                    <div class="clearfix"> </div>
                                    <a class="email" href="mailto:contact@corbiz.com">contact@corbiz.com</a>
                                    <div class="clearfix"> </div>
                                    <a class="email" href="mailto:info@corbiz.com">info@corbiz.com</a>
                                </div>

                            </div>

                            <!-- Form -->
                            <div class="col-xs-12 col-sm-12 col-md-6 no-right-padding">
                                <div class="inner">
                                    <div class="form-box">
                                        <!-- H3 Heading -->
                                        <h4>Drop a message us</h4>
                                        <!-- Contact form -->
                                        <?php include_once('./contact-us/contact-form.php'); ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Google map show using API -->
                            <div class="col-xs-12 col-sm-12 col-md-6 no-left-padding">
                                <div class="inner">
                                    <div class="site-google-map" id="site-map"></div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-- End Bootstrap -->

        </div>
        <!-- End contact box -->

        <!-- Footer -->
        <footer>
            <?php include_once('./includes/footer.php') ?>
        </footer>
        <!-- End Footer -->

        <!-- Preloader -->
        <div class="site-preloader">
            <img src="images/loader.gif" alt="loader">
        </div>

    </div>


    <script>
       $(document).ready(function(){
       alert("kk");
        $('#loading').hide(); // hide reloader image

            $("#name").keyup(function () {
            var name = $("#name").val();
            capitalizeFirstLetter = name.charAt(0).toUpperCase() + name.slice(1);
            $("#name").val(capitalizeFirstLetter);
        });

            $("#mobile").keyup(function() {
                
                let mobile =  $("#mobile").val();
                let mobileRg='^[0-9]*$';
                // Mobile number always starts with  >= 6  digit 
                //so do not allow mobile number, if its first number starts with 1 to 5     
                if(parseInt(mobile.charAt(0) ) <=5){

                    $("#mobile").val("");
                }
                
                if(!mobile.match(mobileRg)){

                    $("#mobile").val("");
                }
            
            });

          $("#form").on('submit',function(e){
              e.preventDefault();
        

            var isFormValid = false;

            var nameRegex = '^[A-Za-z ]{3,100}$';
            var emailReg = '^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$';
            var mobileRg='^[0-9]{10}$';

            var name = $("#name").val();
            var email = $("#email").val();
            var mobile = $("#mobile").val();
            var message = $("#message").val();
            var subject = $("#subject").val();

            $(".warnMessage").each(function(){
                $(this).html("");
            });
           
            if (name.match(nameRegex)) {
                isFormValid = true;
                $("#nameWarning").html("");
                $("#name").css('border', '1px solid #0078BC');
            }

            if (email.match(emailReg)) {
                isFormValid = true;
                $("#emailWarning").html("");
                $("#email").css('border', '1px solid #0078BC');
            }

            if (mobile.match(mobileRg)) {
                isFormValid = true;
                $("#mobileWarning").html("");
                $("#mobile").css('border', '1px solid #0078BC');
            }

            if (subject.match(nameRegex)) {
                isFormValid = true;
                $("#subjectWarning").html("");
                $("#subject").css('border', '1px solid #0078BC');
            }

            if(message != ""){
                isFormValid = true;
                $("#messageWarning").html("");
                $("#message").css('border', '1px solid #0078BC');
            }

            if (!name.match(nameRegex)) {
                isFormValid = false;
                var id = "#name";
                var paraId = "#nameWarning";
                var message = "<sup>*</sup> <?php echo NAME_ERROR_MSG; ?>";
                showErrorMessage(id,message,paraId);
                e.preventDefault();
            } 

            if (!email.match(emailReg)) {
                isFormValid = false;
                var id = "#email";
                var paraId = "#emailWarning";
                var message = "<sup>*</sup> <?php echo EMAIL_ERROR_MSG; ?>";
                showErrorMessage(id,message,paraId);
                e.preventDefault();   
            }


            if(!mobile.match(mobileRg)){
                isFormValid = false;
                var id = "#mobile";
                var paraId = "#mobileWarning";
                var message ="<sup>*</sup> <?php echo MOBILE_ERROR_MSG; ?>";
                
                showErrorMessage(id,message,paraId);
                e.preventDefault();
            }
           

            if(!subject.match(nameRegex)){
                isFormValid = false;
                var id = "#subject";
                var paraId = "#subjectWarning";
                var message = "<sup>*</sup> <?php echo SUBJECT_ERROR_MSG; ?>";
                showErrorMessage(id,message,paraId);
                e.preventDefault();
            }

            if(message == ""){
                isFormValid = false;
                var id = "#message";
                var paraId = "#messageWarning";
                var message = "<sup>*</sup> <?php echo MESSAGE_ERROR_MSG; ?>";
                showErrorMessage(id,message,paraId);
                e.preventDefault();  

            } else if(message.length < 15){
                isFormValid = false;
                var id = "#message";
                var paraId = "#messageWarning";
                var message = "<sup>*</sup> <?php echo MESSAGE_LENGTH_ERROR_MSG; ?>";
                showErrorMessage(id,message,paraId);
                e.preventDefault(); 
                
            } 
            //{name:name,email:email,mobile:mobile,subject:subject,message:message},

            if(isFormValid == true){
                $('#loading').show(); // show reloader image
                e.preventDefault();
                $.ajax({
                        type: "POST",
                        url: "process/contact-page-form.php",
                        data: $("#form").serialize(), 
                        dataType:"json",
                        cache: false,
                        success: function(data){
                           // console.log(data);
                           $('#loading').hide(); // show reloader image
                            var response = JSON.parse(JSON.stringify(data));
                            if(response.status != 200){
                                $('#loading').hide(); // show reloader image
                               
                                swal("Opps..!", response.message, "warning");
                            } else{
                                swal("Thank you for getting in touch!", "One of our colleagues will get back in touch with you soon!", "success");
                            }
                        }
                });
            }

          });
       });
   </script>


</body>


</html>