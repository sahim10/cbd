<?php 
    include 'sidebar.php';
    include 'common/connection.php';
?>
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>K7 Groups</title>
<link rel="shortcut icon" href="images/title.png">
<link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:35px">
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
    <div class="nk-block-head-between flex-wrap gap g-2">
    <div class="nk-block-head-content">
        <h2 class="nk-block-title">Sangam List</h1>
        <nav><ol class="breadcrumb breadcrumb-arrow mb-0">
            <li class="breadcrumb-item">
            <a href="#">Home</a></li>
            <li class="breadcrumb-item">
            <a href="#">Sangam</a></li>
        </ol></nav></div>
        
        <div class="nk-block-head-content">
    <ul class="d-flex">
    <li><button onclick="Export()" class="btn btn-dark"><span class="ni ni-file" style="font-size:22px;font-weight:400"></span>&nbsp;Export as PDF</button></li>
    <li>&nbsp;&nbsp;<button onclick="ExportToExcel('xlsx')" class=" btn btn-success"><span class="ni ni-dashboard" style="font-size:22px;font-weight:400"></span>&nbsp;Export as Excel</button></li>
    <li>&nbsp;&nbsp;<a href="add-sangam.php" class=" btn btn-primary"><span class="ni ni-plus" style="font-size:22px;font-weight:400"></span>&nbsp;Add Sangam</a></li>
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li>
    <li>&nbsp;&nbsp;</li></ul></div></div></div>
</div></div>
</div>

<div class="nk-block">
<div class="card">
<table class="datatable-init table" id="maintable" data-nk-container="table-responsive">
<thead class="table-light">
<tr>
<th class="tb-col tb-col-check" data-sortable="false"><span class="overline-title">SI.No</span></th>
<th class="tb-col"><span class="overline-title">Sangam Name</span></th>
<th class="tb-col"><span class="overline-title">Mobile Number</span></th>
<th class="tb-col"><span class="overline-title">Profile Photo</span></th>
<th class="tb-col tb-col-lg"><span class="overline-title">City</span></th>
<th class="tb-col"><span class="overline-title">Area</span></th>
<th class="tb-col tb-col-end p-auto" data-sortable="false"><span class="overline-title">action</span></th>
</tr>
</thead>
<tbody>
<?php
$c=1;      
    $sel=mysqli_query($conn,"SELECT * FROM sangam");
    if(mysqli_num_rows($sel)>0){
        while($fe=mysqli_fetch_assoc($sel)){

?>            
        <tr>
    <td class="tb-col tb-col-check"><?=$c++;?></td>
<td class="tb-col">
        <div class="media-group">
            <div class="media-text"><?=$fe['sname'];?></div></div></td>

            <td class="tb-col tb-col-md text-danger"><span><b><?=$fe['phone1']?></b></span></td>
<td class="tb-col"><div class="media media-md media-middle"><img src=<?=$fe['photo'];?> height="40px" max-width="30px"></div></td>


<td class="tb-col"><span><?=$fe['city']?></span></td>
<td class="tb-col"><span><?=$fe['area']?></span></td>

<td class="tb-col tb-col-end">

            <a href="view-sangam.php?id=<?=$fe['sid'];?>">
            <em class="icon ni ni-eye" style="color:black;font-size:23px"></em>
         
            <a href="edit-sangam.php?id=<?=$fe['sid'];?>">
            <em class="icon ni ni-edit"  style="color:green;font-size:23px"></em>

            <a id="hi" onclick="myFun()">
            <em class="icon ni ni-trash"  style="color:red;font-size:23px"></em>
    </div>
</div>
</div>
</td>
</tr>
<script>
    function myFun(){
        if(confirm("Are you sure want to delete")){
            location.href="delete-sangam.php?id=<?=$fe['sid'];?>";
        }
    }
</script>
<?php
        }
    }   
?>
<br><br>
</div>
</div>
</form>
</body>
    
    
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script src="assets/js/data-tables/data-tables.js"></script>
</html>
<script>
    function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('maintable');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('MySheetName.' + (type || 'xlsx')));
    }
</script>
<script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('maintable'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        }
    </script>