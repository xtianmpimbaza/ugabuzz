<?php $page = 'index';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>UgaBuzz | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Uganda, Uganda music, Celebrity shows Uganda, Youtube shows, ugabuzz celebrities, Media website, press conference, Press release, celebrity talk live"/>
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
    <div class="main-grids">
        <div class="top-grids">
            <div class="recommended-info">
                <h3>Latest Videos</h3>
            </div>

            <div class="col-md-4 resent-grid recommended-grid slider-top-grids">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.php"><img src="images/t1.jpg" alt=""/></a>
                    <div class="time">
                        <p>3:04</p>
                    </div>
                    <div class="clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info">
                    <h3><a href="single.php" class="title title-info">Autosoft lauch press this weekend
                            </a></h3>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">Bayan</a></p></li>
                        <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 resent-grid recommended-grid slider-top-grids">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.php"><img src="images/t2.jpg" alt=""/></a>
                    <div class="time">
                        <p>7:23</p>
                    </div>
                    <div class="clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info">
                    <h3><a href="single.php" class="title title-info">Autosoft lauch press this weekend
                            </a></h3>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">Bayan</a></p></li>
                        <li class="right-list"><p class="views views-info">4,200 views</p></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 resent-grid recommended-grid slider-top-grids">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.php"><img src="images/t3.jpg" alt=""/></a>
                    <div class="time">
                        <p>4:04</p>
                    </div>
                    <div class="clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info">
                    <h3><a href="single.php" class="title title-info">Autosoft lauch press this weekend
                            </a></h3>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">Bayan</a></p></li>
                        <li class="right-list"><p class="views views-info">71,174 views</p></li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>

        <div class="recommended">
            <div class="recommended-grids">
                <div class="recommended-info">
                    <h3>Latest Gossip</h3>
                </div>
                <script src="js/responsiveslides.min.js"></script>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
                        $("#slider3").responsiveSlides({
                            auto: true,
                            pager: false,
                            nav: true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });

                    });
                </script>
                <div id="top" class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <div class="animated-grids">
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>7:34</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">Autosoft lauch press this weekend
                                                </a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c1.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>6:23</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title"> varius 
                                                nullam sit amet </a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">14,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c2.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>2:45</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">Autosoft lauch press this weekend
                                                </a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c3.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>4:34</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">  nullam
                                                varius sit sed </a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="animated-grids">
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c1.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>4:42</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">Rema namakulas interview about Kenzo</a>
                                        </h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c2.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>6:14</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">  nullam
                                                varius sit sed </a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c3.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>2:34</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">Rema namakulas interview about Kenzo</a>
                                        </h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>5:12</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">  nullam
                                                varius sit sed </a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">1,14,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="animated-grids">
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c2.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>4:42</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">Rema namakulas interview about Kenzo</a>
                                        </h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c3.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>6:14</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">  nullam
                                                varius sit sed </a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>2:34</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">Rema namakulas interview about Kenzo</a>
                                        </h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c3.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>5:12</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">  nullam
                                                varius sit sed </a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">1,14,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="animated-grids">
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c3.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>4:42</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">Rema namakulas interview about Kenzo</a>
                                        </h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>6:14</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">  nullam
                                                varius sit sed </a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c1.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>2:34</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">Rema namakulas interview about Kenzo</a>
                                        </h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">2,114,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="single.php"><img src="images/c2.jpg" alt=""/></a>
                                        <div class="time small-time slider-time">
                                            <p>5:12</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                        <h5><a href="single.php" class="title">  nullam
                                                varius sit sed </a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">Bayan</a>
                                                </p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">1,14,200 views</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="recommended">
            <div class="recommended-grids">
                <div class="recommended-info">
                    <h3>Recommended</h3>
                </div>
                <div class="col-md-3 resent-grid recommended-grid">
                    <div class="resent-grid-img recommended-grid-img">
                        <a href="single.php"><img src="images/r1.jpg" alt=""/></a>
                        <div class="time small-time">
                            <p>2:34</p>
                        </div>
                        <div class="clck small-clck">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="resent-grid-info recommended-grid-info video-info-grid">
                        <h5><a href="single.php" class="title">Varius sit sed   nullam nullam interdum
                                metus</a></h5>
                        <ul>
                            <li><p class="author author-info"><a href="#" class="author">Bayan</a></p></li>
                            <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 resent-grid recommended-grid">
                    <div class="resent-grid-img recommended-grid-img">
                        <a href="single.php"><img src="images/r2.jpg" alt=""/></a>
                        <div class="time small-time">
                            <p>3:02</p>
                        </div>
                        <div class="clck small-clck">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="resent-grid-info recommended-grid-info video-info-grid">
                        <h5><a href="single.php" class="title">  Autosoft lauch press this weekend
                                </a></h5>
                        <ul>
                            <li><p class="author author-info"><a href="#" class="author">Bayan</a></p></li>
                            <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 resent-grid recommended-grid">
                    <div class="resent-grid-img recommended-grid-img">
                        <a href="single.php"><img src="images/r3.jpg" alt=""/></a>
                        <div class="time small-time">
                            <p>1:34</p>
                        </div>
                        <div class="clck small-clck">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="resent-grid-info recommended-grid-info video-info-grid">
                        <h5><a href="single.php" class="title">Autosoft lauch press this weekend nullam interdum
                                metus</a></h5>
                        <ul>
                            <li><p class="author author-info"><a href="#" class="author">Bayan</a></p></li>
                            <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 resent-grid recommended-grid">
                    <div class="resent-grid-img recommended-grid-img">
                        <a href="single.php"><img src="images/r4.jpg" alt=""/></a>
                        <div class="time small-time">
                            <p>2:09</p>
                        </div>
                        <div class="clck small-clck">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="resent-grid-info recommended-grid-info video-info-grid">
                        <h5><a href="single.php" class="title">Nullam interdum  nullam metus varius sit sed
                                </a></h5>
                        <ul>
                            <li><p class="author author-info"><a href="#" class="author">Bayan</a></p></li>
                            <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="recommended-grids">
                <div class="col-md-3 resent-grid recommended-grid">
                    <div class="resent-grid-img recommended-grid-img">
                        <a href="single.php"><img src="images/r4.jpg" alt=""/></a>
                        <div class="time small-time">
                            <p>6:34</p>
                        </div>
                        <div class="clck small-clck">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="resent-grid-info recommended-grid-info video-info-grid">
                        <h5><a href="single.php" class="title">Autosoft lauch press this weekend nullam interdum
                                metus</a></h5>
                        <ul>
                            <li><p class="author author-info"><a href="#" class="author">Bayan</a></p></li>
                            <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 resent-grid recommended-grid">
                    <div class="resent-grid-img recommended-grid-img">
                        <a href="single.php"><img src="images/r5.jpg" alt=""/></a>
                        <div class="time small-time">
                            <p>7:34</p>
                        </div>
                        <div class="clck small-clck">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="resent-grid-info recommended-grid-info video-info-grid">
                        <h5><a href="single.php" class="title">  Autosoft lauch press this weekend
                                </a></h5>
                        <ul>
                            <li><p class="author author-info"><a href="#" class="author">Bayan</a></p></li>
                            <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 resent-grid recommended-grid">
                    <div class="resent-grid-img recommended-grid-img">
                        <a href="single.php"><img src="images/r6.jpg" alt=""/></a>
                        <div class="time small-time">
                            <p>6:09</p>
                        </div>
                        <div class="clck small-clck">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="resent-grid-info recommended-grid-info video-info-grid">
                        <h5><a href="single.php" class="title">Autosoft lauch press this weekend nullam interdum
                                metus</a></h5>
                        <ul>
                            <li><p class="author author-info"><a href="#" class="author">Bayan</a></p></li>
                            <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 resent-grid recommended-grid">
                    <div class="resent-grid-img recommended-grid-img">
                        <a href="single.php"><img src="images/r1.jpg" alt=""/></a>
                        <div class="time small-time">
                            <p>9:04</p>
                        </div>
                        <div class="clck small-clck">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="resent-grid-info recommended-grid-info video-info-grid">
                        <h5><a href="single.php" class="title">  Autosoft lauch press this weekend
                                </a></h5>
                        <ul>
                            <li><p class="author author-info"><a href="#" class="author">Bayan</a></p></li>
                            <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- footer -->
    <!--    <div class="footer">-->
    <!--        <div class="footer-grids">-->
    <!--            <div class="footer-top">-->
    <!--                <div class="footer-top-nav">-->
    <!--                    <ul>-->
    <!--                        <li><a href="about.php">About</a></li>-->
    <!--                        <li><a href="press.php">Press</a></li>-->
    <!--                        <li><a href="copyright.php">Copyright</a></li>-->
    <!--                        <li><a href="creators.php">Creators</a></li>-->
    <!--                        <li><a href="#">Advertise</a></li>-->
    <!--                        <li><a href="developers.php">Developers</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--                <div class="footer-bottom-nav">-->
    <!--                    <ul>-->
    <!--                        <li><a href="terms.php">Terms</a></li>-->
    <!--                        <li><a href="privacy.php">Privacy</a></li>-->
    <!--                        <li><a href="#small-dialog4" class="play-icon popup-with-zoom-anim">Send feedback</a></li>-->
    <!--                        <li><a href="privacy.php">Policy & Safety </a></li>-->
    <!--                        <li><a href="try.php">Try something new!</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!---->
    <!--        </div>-->
    <!--    </div>-->
    <!-- //footer -->
</div>
<div class="clearfix"></div>
<!--<div class="drop-menu">-->
<!--    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">-->
<!--        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>-->
<!--        <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>-->
<!--        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>-->
<!--    </ul>-->
<!--</div>-->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
</body>
</html>