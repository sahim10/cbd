<?php
    include 'common/connection.php';
    include 'sidebar.php';
?>
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>tnvishwakarma</title>
<link rel="shortcut icon" href="../vishvakarma sangam.png">
<link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2"></head>
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:50px">
<?php 
    $sel=mysqli_query($conn,"SELECT* FROM members WHERE mid='".$_GET['id']."' ");
    if(mysqli_num_rows($sel)>0){
        $fe=mysqli_fetch_assoc($sel);
    }
?>
<div class="nk-app-root">
<div class="nk-main">
<div class="nk-content">
<div class="container">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="nk-block-head">
<div class="nk-block-head-between flex-wrap gap g-2">
<div class="nk-block-head-content"><h2 class="nk-block-title">Edit Member</h2>
<nav><ol class="breadcrumb breadcrumb-arrow mb-0">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Member</li></ol></nav></div>
<div class="nk-block-head-content">
    <ul class="d-flex">
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<form action="#" method="post" enctype="multipart/form-data">
<div class="row g-gs">
<div class="col-xxl-9">
<div class="gap gy-4">
<div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="row g-gs">
<div class="col-lg-4">
<div class="form-group"><label for="name" class="form-label">Member Name</label>
<div class="form-control-wrap">
    <input type="text" class="form-control" id="name" name="mname" placeholder="Enter Your Name" value="<?=$fe['mname'];?>"></div></div></div>
    <div class="col-lg-3">
<div class="form-group"><label for="gender" class="form-label">Gender</label>
<div class="form-control-wrap">
<input type="radio" class="form-radio" id="gender" name="mgender" value="Male"<?php if($fe['mgender']=="Male"){echo "checked";}?>>&nbsp;Male&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" id="gender" name="mgender" value="Female"<?php if($fe['mgender']=="Female"){echo "checked";}?>>&nbsp;Female</div></div></div>
<div class="col-lg-5">
<div class="form-group"><label for="age" class="form-label">Designation</label>
<div class="form-control-wrap">
<input type="text" class="form-control" id="age" name="designation" placeholder="Enter Your age" value=<?=$fe['designation'];?>></div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="mobile_num" class="form-label">Mobile Number</label>
<div class="form-control-wrap">
<input type="tel" class="form-control" pattern="^[0-9]{10}$"  id="mobile_num" name="phone" value=<?=$fe['phone'];?>>
</div></div></div>    
<div class="col-lg-6">
<div class="form-group"><label for="email" class="form-label">Email Id</label>
<div class="form-control-wrap">
    <input type="email" class="form-control" id="email" name="email" value=<?=$fe['email'];?>></div></div></div>

<div class="form-group"><label class="form-label">Photo</label>
<div class="image-upload-wrap d-flex flex-column align-items-center">
<div class="media media-huge">
    <img id="image-result" class="w-100 h-100" src=<?=$fe['photo'];?>></div>
<div class="pt-3">
    <input class="upload-image" name="photo" data-target="image-result" id="change-image" type="file" max="1" hidden />
    <label for="change-image" class="btn btn-md btn-primary">Change</label></div></div></div>
</div><br>

    



    <div class="col-lg-12">
<div class="form-group"><label for="address" class="form-label">Address</label>
<div class="form-control-wrap">
    <textarea class="form-control" id="address" name="address"><?=$fe['address'];?></textarea></div></div></div>
    
<div class="col-lg-12">
<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary" style="margin-left:4%;margin-bottom:20px;margin-top:20px;" value="Save Changes"></div></form>
</div></div></div></div></div></div></div>
<div>
</div></div></div>






<?php
    if(isset($_POST['submit']))
    {
        
        $upd=mysqli_query($conn,"UPDATE  members
                SET mname='".$_POST['mname']."',
                mgender='".$_POST['mgender']."',
                designation='".$_POST['designation']."',
                phone='".$_POST['phone']."',
                address='".$_POST['address']."',
                email='".$_POST['email']."'
                WHERE mid='".$_GET['id']."'");

        if($_FILES["photo"]["tmp_name"] != ""){
            $target_dir = "uploads/";
            $target_file1 = $target_dir . basename($_FILES["photo"]["name"]);
            $check1 = getimagesize($_FILES["photo"]["tmp_name"]);
            if($check1 !== false)
            {
                if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_file1)){
                    $upd=mysqli_query($conn,"UPDATE members    
                    SET photo='".$target_file1."'
                    WHERE mid='".$_GET['id']."'");
                }
    
            }
        }
?>
        <script>location.href="member.php"</script>
        <?php
    }
    
?>