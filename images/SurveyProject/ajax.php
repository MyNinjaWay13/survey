<?php

if ($_POST['password'] != $_POST['repass']) {
    echo json_encode(array("status" => "error"));
} else {
    echo json_encode(array("status" => "ok"));
}


?>