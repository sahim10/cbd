<?php
session_start();
?>
<!DOCTYPE html><html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="My Career Care Fin Solutions | India Largest Loan Producer |">
        <meta name="keywords" content="career care, my career care, fin solutions, my career care fin solutions,career care, my career care, fin solutions, my career care fin solutions,consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
        <meta name="author" content="ILife Technologies">
        <title>tnvishwakarma</title>
<link rel="shortcut icon" href="../vishvakarma sangam.png">
        
      
<link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2">
<style>
    body{
        background-image:url("assets/images/counter-bg.jpg");
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100%;
    }
</style>
</head>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
    <div class="nk-main">
    <div class="nk-wrap align-items-center justify-content-center has-mask">
    <div class="mask mask-3"></div>
<div class="container p-2 p-sm-4">
    <div class="row flex-lg-row-reverse">
    <div class="col-lg-5">
    <div class="card card-gutter-lg rounded-4 card-auth">
    <div class="card-body">
    <div class="brand-logo mb-4">   
    <div class="logo-wrap">
        <img  class="img-responsive" src="../vishvakarma sangam.png" style="margin-top:10px;margin-left:140px" height="80px" >
    </div>
    </div>
<div class="nk-block-head">
    <div class="nk-block-head-content"><h3 class="nk-block-title mb-1">Login to Account</h3><br>
<form method="post">    
    <div class="row gy-3">
    <div class="col-12">
    <div class="form-group"><label for="username" class="form-label"><b>Email or Username</b></label>
<div class="form-control-wrap"><input type="text" class="form-control" name="uname" id="username" placeholder="Enter username"></div></div></div>
<div class="col-12">
    <div class="form-group"><label for="password" class="form-label"><b>Password</b></label>
<div class="form-control-wrap"><input type="password" class="form-control" name="pwd" id="password" placeholder="Enter password"></div></div></div>
<div class="col-12">
    <div class="d-flex flex-wrap justify-content-between">
    <!-- <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox" value="" id="rememberMe"><label class="form-check-label" for="rememberMe"> Remember Me </label></div>
    <a href="auth-reset-fancy.html" class="small">Forgot Password?</a></div></div> -->
<div class="col-12 mt-3">
    <div class="d-grid">
        <input type="submit" class="btn btn-info" name="login" value="Login to account" />
    </div>
</div>
</div>
</form>
</html>
<?php
if(isset($_POST['login'])){
    if($_POST['uname']=="admin" && $_POST['pwd']=="123"){
        $_SESSION['user']="admin";
        header("Location: member.php");
    }
    else if($_POST['uname']=="" && $_POST['pwd']==""){
        echo "<script>alert('Fill All The Inputs')</script>";
    }
    else{
        echo "<script>alert('Login Invalid')</script>";
    }
}
?>