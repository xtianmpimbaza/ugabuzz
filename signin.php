<?php
session_start();
if (isset($_SESSION['ugabuzz_user'])){
    $visb_signup = 'hidden';
}else{
    $visb_signup = '';
    $logout_btn = 'hidden';
}
$visb_signin = 'hidden';

//$visb_signup = '';
//$visb_signin = 'hidden';
$page = "register";
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1){
    $upload_btn = '';
}else{
    $upload_btn = 'hidden';
}

require_once 'includes/functions.php';
$funs = new Functions();

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $hash = hash('sha256', $pass);

    $users = $funs->login($user, $hash);
    if (!empty($users)) {
        $_SESSION['ugabuzz_user'] = $users[0]['name'];
        $_SESSION['ugabuzz_email'] = $users[0]['email'];
        $_SESSION['ugabuzz_users_id'] = $users[0]['id'];
        $_SESSION['user_type'] = $users[0]['user_type'];
        $_SESSION['ugabuzz_users_phone'] = $users[0]['phone'];

        header('Location: index.php');

    } else {
        $feed = "Wrong user or password";
    }
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
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- upload -->
<div class="upload">
    <!-- container -->
    <div class="container">
        <div class="text-center"><h2>Login</h2></div>
        <div class="col-md-6 col-md-offset-3">
            <div class="signup">
                <div class="text-center feedback"> <?php echo isset($feed)? $feed : "";?></div>
                <form method="post">
                    <input type="text" class="email" name="username" placeholder="Email""/>
                    <input type="password" placeholder="Password" name="password" required="required"/>
                    <input type="submit" name="submit" value="Sign In"/>
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