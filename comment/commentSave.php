<?php
    include "../connect/connect.php"; 

    $youName = $_POST['youName']; 
    $youText = $_POST['youText'];
    $regTime = time(); 

    // echo $youName;
    // echo $youText;
    // echo $regTime;

    $sql = "INSERT INTO myComment2(youName, youText, regTime) VALUES('$youName','$youText','$regTime');";

    $result = $connect -> query($sql);

    // if($result){
    //     echo "INSERT INTO TRUE";
    // }else {
    //     echo "INSERT INTO FALSE";        
    // }
?>

<script>
    location.href = "../comment/comment.php#comment";
</script>