<?php
    include "../connect/connect.php";

    // 테이블 생성
    $sql = "CREATE TABLE myComment2 ("; 
    $sql .= "commentID int(10) unsigned NOT NULL AUTO_INCREMENT,"; 
    $sql .= "youName varchar(20) NOT NULL,";
    $sql .= "youText varchar(50) NOT NULL,";
    $sql .= "regTime int(15) NOT NULL,";
    $sql .= "PRIMARY KEY (commentID)) CHARSET=utf8;"; 
    

    $result = $connect -> query($sql);

    if( $result ){
        echo "create Comment True";
    } else {
        echo "create Comment false";
    }
?>