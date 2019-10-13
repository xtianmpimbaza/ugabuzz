<?php
error_reporting(0);
//$fileName = $_FILES["file1"]["name"]; // The file name
//$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
//$fileType = $_FILES["file1"]["type"]; // The type of file it is
//$fileSize = $_FILES["file1"]["size"]; // File size in bytes
//$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
//if (!$fileTmpLoc) { // if file not chosen
//    echo "ERROR: Please browse for a file before clicking the upload button.";
//    exit();
//}
//if(move_uploaded_file($fileTmpLoc, "uploads/$fileName")){
//    echo "$fileName upload is complete";
//} else {
//    echo "move_uploaded_file function failed";
//}


if (!empty($_FILES['file']['name'])) {
    $temp_name = $_FILES['file']['tmp_name'];
    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);

    $location = 'uploads/';
    if (move_uploaded_file($temp_name, $location . $newfilename)) {
        $target = 'uploads/' . $newfilename;
        $new_path = 'localhost/ugabuzz/' . $target;
        echo "$newfilename upload is complete";

        // Create connection
//        $conn = new mysqli($servername, $username, $password, $dbname);
//        // Check connection
//        if ($conn->connect_error) {
//            $message = "Connection failed: " . $conn->connect_error;
//        }

        //-------------------------- save payments to database in below

//        $sql = "INSERT INTO applications (name, email, contact, paymentcode, session, upload) VALUES ('$uname', '$email', '$contact','$hash', '$session', '$new_path') ";
//        if ($conn->query($sql) === TRUE) {
//            $message = "Application successfully sent";
//            //send email
//            sendEmail($email, 'https://savannahx.io/makepayment.php?id='.$hash);
//        } else {
//            $message = "Error: " . $conn->error;
//        }

    } else $message = "Upload failed!\n";

}else{
    echo "ERROR: Please browse for a file before clicking the upload button.";
}


?>