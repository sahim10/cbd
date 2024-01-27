<?php
    include 'common/connection.php';

	$arr = [];
    $sel=mysqli_query($conn,"SELECT constituency,area_id FROM constituency where district='".$_POST['city']."'  order by constituency");
    while($fe=mysqli_fetch_assoc($sel)){
        $arr[] = $fe['constituency'];
    }
	echo json_encode($arr);
?>