<?php
    include 'common/connection.php';
?>
<?php
    $del=mysqli_query($conn,"DELETE FROM sangam where sid='".$_GET['id']."'");
    if($del){
        ?>
        <script>location.href="sangam.php"</script>
    <?php
    } 
?>