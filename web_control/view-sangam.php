<?php
    include 'sidebar.php';
    include 'common/connection.php';
?>
<style>
    iframe{
        width:460px;
        height:300px;
    }
</style>
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
    $sel=mysqli_query($conn,"SELECT* FROM sangam WHERE sid='".$_GET['id']."' ");
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
        <div class="nk-block-head-content"><h2 class="nk-block-title">View Sangam</h1><nav></nav></div>
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
<div class="col-lg-2">
    <img src=<?=$fe['photo'];?> style="margin-top:40px;border-radius:20px;box-shadow:2px 2px 10px black" height="160px" width="130px">
</div>
<div class="col-lg-4" style="margin-top:60px;">


<table>
    <tr>
        <td></td>
    </tr>
</table>
<b style='color:grey;margin-right:57px;'>Name:</b><?=$fe['sname'];?><br>
<b style='color:grey;margin-right:50px;'>Mobile:</b><?=$fe['phone1'];?><br>
<b style='color:grey;margin-right:58px;'>Email:</b><?=$fe['email'];?><br>
<b style='color:grey;margin-right:73px;'>City:</b><?=$fe['city'];?><br>
<b style='color:grey;margin-right:67px;'>Area:</b><?=$fe['area'];?><br>
<b style='color:grey;margin-right:42px;'>Address:</b><?=$fe['address'];?><br> 
</div>
<div class="col-lg-6" >    
  <div style="max-width:300px"><?=$fe['map']?></div>
</div>
    </div>
    </div>


</html>