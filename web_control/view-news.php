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
    $sel=mysqli_query($conn,"SELECT* FROM news WHERE nid='".$_GET['id']."' ");
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
        <div class="nk-block-head-content"><h2 class="nk-block-title">View News</h1><nav></nav></div>
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

<?php
if($fe['photo']!='')
{
?>
<div class="col-lg-2">
    <img src=<?=$fe['photo'];?> style="margin-top:5px;border-radius:20px;box-shadow:2px 2px 10px black" height="160px" width="130px">
</div>
<?php
}
?>
<?php
if($fe['photo1']!='')
{
?>
<div class="col-lg-2">
    <img src=<?=$fe['photo1'];?> style="margin-top:5px;border-radius:20px;box-shadow:2px 2px 10px black" height="160px" width="130px">
</div>
<?php
}
?>
<?php
if($fe['photo2']!='')
{
?>
<div class="col-lg-2">
    <img src=<?=$fe['photo2'];?> style="margin-top:5px;border-radius:20px;box-shadow:2px 2px 10px black" height="160px" width="130px">
</div>
<?php
}
?>
<?php
if($fe['photo3']!='')
{
?>
<div class="col-lg-2">
    <img src=<?=$fe['photo3'];?> style="margin-top:5px;border-radius:20px;box-shadow:2px 2px 10px black" height="160px" width="130px">
</div>
<?php
}
?>
<?php
if($fe['photo4']!='')
{
?>
<div class="col-lg-2">
    <img src=<?=$fe['photo4'];?> style="margin-top:5px;border-radius:20px;box-shadow:2px 2px 10px black" height="160px" width="130px">
</div>
<?php
}
?>
<?php
if($fe['photo5']!='')
{
?>
<div class="col-lg-2">
    <img src=<?=$fe['photo5'];?> style="margin-top:5px;border-radius:20px;box-shadow:2px 2px 10px black" height="160px" width="130px">
</div>
<br>
<?php
}
?>
</div>
<br>

<div class="row">
<div class="col-lg-4" style="margin-top:0px;">
<table cellpadding="10px">
    <tr>
        <td><b style='color:grey;margin-right:57px;'>Title:</b></td>
        <td><?=$fe['tittle'];?></td>
    </tr>
    <tr>
        <td><b style='color:grey;margin-right:57px;'>Date:</b></td>
        <td><?=$fe['date'];?></td>
    </tr>
    <tr>
        <td><b style='color:grey;margin-right:57px;'>Description:</b></td>
        <td><?=$fe['description'];?></td>
    </tr>
    <tr>
        <td><b style='color:grey;margin-right:57px;'>District:</b></td>
        <td><?=$fe['district'];?></td>
    </tr>
</table>




</html>