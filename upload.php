<?php
session_start();
if (isset($_SESSION['ugabuzz_user'])){
    $visb_signup = 'hidden';
    $visb_signin = 'hidden';

}else{
    header('Location: index.php');
}
    $upload_btn = 'hidden';

$page = '';


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
<!-- upload -->
<div class="upload">
    <!-- container -->
    <div class="container">
        <div class="text-center"><h2>Save a video</h2></div>
        <div class="col-md-6 col-md-offset-3">
            <form id="upload_form">
                <div class="form-group">
                    <lable> Select image</lable>
                    <div class="">
                        <input type="file" name="file" id="file" class="form-control"><br>
                    </div>
                </div>
                <div class="form-group">
                    <lable> Youtube video link</lable>
                    <div class=""><input type="text" class="form-control" id="video" name="video"
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
                    <input type="submit" name="submit" class="btn btn-sm btn-warning" value="Save">
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

    $("form#upload_form").on('submit', (function (e) {

        e.preventDefault();

        // var file = _("file1").files[0];
        // alert(file.name+" | "+file.size+" | "+file.type);
        var formdata = new FormData(this);
        // formdata.append("file1", file);

        var ajax = new XMLHttpRequest();
        ajax.upload.addEventListener("progress", progressHandler, false);
        ajax.addEventListener("load", completeHandler, false);
        ajax.addEventListener("error", errorHandler, false);
        ajax.addEventListener("abort", abortHandler, false);
        ajax.open("POST", "file_upload_parser.php");
        ajax.send(formdata);


            // $.ajax({
            //     type: "POST",
            //     url: 'application.php',
            //     enctype: 'multipart/form-data',
            //     data: new FormData(this),
            //     cache: false,
            //     beforeSend: function () {
            //         $('#loading').modal({backdrop: 'static', keyboard: false});
            //     },
            //     complete: function () {
            //         $('#loading').modal('hide');
            //     },
            //     contentType: false,
            //     processData: false,
            //     success: function (data) {
            //         console.log(data);
            //         $("form#regform")[0].reset();
            //         $('.feedback').html(data);
            //     }
            // });

    }));


    // function uploadFile() {
    //     var file = _("file1").files[0];
    //
    //     // alert(file.name+" | "+file.size+" | "+file.type);
    //     var formdata = new FormData();
    //     formdata.append("file1", file);
    //
    //     var ajax = new XMLHttpRequest();
    //     ajax.upload.addEventListener("progress", progressHandler, false);
    //     ajax.addEventListener("load", completeHandler, false);
    //     ajax.addEventListener("error", errorHandler, false);
    //     ajax.addEventListener("abort", abortHandler, false);
    //     ajax.open("POST", "file_upload_parser.php");
    //     ajax.send(formdata);
    // }

    function progressHandler(event) {
        _("loaded_n_total").innerHTML = "File size loaded is " + event.loaded + " bytes of " + event.total;
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