<?php

header('Content-type: application/json');

session_start();
if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
}

$result['success'] = true;
$result['message'] = "Berhasil Keluar";
echo json_encode($result);
return;

?>