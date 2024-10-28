<?php

require_once('../tools/functions.php');
require_once('../classes/account.class.php');

$first_name = $last_name = $username = $password = $role = '';
$first_nameErr = $last_nameErr = $usernameErr = $passwordErr = $roleErr ='';

$productObj = new Account();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $first_name = clean_input($_POST['first_name']);
    $last_name = clean_input($_POST['last_name']);
    $username = clean_input($_POST['username']);
    $password = clean_input($_POST['password']);
    $role = clean_input($_POST['role']);

    if(empty($username)){
        $usernameErr = 'Username is required.';
    } else if ($productObj->usernameExist($username, $excludeID)){
        $usernameErr = 'Username already exists.';
    }

    if(empty($first_name)){
        $first_nameErr = 'First Name is required.';
    }

    if(empty($last_name)){
        $last_nameErr = 'Last Name is required.';
    }

    if(empty($password)){
        $passwordErr = 'Password is required.';
    }

    if(empty($role)){
        $roleErr = 'Role is required.';
    }


    // If there are validation errors, return them as JSON
    if(!empty($first_nameErr) || !empty($last_nameErr) || !empty($usernameErr) || !empty($passwordErr) || !empty($roleErr)){
        echo json_encode([
            'status' => 'error',
            'first_nameErr' => $first_nameErr,
            'last_nameErr' => $last_nameErr,
            'usernameErr' => $usernameErr,
            'passwordErr' => $passwordErr,
            'roleErr' => $roleErr
        ]);
        exit;
    }

    if(empty($first_nameErr) && empty($last_nameErr) && empty($usernameErr) && empty($passwordErr) && empty($roleErr)){
        $productObj->first_name = $first_name;
        $productObj->last_name = $last_name;
        $productObj->username = $username;
        $productObj->password = $password;
        $productObj->role = $role;

        if($productObj->add()){
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Something went wrong when adding the new product.']);
        }
        exit;
    }
}
?>
