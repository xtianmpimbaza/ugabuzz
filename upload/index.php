<!doctype html>
<html>
<head>
    <style>
        .upload-area{
            width: 70%;
            height: 200px;
            border: 2px solid lightgray;
            border-radius: 3px;
            margin: 0 auto;
            margin-top: 100px;
            text-align: center;
            overflow: auto;
        }

        .upload-area:hover{
            cursor: pointer;
        }

        .upload-area h1{
            text-align: center;
            font-weight: normal;
            font-family: sans-serif;
            line-height: 50px;
            color: darkslategray;
        }

        #file{
            display: none;
        }

        /* Thumbnail */
        .thumbnail{
            width: 80px;
            height: 80px;
            padding: 2px;
            border: 2px solid lightgray;
            border-radius: 3px;
            float: left;
        }

        .size{
            font-size:12px;
        }
    </style>
    <script src="jquery-3.0.0.js" type="text/javascript"></script>
    <script src="script.js" type="text/javascript"></script>
</head>
<body >

<div class="container" >
    <input type="file" name="file" id="file">

    <!-- Drag and Drop container-->
    <div class="upload-area"  id="uploadfile">
        <h1>Drag and Drop file here<br/>Or<br/>Click to select file</h1>
    </div>
</div>
<script src="../js/jquery-1.11.1.min.js"></script>
<script>
    // preventing page from redirecting

    $(function() {

        // preventing page from redirecting
        $("html").on("dragover", function(e) {
            e.preventDefault();
            e.stopPropagation();
            $("h1").text("Drag here");
        });

        $("html").on("drop", function(e) { e.preventDefault(); e.stopPropagation(); });

        // Drag enter
        $('.upload-area').on('dragenter', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $("h1").text("Drop");
        });

        // Drag over
        $('.upload-area').on('dragover', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $("h1").text("Drop");
        });

        // Drop
        $('.upload-area').on('drop', function (e) {
            e.stopPropagation();
            e.preventDefault();

            $("h1").text("Upload");

            var file = e.originalEvent.dataTransfer.files;
            var fd = new FormData();

            fd.append('file', file[0]);

            uploadData(fd);
        });

        // Open file selector on div click
        $("#uploadfile").click(function(){
            $("#file").click();
        });

        // file selected
        $("#file").change(function(){
            var fd = new FormData();

            var files = $('#file')[0].files[0];

            fd.append('file',files);

            uploadData(fd);
        });
    });

    // Sending AJAX request and upload file
    function uploadData(formdata){

        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: formdata,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response){
                addThumbnail(response);
            }
        });
    }

    // Added thumbnail
    function addThumbnail(data){
        $("#uploadfile h1").remove();
        var len = $("#uploadfile div.thumbnail").length;

        var num = Number(len);
        num = num + 1;

        var name = data.name;
        var size = convertSize(data.size);
        var src = data.src;

        // Creating an thumbnail
        $("#uploadfile").append('<div id="thumbnail_'+num+'" class="thumbnail"></div>');
        $("#thumbnail_"+num).append('<img src="'+src+'" width="100%" height="78%">');
        $("#thumbnail_"+num).append('<span class="size">'+size+'<span>');

    }

    // Bytes conversion
    function convertSize(size) {
        var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        if (size == 0) return '0 Byte';
        var i = parseInt(Math.floor(Math.log(size) / Math.log(1024)));
        return Math.round(size / Math.pow(1024, i), 2) + ' ' + sizes[i];
    }
</script>

</body>
</html>