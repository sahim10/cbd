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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:50px">
<?php 
    $sel=mysqli_query($conn,"SELECT* FROM news WHERE nid='".$_GET['id']."' ");
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
<div class="nk-block-head-content"><h2 class="nk-block-title">Edit News</h2>
<nav><ol class="breadcrumb breadcrumb-arrow mb-0">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit News</li></ol></nav></div>
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
<div class="col-lg-12">
<div class="form-group"><label for="name" class="form-label">News Title<spam>*</spam></label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="name" name="tittle" placeholder="Enter News Title" value="<?=$fe['tittle'];?>"></div></div></div>
    


    <div class="col-6">
<div class="form-group"><label class="form-label">Date</label>
<input required type="date" name="date" value="<?=date('Y-m-d');?>" class="form-date form-control"></div></div>


<div class="col-lg-6">
<div class="form-group"><label for="district" class="form-label">District<spam>*</spam></label>
<div class="form-control-wrap">
<select name="district" id="city" class="form-select">
    <option selected hidden value="<?=$fe['district'];?>"><?=$fe['district'];?></option>
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






<input type="hidden" id="description" name="description">


<div class="form-group"><label class="form-label">Description</label><div class="form-control-wrap"><div class="js-quill" data-toolbar="minimal" data-placeholder="Write description here..." id="disp"><?=$fe['description'];?></div></div></div>


<div class="form-group"><label class="form-label">Photo</label>
<div class="image-upload-wrap">
<div class="media media-huge  d-flex mb-5">
<div class='row m-1'>
    <img id="image-result" src='<?=$fe['photo'];?>' style='margin-left:50px' height='90px' width='100px'>
    <label for="change-image" class="btn btn-sm btn-primary" style='margin-left:52px;margin-top:10px'>Add Image</label>
</div>
<div class='row m-1'>
    <img id="image-result1" src='<?=$fe['photo1'];?>' style='margin-left:50px' height='90px' width='100px'>
    <label for="change-image1" class="btn btn-sm btn-primary" style='margin-left:47px;margin-top:10px'>Add Image</label>
</div>
<div class='row m-1'>
    <img id="image-result2" src='<?=$fe['photo2'];?>' style='margin-left:50px' height='90px' width='100px'>
    <label for="change-image2" class="btn btn-sm btn-primary" style='margin-left:47px;margin-top:10px'>Add Image</label>

    </div>
<div class='row m-1'>
    <img id="image-result3" src='<?=$fe['photo3'];?>' style='margin-left:50px' height='90px' width='100px'>
    <label for="change-image3" class="btn btn-sm btn-primary" style='margin-left:47px;margin-top:10px'>Add Image</label>
    </div>
<div class='row m-1'>
    <img id="image-result4" src='<?=$fe['photo4'];?>' style='margin-left:50px' height='90px' width='100px'>
    <label for="change-image4" class="btn btn-sm btn-primary" style='margin-left:47px;margin-top:10px'>Add Image</label>
    </div>
<div class='row m-1'>
    <img id="image-result5" src='<?=$fe['photo5'];?>' style='margin-left:50px' height='90px' width='100px'>
    <label for="change-image5" class="btn btn-sm btn-primary" style='margin-left:47px;margin-top:10px;'>Add Image</label>
    </div>
</div>
</div>
</div>

<div class="pt-3">
    <input  class="upload-image" name="photo" data-target="image-result" id="change-image" type="file" max="1" hidden>
    
    <input  class="upload-image" name="photo1" data-target="image-result1" id="change-image1" type="file" max="1" hidden>
    
    <input  class="upload-image" name="photo2" data-target="image-result2" id="change-image2" type="file" max="1" hidden>
    
    <input  class="upload-image" name="photo3" data-target="image-result3" id="change-image3" type="file" max="1" hidden>
    
    <input  class="upload-image" name="photo4" data-target="image-result4" id="change-image4" type="file" max="1" hidden>
    
    <input  class="upload-image" name="photo5" data-target="image-result5" id="change-image5" type="file" max="1" hidden>
    


</div></div></div>
</div>


    




    
<div class="col-lg-12">
<div class="form-group">
<input type="submit" name="submit" id="submit" class="btn btn-primary" style="margin-left:4%;margin-bottom:20px;margin-top:20px;" value="Save Changes"></div></form>
</div></div></div></div></div></div></div>
<div>
</div></div></div>






