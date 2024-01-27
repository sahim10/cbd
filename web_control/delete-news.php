<?php
    include 'common/connection.php';
?>
<?php
    $del=mysqli_query($conn,"DELETE FROM news where nid='".$_GET['id']."'");
    if($del){
        ?>
            <script>location.href='news.php';</script>
        <?php
    }
    
?>