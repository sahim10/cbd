<?php
    include 'common/connection.php';
?>
<?php
    $del=mysqli_query($conn,"DELETE FROM members where mid='".$_GET['id']."'");
    if($del){
        ?>
        <script>location.href="member.php"</script>
    <?php
    } 
?>