<?php
    if(isset($_POST['submit'])){
        $upd1=mysqli_query($conn,"UPDATE news
        SET tittle='".$_POST['tittle']."',
        date='".$_POST['date']."',district='".$_POST['district']."',
        description='".$_POST['description']."' where nid='".$_GET['id']."'");
        
        
            $target_dir="uploads/";
            if($_FILES['photo']['name']!=""){
                $target_file=$target_dir.basename($_FILES['photo']['name']);
                $check=getimagesize($_FILES['photo']['tmp_name']);
                if($check != false){
                    if(move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file)){
                        $upd=mysqli_query($conn,"UPDATE news 
                        set description='".$_POST['description']."',district='".$_POST['district']."',
                        tittle='".$_POST['tittle']."',
                        date='".$_POST['date']."',district='".$_POST['district']."',
                        photo='".$target_file."'
                        where nid='".$_GET['id']."'");
                    }
                }
            }
            if($_FILES['photo1']['name']!=""){
                $target_file1=$target_dir.basename($_FILES['photo1']['name']);
                $check1=getimagesize($_FILES['photo1']['tmp_name']);
                if($check1 != false){
                    if(move_uploaded_file($_FILES["photo1"]["tmp_name"],$target_file1)){
                       $upd=mysqli_query($conn,"UPDATE news 
                       set photo1='".$target_file1."',
                       tittle='".$_POST['tittle']."',
                       description='".$_POST['description']."',district='".$_POST['district']."',district='".$_POST['district']."',
                       date='".$_POST['date']."' where nid='".$_GET['id']."'");
                    }
                }
            }
            if($_FILES['photo2']['name']!=""){
                $target_file2=$target_dir.basename($_FILES['photo2']['name']);
                $check2=getimagesize($_FILES['photo2']['tmp_name']);
                if($check2 != false){
                    if(move_uploaded_file($_FILES["photo2"]["tmp_name"],$target_file2)){
                       $upd=mysqli_query($conn,"UPDATE news 
                       set photo2='".$target_file2."',
                       tittle='".$_POST['tittle']."',
                       description='".$_POST['description']."',district='".$_POST['district']."',
                       date='".$_POST['date']."' where nid='".$_GET['id']."'");
                    }
                }
            }
            if($_FILES['photo3']['name']!=""){
                $target_file3=$target_dir.basename($_FILES['photo3']['name']);
                $check3=getimagesize($_FILES['photo3']['tmp_name']);
                if($check3 != false){
                    if(move_uploaded_file($_FILES["photo3"]["tmp_name"],$target_file3)){
                    $upd=mysqli_query($conn,"UPDATE news 
                    set photo3='".$target_file3."',
                    tittle='".$_POST['tittle']."',
                    description='".$_POST['description']."',district='".$_POST['district']."',
                    date='".$_POST['date']."' where nid='".$_GET['id']."'");
                    }
                }
            }
            if($_FILES['photo4']['name']!=""){
                $target_file4=$target_dir.basename($_FILES['photo4']['name']);
                $check4=getimagesize($_FILES['photo4']['tmp_name']);
                if($check4 != false){
                    if(move_uploaded_file($_FILES["photo4"]["tmp_name"],$target_file4)){
                    $upd=mysqli_query($conn,"UPDATE news 
                    set photo4='".$target_file4."',
                    tittle='".$_POST['tittle']."',
                    description='".$_POST['description']."',district='".$_POST['district']."',
                    date='".$_POST['date']."' where nid='".$_GET['id']."'");
                    }
                }
            }
            if($_FILES['photo5']['name']!=""){
                $target_file5=$target_dir.basename($_FILES['photo5']['name']);
                $check5=getimagesize($_FILES['photo5']['tmp_name']);
                if($check5 != false){
                    if(move_uploaded_file($_FILES["photo5"]["tmp_name"],$target_file5)){
                    $upd=mysqli_query($conn,"UPDATE news 
                    set photo5='".$target_file5."',
                    tittle='".$_POST['tittle']."',
                    description='".$_POST['description']."',district='".$_POST['district']."',
                    date='".$_POST['date']."' where nid='".$_GET['id']."'");
                    }
                }
            }
            ?>
 <script>location.href='news.php'</script>
<?php
        }
    
?>

<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>            
<link rel="stylesheet" href="assets/css/libs/editors/quill20d4.css?v1.1.2"></link>
<script src="assets/js/libs/editors/quill.js"></script>
<script src="assets/js/editors/quill.js"></script>
<script>
    $(document).ready(function(){
        $("#submit").click(function(){
            var a=$("#disp").text();
            $("#description").val(a);
        })
    })
</script>