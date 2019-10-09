<!DOCTYPE HTML>
<html>
<head>
    <title>Ugabuzz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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

    <link id="dropzone-css" href="assets/css/dropzone.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><h1><img src="images/logo.png" alt=""/></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="top-search">
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                    <input type="submit" value=" ">
                </form>
            </div>
            <div class="header-top-right">
                <div class="file">
                    <a href="upload.php">Upload</a>
                </div>
                <div class="signin">
                    <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">Sign Up</a>
                    <!-- pop-up-box -->
                    <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
                    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
                    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!--//pop-up-box -->
                    <div id="small-dialog2" class="mfp-hide">
                        <h3>Create Account</h3>
                        <div class="social-sits">
                            <div class="facebook-button">
                                <a href="#">Connect with Facebook</a>
                            </div>
                            <div class="chrome-button">
                                <a href="#">Connect with Google</a>
                            </div>
                            <div class="button-bottom">
                                <p>Already have an account? <a href="#small-dialog"
                                                               class="play-icon popup-with-zoom-anim">Login</a></p>
                            </div>
                        </div>
                        <div class="signup">
                            <form>
                                <input type="text" class="email" placeholder="Mobile Number" maxlength="10"
                                       pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number"/>
                            </form>

                            <div class="continue-button">
                                <a href="#small-dialog3"
                                   class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">CONTINUE</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="small-dialog3" class="mfp-hide">
                        <h3>Create Account</h3>
                        <div class="social-sits">
                            <div class="facebook-button">
                                <a href="#">Connect with Facebook</a>
                            </div>
                            <div class="chrome-button">
                                <a href="#">Connect with Google</a>
                            </div>
                            <div class="button-bottom">
                                <p>Already have an account? <a href="#small-dialog"
                                                               class="play-icon popup-with-zoom-anim">Login</a></p>
                            </div>
                        </div>
                        <div class="signup">
                            <form>
                                <input type="text" class="email" placeholder="Email" required="required"
                                       pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
                                <input type="password" placeholder="Password" required="required" pattern=".{6,}"
                                       title="Minimum 6 characters required" autocomplete="off"/>
                                <input type="text" class="email" placeholder="Mobile Number" maxlength="10"
                                       pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number"/>
                                <input type="submit" value="Sign Up"/>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="small-dialog7" class="mfp-hide">
                        <h3>Create Account</h3>
                        <div class="social-sits">
                            <div class="facebook-button">
                                <a href="#">Connect with Facebook</a>
                            </div>
                            <div class="chrome-button">
                                <a href="#">Connect with Google</a>
                            </div>
                            <div class="button-bottom">
                                <p>Already have an account? <a href="#small-dialog"
                                                               class="play-icon popup-with-zoom-anim">Login</a></p>
                            </div>
                        </div>
                        <div class="signup">
                            <form action="upload.php">
                                <input type="text" class="email" placeholder="Email" required="required"
                                       pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
                                <input type="password" placeholder="Password" required="required" pattern=".{6,}"
                                       title="Minimum 6 characters required" autocomplete="off"/>
                                <input type="submit" value="Sign In"/>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="small-dialog4" class="mfp-hide">
                        <h3>Feedback</h3>
                        <div class="feedback-grids">
                            <div class="feedback-grid">
                                <p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam
                                    mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
                            </div>
                            <div class="button-bottom">
                                <p><a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign in</a> to get
                                    started.</p>
                            </div>
                        </div>
                    </div>
                    <div id="small-dialog5" class="mfp-hide">
                        <h3>Help</h3>
                        <div class="help-grid">
                            <p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam
                                mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
                        </div>
                        <div class="help-grids">
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog4" class="play-icon popup-with-zoom-anim">Feedback</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Lorem ipsum dolor sit
                                        amet</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Nunc vitae rutrum
                                        enim</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris at volutpat
                                        leo</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris vehicula
                                        rutrum velit</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Aliquam eget ante non
                                        orci fac</a></p>
                            </div>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function () {
                            $('.popup-with-zoom-anim').magnificPopup({
                                type: 'inline',
                                fixedContentPos: false,
                                fixedBgPos: true,
                                overflowY: 'auto',
                                closeBtnInside: true,
                                preloader: false,
                                midClick: true,
                                removalDelay: 300,
                                mainClass: 'my-mfp-zoom-in'
                            });

                        });
                    </script>
                </div>
                <div class="signin">
                    <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a>
                    <div id="small-dialog" class="mfp-hide">
                        <h3>Login</h3>
                        <div class="social-sits">
                            <div class="facebook-button">
                                <a href="#">Connect with Facebook</a>
                            </div>
                            <div class="chrome-button">
                                <a href="#">Connect with Google</a>
                            </div>
                            <div class="button-bottom">
                                <p>New account? <a href="#small-dialog2"
                                                   class="play-icon popup-with-zoom-anim">Signup</a></p>
                            </div>
                        </div>
                        <div class="signup">
                            <form>
                                <input type="text" class="email" placeholder="Enter email / mobile" required="required"
                                       pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?"/>
                                <input type="password" placeholder="Password" required="required" pattern=".{6,}"
                                       title="Minimum 6 characters required" autocomplete="off"/>
                                <input type="submit" value="LOGIN"/>
                            </form>
                            <div class="forgot">
                                <a href="#">Forgot password ?</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--        <div class="clearfix"></div>-->
    </div>
