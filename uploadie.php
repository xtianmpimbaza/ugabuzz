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
<div class="cls-content">
    <div class="cls-content-sm panel">
        <div class="panel-body">
            <div class="account-log">

                <p style="font-family: font-size: 18px;">Register for the SavannahX blockchain training program</p>
            </div>
            <did class="feedback" style="margin-bottom: 1em !important; color: red;">

            </did>
            <form class="login-forms" id="regform">
                <div class="form-group">
                    <div class=""><input type="text" class="form-control" id="uname" name="uname"
                                         placeholder="Name"></div>
                    <div class="error" id="error_name"></div>
                </div>


                <div class="form-group">
                    <div>
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="Email">
                    </div>
                    <div class="error" id="error_email"></div>
                </div>

                <div class="form-group">
                    <div class=""><input type="tel" id="contact" class="form-control" name="contact"
                                         placeholder="Phone number: 256xxxxxxxxx" minlength="12" maxlength="14"
                                         autofocus></div>
                    <div class="error" id="error_contact"></div>
                </div>

                <div class="form-group" style="text-align: left;">
                    <div>
                        <label>Select Group</label>
                        <select class="form-control" name="session">
                            <option value="">--Date--</option>

                        </select>
                    </div>
                </div>
                <div id="seat_avail">
                    <!--                      <span>85</span> seats of 100 are available-->
                </div>

                <div class="form-group" style="text-align: left;">
                    <label class="radio-inline">
                        <input type="radio" name="status" id="business" checked value="business">I am not a
                        developer
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="status" id="developer" value="developer">I am a developer
                    </label>
                </div>


                <div class="form-group hidden" id="upload">
                    <lable style="float: left;">Upload your CV</lable>
                    <br>
                    <input type="file" class="form-control" name="file" id="file">
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Register</button>
            </form>
        </div>
        <div>For details on the program, <a href="../" class="" style="color: #0ab1fc; font-size: 14px;">click
                here</a></div>
    </div>
</div>


<div class="clearfix"></div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
</body>
</html>