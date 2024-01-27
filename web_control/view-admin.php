<?php
    include 'sidebar.php';
    include 'common/connection.php';
?>
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>tnvishwakarma</title>
<link rel="shortcut icon" href="../apple-touch-icon.png">
<link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2"></head>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:35px">
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
        <div class="nk-content-body">
        <div class="nk-block-head">
        <div class="nk-block-head-between flex-wrap gap g-2">
        <div class="nk-block-head-content"><h2 class="nk-block-title">View Admin</h1><nav></nav></div>
    <div class="nk-block-head-content"><ul class="d-flex">
        <li><a href="user.php" class="btn btn-primary btn-md d-md-none"><em class="icon ni ni-eye"></em><span>View</span></a></li>
    <li><button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
    <div class="nk-block">
<div class="row g-gs">
<div class="col-3">
<div class="card">
<div class="card-body">
    <img src='1.png' style="border-radius:20px;box-shadow:2px 2px 10px black" height="180px">
    <br>
    <br>
    <b style="color:red;margin-left:65px;text-transform:uppercase"><?=$_SESSION['user'];?></b>
    <br>
    <br>
</div>

</html>