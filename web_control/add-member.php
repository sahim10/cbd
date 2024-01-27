<?php
    include 'common/connection.php';
    include 'sidebar.php';

?>

<style>
    spam{
        color:red;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>tnvishwakarma</title>
<link rel="shortcut icon" href="../vishvakarma sangam.png">
<link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2">
</head>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:30px">
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>

<div class="nk-content">
<div class="container m-auto">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="nk-block-head">
<div class="nk-block-head-between flex-wrap gap g-2">
<div class="nk-block-head-content"><h2 class="nk-block-title">Add Member</h2>
<nav><ol class="breadcrumb breadcrumb-arrow mb-0">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Member</li></ol></nav></div>
<div class="nk-block-head-content">
    <ul class="d-flex">
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>


<?php
if(isset($_POST['submit'])){
        $target_dir = "uploads/";
        $target_file1 = $target_dir . basename($_FILES["photo"]["name"]);
        $check1 = getimagesize($_FILES["photo"]["tmp_name"]);

        if($check1 !== false){
            if(move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file1)){
                if($_POST['prime']==1){
                    $upd=mysqli_query($conn,"UPDATE members set prime=0 where prime=1 && sname='".$_POST['sangam_name']."'");
                }
                $ins=mysqli_query($conn,"INSERT INTO members (prime,mname,mgender,phone,sname,email,  address,designation , photo) VALUES 
                ('".$_POST['prime']."','".$_POST['mname']."','".$_POST['mgender']."',
                '".$_POST['phone']."','".$_POST['sangam_name']."','".$_POST['email']."',
                '".$_POST['address']."','".$_POST['designation']."',
                '".$target_file1."')");
                
 ?>
         <script>location.href="member.php"</script>
 <?php
                
                }
            }
        }
?>
<form action="#" method="post" enctype="multipart/form-data">   
<div class="row g-gs">
<div class="col-xxl-9">
<div class="gap gy-4">
<div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="row g-gs">

<div class="row mt-3">
    <div class="col-lg-7">
    <input type="radio" value="1" name="prime">&nbsp;Set As A Prime Member

    </div>
    <div class="col-lg-5">
    <input type="radio" value="0" name="prime">&nbsp;Member

    </div>
</div>
<div class="col-lg-4">
<div class="form-group"><label for="name" class="form-label">Member Name<spam>*</spam></label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="name" name="mname" placeholder="Enter member Name"></div></div></div>
    <div class="col-lg-3 col-md-3 ml-2">
<div class="form-group"><label for="mgender" class="form-label">Gender<spam>*</spam></label>
<div class="form-control-wrap">
<input required type="radio" class="form-radio" id="mgender" name="mgender" value="Male">&nbsp;Male&nbsp;&nbsp;&nbsp;
<input required type="radio" class="form-radio" id="mgender" name="mgender" value="Female">&nbsp;Female</div></div></div>

<div class="col-lg-5">
<div class="form-group"><label for="designation" class="form-label">Designation <spam>*</spam></label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="username" name="designation" placeholder="Enter Member Designation"></div>
</div></div>
<div class="col-lg-4">
<div class="form-group"><label for="phone" class="form-label">Mobile Number<spam>*</spam></label>
<div class="form-control-wrap">
<input required type="tel" class="form-control" pattern="^[0-9]{10}$"  id="phone" name="phone" placeholder="Enter member mobile number">
</div></div></div>


<div class="col-lg-4">
<div class="form-group"><label for="email" class="form-label">Email Id<spam>*</spam></label>
<div class="form-control-wrap">
    <input required type="email" class="form-control" id="email" name="email" placeholder="Enter member Email Id"></div></div></div>  
    <div class="col-lg-4">
    <div class="form-group"><label for="email" class="form-label">Sangam<spam>*</spam></label>
    <select name="sangam_name" id="sangam" class="form-select">
    <option value="select sangam" selected hidden>Select Sangam</option>
        <?php
        
        $sel=mysqli_query($conn,"SELECT * FROM sangam");
        if(mysqli_num_rows($sel)>0){
            while($fe=mysqli_fetch_assoc($sel)){
            ?>

  <option value="<?=$fe['sname'];?>"><?=$fe['sname'];?></option>
                        <?php
							}       
						}
						?>
                       
  </select></div>   
        </div>
    <div class="col-lg-12">
<div class="form-group"><label for="address" class="form-label">Address<spam>*</spam></label>
<div class="form-control-wrap">
    <textarea class="form-control" id="address" name="address" placeholder="Enter member Present Address"></textarea></div></div></div>
<div class="form-group"><label class="form-label">Photo<spam>*</spam></label>
<div class="image-upload-wrap d-flex flex-column align-items-center">
<div class="media media-huge">
    <img id="image-result" class="w-100 h-100"></div>
<div class="pt-3">
    <input required class="upload-image" name="photo" data-target="image-result" id="change-image" type="file" max="1" hidden>
    <label for="change-image" class="btn btn-md btn-primary">Add Image</label></div></div></div>
<div class="form-note mt-3">Set the image thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted.</div></div></div>
    <br>
   
    <br>

<div class="row g-gs">
<div class="col-lg-12">
<div class="form-group">
<input required type="submit" name="submit" class="btn btn-primary" style="margin-left:4%;margin-bottom:20px;margin-top:20px;" value="Save Changes"></div></form>
</div></div>   
</body>
</html>


