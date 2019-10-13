<?php
session_start();
if (isset($_SESSION['ugabuzz_user'])){
    $visb_signup = 'hidden';
    $visb_signin = 'hidden';

}else{
    $visb_signin = '';
    $visb_signup = '';
    $logout_btn = 'hidden';
}
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1){
    $upload_btn = '';
}else{
    $upload_btn = 'hidden';
}
$page = 'about';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Ugabuzz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all"/>
    <!-- //bootstrap -->
    <link href="css/dashboard.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all"/>
    <script src="js/jquery-1.11.1.min.js"></script>
    <!--start-smoth-scrolling-->
    <!-- fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- //fonts -->
</head>
<body>

<!--============================================== menu-->
<?php include 'header.php'?>

<!--============================================== menu-->
<?php include 'sidebar.php'?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="show-top-grids">
        <div class="main-grids about-main-grids">
            <div class="recommended-info">

                <h3>About Ugabuzz</h3>
                <p class="history-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus efficitur,
                    eros
                    sed suscipit porttitor, diam felis tempus odio, eget sollicitudin purus sem sit amet dolor. Integer
                    euismod
                    non mauris commodo rutrum. Nulla risus felis, rhoncus vel est sed, consequat efficitur ante.
                    Phasellus mi
                    sapien, accumsan vitae lobortis vitae, laoreet dapibus metus. Pellentesque id ipsum vel nibh
                    imperdiet
                    imperdiet ac ac mauris. Suspendisse ac leo augue. Nullam venenatis massa ut pulvinar scelerisque.
                    Duis vel
                    vehicula urna. Quisque semper vitae lectus a feugiat. Sed dignissim egestas nunc, nec suscipit
                    mauris
                    interdum lobortis.
                    <span>Duis iaculis justo nec tellus bibendum rhoncus. Phasellus quis pretium leo, sed porta ligula. Mauris
							vitae ornare nisi, et dapibus elit. Vestibulum vel urna malesuada, bibendum orci sed, venenatis nunc. Morbi 
							dignissim est tortor, ac aliquam augue blandit at. Pellentesque pulvinar convallis augue, in sodales risus 
							feugiat et. Ut viverra pellentesque tellus eu consectetur. Maecenas eget massa nulla. Fusce convallis et 
							sapien a hendrerit. Etiam viverra maximus dolor, ac tempor sapien.
							</span>
                </p>
                <div class="about-grids">
                    <div class="about-bottom-grids">
                        <div class="col-sm-6 about-left">
                            <div class="about-left-grids">
                                <div class="col-md-2 about-left-img">
                                    <span class="glyphicon glyphicon-user glyphicon-facetime-video"
                                          aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 about-left-info">
                                    <a href="#">Why We Started</a>
                                    <p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor
                                        vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-sm-6 about-left">
                            <div class="about-left-grids">
                                <div class="col-md-2 about-left-img">
                                    <span class="glyphicon glyphicon-user glyphicon-book" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 about-left-info">
                                    <a href="#">About Our Site</a>
                                    <p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor
                                        vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="about-bottom-grids">
                        <div class="col-sm-6 about-left">
                            <div class="about-left-grids">
                                <div class="col-md-2 about-left-img">
                                    <span class="glyphicon glyphicon-user glyphicon-folder-open"
                                          aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 about-left-info">
                                    <a href="#">Careers</a>
                                    <p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor
                                        vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 about-right">
                            <div class="about-left-grids">
                                <div class="col-md-2 about-left-img">
                                    <span class="glyphicon glyphicon-user glyphicon-phone" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 about-left-info">
                                    <a href="#">Contact Us</a>
                                    <p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor
                                        vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer -->

    <!-- //footer -->
</div>
<div class="clearfix"></div>
<div class="drop-menu">
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
        <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
    </ul>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
</body>
</html>