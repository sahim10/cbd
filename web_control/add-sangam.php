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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

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
<div class="nk-block-head-content"><h2 class="nk-block-title">Add Sangam</h2>
<nav><ol class="breadcrumb breadcrumb-arrow mb-0">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Sangam</li></ol></nav></div>
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
                $ins=mysqli_query($conn,"INSERT INTO sangam (sname,phone1,phone2, email, city, address,area,map, photo) VALUES 
                ('".$_POST['sname']."','".$_POST['phone1']."',
                '".$_POST['phone2']."','".$_POST['email']."','".$_POST['city']."','".$_POST['address']."','".$_POST['area']."','".$_POST['map']."',
                '".$target_file1."')");
 ?>
         <script>location.href="sangam.php"</script>
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
<div class="col-lg-6">
<div class="form-group"><label for="name" class="form-label">Sangam Name<spam>*</spam></label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="name" name="sname" placeholder="Enter Sangam Name"></div></div></div>
    <div class="col-lg-6">
<div class="form-group"><label for="email" class="form-label">Email Id<spam>*</spam></label>
<div class="form-control-wrap">
    <input required type="email" class="form-control" id="email" name="email" placeholder="Enter Sangam Email Id"></div></div></div>  


<div class="col-lg-6">
<div class="form-group"><label for="phone1" class="form-label">Mobile Number1<spam>*</spam></label>
<div class="form-control-wrap">
<input required type="tel" class="form-control" pattern="^[0-9]{10}$"  id="phone1" name="phone1" placeholder="Enter Sangam Mobile number1">
</div></div></div>

<div class="col-lg-6">
<div class="form-group"><label for="phone2" class="form-label">Mobile Number2</label>
<div class="form-control-wrap">
<input  type="tel" class="form-control" pattern="^[0-9]{10}$"  id="phone2" name="phone2" placeholder="Enter Sangam Mobile number2">
</div></div></div>






    <div class="col-lg-6">
<div class="form-group"><label for="city" class="form-label">City<spam>*</spam></label>
<div class="form-control-wrap">
<select name="city" id="city" class="form-select">
    <option selected hidden>Choose Any City</option>
<?php
$select=mysqli_query($conn,"SELECT * FROM district  order by district");
if(mysqli_num_rows($select)>0){
    while($fet=mysqli_fetch_assoc($select)){
       ?> 
       <option value="<?=$fet['district'];?>"><?=$fet['district'];?></option>
       <?php
    }
}
?>
    
</select>
</div></div></div> 


<div class="col-lg-6">
<div class="form-group"><label for="city" class="form-label">Area<spam>*</spam></label>
<div class="form-control-wrap">
<select name="area" id="area" class="form-select">
    <option selected hidden>Choose Any Area</option>
</select>
</div></div></div> 




   
    <div class="col-lg-12">
<div class="form-group"><label for="address" class="form-label">Address<spam>*</spam></label>
<div class="form-control-wrap">
    <textarea class="form-control" id="address" name="address" placeholder="Enter Sangam Present Address"></textarea></div></div></div>
    <div class="col-lg-12">
<div class="form-group"><label for="address" class="form-label">Map</label>
<div class="form-control-wrap">
    <textarea class="form-control" id="address" name="map" placeholder="Enter Sangam Location"></textarea></div></div></div>
    <div class="form-note mt-3">Set the map location as: <br><b>Ex:-</b>< iframe src="https:/" width="" height="" /iframe>.</div>
<div class="form-group"><label class="form-label">Profile Photo<spam>*</spam></label>
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


<script>
    $(document).ready(function(){
        $("#city").change(function(){
        var city=$(this).val();
            $.ajax({
                url:"ajax.php",
                type:"post",
                data:{"city":city},
                success: function(result){
                    var jobj = JSON.parse(result);
                    i=0;
                    $("#area").html("<option selected hidden>Choose Any Area</option>");
                    while(i<jobj.length){
                        $("#area").append("<option>"+jobj[i]+"</option>");
                        i++;
                    }                    
                }
            })
        })
    })
</script>
