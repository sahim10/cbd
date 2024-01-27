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
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:50px">
<?php 
    $sel=mysqli_query($conn,"SELECT* FROM members WHERE mid='".$_GET['id']."' ");
    if(mysqli_num_rows($sel)>0){
        $fe=mysqli_fetch_assoc($sel);
    }
?>
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
        <div class="nk-content-body">
        <div class="nk-block-head">
        <div class="nk-block-head-between flex-wrap gap g-2">
        <div class="nk-block-head-content"><h2 class="nk-block-title">View Member</h1><nav></nav></div>
    <div class="nk-block-head-content"><ul class="d-flex">
        <li><a href="user.php" class="btn btn-primary btn-md d-md-none"><em class="icon ni ni-eye"></em><span>View</span></a></li>
    <li><button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
    <div class="nk-block">
<div class="row g-gs">
<div class="col-xxl-9 mt-5">
<div class="gap gy-4">
<div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="row g-gs">
<div class="col-lg-3" style="align-self:center">
    <img src=<?=$fe['photo'];?> style="border-radius:20px;box-shadow:2px 2px 10px black" height="160px" width="130px">
</div>
<div class="col-lg-3">
<b style="color:red"><?=$fe['designation'];?><br></b>    
<?=$fe['mname'];?><br>
<?=$fe['phone'];?><br>
<?=$fe['email'];?><br><br>
</div>
<div class="col-lg-3">    
    <?=$fe['mgender'];?><br>
    <?=$fe['address'];?><br>   
</div>
<div class="col-lg-3">
    </div>
    </div>


</html>