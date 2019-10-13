<?php
require_once 'functions.php';
$funs = new Functions();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $insert_data = array(
        'name' =>  $_POST['name'],
        'email' => $_POST['email'],
        'password' => hash('sha256', $pass),
        'phone' => $_POST['phone']
    );

    $uid = $funs->insertQuery('users', $insert_data);
    if ($uid > 0) {

        $wallet = $funs->createOolaWallet($uid);

        $wall_array = array('currency_id' => 5, 'name' => $insert_data['name'] . $uid, 'users_id' => $uid, 'deposit_address' => $wallet, 'balance' => 0, 'successurl' => '', 'failurl' => '', 'api_key' => sha1($_POST['name']), 'email' => '', 'tel' => '');
        $update_wallets = $funs->insertQuery('wallets', $wall_array);
        if ($update_wallets) {
            $username = $email;
            //$password = $_POST['password'];
            $subject = 'Welcome to Binusu Merchant Services';

            $error = "Registration successful, check your email for more information";
        } else {
            return 'failed to create wallet';
        }

    }
}
?>