<?php
    include "../connect/connect.php";

    // 테이블 생성
    $sql = "CREATE TABLE myMember2 (";
    $sql .= "memberID int(20) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "youEmail varchar(40) NOT NULL,";
    $sql .= "youPass varchar(100) NOT NULL,";
    $sql .= "youName varchar(20) NOT NULL,";
    $sql .= "youBirth varchar(20) NOT NULL,";
    $sql .= "youPhone varchar(20) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (memberID)) CHARSET=utf8";

    $result = $connect -> query($sql);

    if( $result ){
        echo "Create Table True";
    } else {
        echo "Create Table false";
    }
?>