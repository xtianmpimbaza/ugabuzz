<?php

require_once('database.class.php');

class Functions
{
//    public $basepath = __FILE__;
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    //------------------------------------- return errors
    public function newPass()
    {
        $bytes = 6;
        return bin2hex(openssl_random_pseudo_bytes($bytes));
    }



    public function insertQuery($table_name, $data)
    {
        $string_keys = implode(",", array_keys($data));
        $string_values = ":" . str_replace(",", ",:", $string_keys);
        $string = "INSERT INTO " . $table_name . " (";
        $string .= $string_keys . ") VALUES (";
        $string .= $string_values . ")";

        $this->db->query($string);
        foreach ($data as $row => $value) {
            $this->db->bind($row, $value);
        }
        $this->db->execute();
        if ($this->db->rowCount() == 1) {
            $uid = $this->db->lastInsertId();
        } else {
            $uid = 0;
        }
        return $uid;

    }

    public function customSelectQuery($table_name, $data, $condition)
    {
        $string_keys = implode(",", array_keys($data));

        $string_values = ":" . str_replace(",", ",:", $string_keys);
        $string = "SELECT " . $string_keys . " FROM " . $table_name . " ";
        $binds = "";
        if ($condition) {
            $count = 0;
            foreach ($data as $row => $value) {

                if ($value != "") {
                    $bind_val = ":" . $row;
                    if ($count == 0) {
                        $string .= " WHERE " . $row . "=" . $bind_val;
                        $count++;
                    } else {
                        $string .= " AND " . $row . "=" . $bind_val;

                    }
                }
            }
            $string .= " " . $condition;
            $this->db->query($string);
            $count = 0;
            foreach ($data as $row => $value) {
                if ($value != "") {
                    $count++;
                    $bind_val = ":" . $row;
                    $this->db->bind($bind_val, $value);
                    $binds .= $bind_val . "," . $value . "<br>";
                }
            }

        } else {
            $string .= " " . $condition;
            $this->db->query($string);
        }

        $rows = $this->db->resultset();
        $rowCount = $this->db->rowCount();
        if ($rowCount > 0) {
            return $rows;
        } else {
            return 0;
        }

    }

    public function customUpdateQuery($table_name, $data, $condition)
    {
        $string_keys = implode(",", array_keys($data));
        $string_values = ":" . str_replace(",", ",:", $string_keys);
        $string = "UPDATE " . $table_name . " SET ";
        //return $string;
        $count = 0;
        foreach ($data as $row => $value) {
            if ($value !== "") {
                //	echo $count;
                $bind_val = ":" . $row;
                if ($count == 0) {
                    $string .= $row . "=" . $bind_val;
                    $count++;
                } else {
                    $string .= "," . $row . "=" . $bind_val;

                }
            }
        }
		
        $string .= " " . $condition;
        $this->db->query($string);
        foreach ($data as $row => $value) {
            if ($value != "") {
                $bind_val = ":" . $row;
                $this->db->bind($bind_val, $value);
            }
        }

        //return $string;
        $this->db->execute();
        if ($this->db->rowCount() == 1) {
            $uid = $this->db->rowCount();
        } else {
            $uid = 0;
        }
        return $uid;
    }

    public function selectUsers()
    {
        $user_fields = array("users.id" => "", "users.name" => "", "users.email" => "", "users.password" => "", "users.address" => "", "users.tel" => "", "users.type" => "", "users.time" => "", "users.website" => "", "users.bank_ac_number" => "", "users.bank_ac_name" => "", "users.bank_name" => "", "users.bank_branch" => "", "users.SWIFT" => "", "users.bank_verify" => "", "users.mm_number" => "", "users.c_rate" => "", "users.otp" => "", "users.admin" => "");
        return $this->customSelectQuery('users', $user_fields, "");
    }

    public function customSelect($sql)
    {
        return $this->db->tableSelect($sql);
    }


    public function insert($sql)
    {
        return $this->db->insert($sql);
    }

    public
    function createAddress($account)
    {
        $rate = $this->bitcoin->getnewaddress($account);
        return $rate;
    }

    public function getEditInfo($user_id)
    {
        $user_fields = array("*" => "");
        $details = $this->customSelectQuery('users', $user_fields, "WHERE users_id=" . $user_id . "  LIMIT 1");
        return $details;

    }

    public
    function getAccount($users_id)
    {
        $sql = array("*" => "");
        $transx = $this->customSelectQuery('users', $sql, "where id = " . $users_id);
        return $transx;
    }


    public
    function login($email, $pass)
    {
        $sl = array("*" => "", "email" => $email, "password" => $pass);
        return $this->customSelectQuery('users', $sl, "LIMIT 1");
    }

    public
    function getUser($email)
    {
        $sl = array("*" => "", "email" => $email);
        return $this->customSelectQuery('users', $sl, "LIMIT 1");
    }

    public
    function restPassword($pass, $id)
    {

        $sql = array("password" => hash('sha256', $pass));
        $update = $this->customUpdateQuery('users', $sql, "WHERE users.id=" . $id);
        return $update;
    }

    public function getRegAdmins($users_id)
    {
        $sl = array("users.*" => "");
        return $this->customSelectQuery('users', $sl, "WHERE users.type='admin' AND admin=" . $users_id . "");
    }

    public function insertIntoUsers($table, $insert_data)
    {
        $getClient = $this->insertQuery($table, $insert_data);
        return $getClient;
    }

    public function update($id, $name, $email, $address, $tel, $client)
    {
        $res = "UPDATE `users` SET `name` = '$name', `email` = '$email', `address` = '$address', `tel` = '$tel', `type` = '$client' WHERE id = $id";
        $adminUpdate = $this->db->updateWallets($res);
        return $adminUpdate;
    }


}