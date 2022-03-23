<?php

header('Content-type: application/json');

// memulai sebuah sesi
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)) {
    $result['success'] = false;
    $result['message'] = "Username harus diisi!";
    echo json_encode($result);
    return;
}

if (empty($password)) {
    $result['success'] = false;
    $result['message'] = "Password harus diisi!";
    echo json_encode($result);
    return;
}

if ($username != "admin" || $password != "pw123") {
    $result['success'] = false;
    $result['message'] = "Username atau Password salah!";
    echo json_encode($result);
    return;
}

$_SESSION['username'] = "admin";
$result['success'] = true;
$result['message'] = "Berhasil Login";
echo json_encode($result);
return;

?>