</nav>
<!-- upload -->
<!-- upload -->
<div class="upload">
    <!-- container -->
    <div class="container">
        <div class="text-center"><h2>Save a video</h2></div>
        <div class="col-md-6 col-md-offset-3">
            <form id="upload_form" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <lable> Select image</lable>
                    <div class="">
                        <input type="file" name="file1" id="file1" class="form-control"><br>
                    </div>
                </div>
                <div class="form-group">
                    <lable> Youtube video link</lable>
                    <div class=""><input type="text" class="form-control" id="title" name="title"
                                         placeholder="Title"></div>
                </div>
                <div class="form-group">
                    <lable> Title</lable>
                    <div class=""><input type="text" class="form-control" id="title" name="title"
                                         placeholder="Title"></div>
                </div>
                <div class="form-group">
                    <lable> Category</lable>
                    <div class="">
                        <select class="form-control" name="category" id="category">
                            <option value="music">Music</option>
                            <option value="gossip">Gossip</option>
                            <option value="sports">Sports</option>
                            <option value="fashion">Fashion</option>
                            <option value="tech">Tech</option>
                            <option value="travel">Travel</option>
                            <option value="culture">Culture</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <lable> Descroption</lable>
                    <div class=""><input type="text" class="form-control" id="description" name="description"
                                         placeholder="Description"></div>
                </div>

                <div class="form-group">
                    <input type="save" class="btn btn-sm btn-warning" value="Upload File" onclick="uploadFile()">
                </div>

            </form>
            <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
            <h3 id="status"></h3>
            <p id="loaded_n_total"></p>
        </div>

        <!--        </div>-->
    </div>
    <!-- //container -->
</div>
<!-- //upload -->

<!-- footer -->
<!--<div class="footer">-->
<!--    <div class="container">-->
<!--        <div class="footer-top">-->
<!--            <div class="footer-top-nav">-->
<!--                <ul>-->
<!--                    <li><a href="index.php">Home</a></li>-->
<!--                    <li><a href="about.php">About</a></li>-->
<!--                    <li><a href="shows.php">Shows</a></li>-->
<!--                    <li><a href="music.php">Music</a></li>-->
<!--                    <li><a href="contact.php">Contact</a></li>-->
<!--                    <li><a href="faqs.php">FAQs</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- //footer -->
<div class="clearfix"></div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->

<!-- Dropzone JS -->
<script src="assets/js/dropzone.min.js"></script>

<!-- Main JS file -->
<!--<script src="assets/js/scripts.js"></script>-->

<script>
    /* Script written by Adam Khoury @ DevelopPHP.com */
    /* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
    function _(el) {
        return document.getElementById(el);
    }

    function uploadFile() {
        var file = _("file1").files[0];
        // alert(file.name+" | "+file.size+" | "+file.type);
        var formdata = new FormData();
        formdata.append("file1", file);
        var ajax = new XMLHttpRequest();
        ajax.upload.addEventListener("progress", progressHandler, false);
        ajax.addEventListener("load", completeHandler, false);
        ajax.addEventListener("error", errorHandler, false);
        ajax.addEventListener("abort", abortHandler, false);
        ajax.open("POST", "file_upload_parser.php");
        ajax.send(formdata);
    }

    function progressHandler(event) {
        _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
        var percent = (event.loaded / event.total) * 100;
        _("progressBar").value = Math.round(percent);
        _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
    }

    function completeHandler(event) {
        _("status").innerHTML = event.target.responseText;
        _("progressBar").value = 0;
    }

    function errorHandler(event) {
        _("status").innerHTML = "Upload Failed";
    }

    function abortHandler(event) {
        _("status").innerHTML = "Upload Aborted";
    }
</script>
</body>
</html>