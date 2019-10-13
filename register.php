<?php
session_start();
if (isset($_SESSION['ugabuzz_user'])){
    $visb_signin = 'hidden';
}else{
    $visb_signin = '';
    $logout_btn = 'hidden';
}
$visb_signup = 'hidden';
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1){
    $upload_btn = '';
}else{
    $upload_btn = 'hidden';
}
$page = "register";

require_once 'includes/functions.php';
$funs = new Functions();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $insert_data = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => hash('sha256', $_POST['password']),
        'phone' => $_POST['phone'],
        'user_type' => '0'
    );
    $uid = $funs->insertQuery('users', $insert_data);
    if ($uid > 0) {
//        response after success
        $feed = 'Successfully registered';
    }else{
        $feed = 'Error occured, Not saved';
    }
//    $feed = $name . $email . $password . $phone;
}
?>
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

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- upload -->
<div class="upload">
    <!-- container -->
    <div class="container">
        <div class="text-center"><h2>Register</h2></div>
        <div class="col-md-6 col-md-offset-3">
            <div class="signup">
                   <div class="text-center feedback"> <?php echo isset($feed)? $feed : "";?></div>
                <form method="post">
                    <input type="text" name="name" placeholder="Full name" required="required" pattern=".{4,}"
                           title="Enter a valid name" autocomplete="off"/>
                    <input type="email" class="email" name="email" placeholder="your@email.com"
                           pattern="[^ @]*@[^ @]*" title="Enter a valid email"/>
                    <input type="password" name="password" placeholder="Password" required="required" pattern=".{6,}"
                           title="Minimum 6 characters required" autocomplete="off"/>
                    <input type="text" name="phone" class="email" placeholder="Mobile Number" maxlength="10"
                           pattern="[0-9]{1}\d{9}" title="Enter a valid mobile number"/>
                    <input type="submit" name="submit" value="Save"/>
<!--                    <button type="submit" name="submit"-->
<!--                            class="btn btn-md btn-block">Register-->
<!--                    </button>-->
                </form>
            </div>
        </div>

        <!--        </div>-->
    </div>
    <!-- //container -->
</div>
<!-- //upload -->

<div class="clearfix"></div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->


<!-- Main JS file -->
<!--<script src="assets/js/scripts.js"></script>-->

</body>
</html>