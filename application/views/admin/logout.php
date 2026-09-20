<?php

if(isset($_SESSION['message'])){
    unset($_SESSION['message']);
}

if(isset($_SESSION['login'])){
    unset($_SESSION['login']);
}

if(isset($_SESSION['admin_name'])){
    unset($_SESSION['admin_name']);
}

if(isset($_SESSION['admin_pass'])){
    unset($_SESSION['admin_pass']);
}
$this->load->view('admin/login');
?>