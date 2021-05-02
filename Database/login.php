<?php
require_once('./db.inc.php');

if( isset($_POST['username']) && isset($_POST['pwd'])){
    $sql = "SELECT `username`, `pwd` 
            FROM `admin` 
            WHERE `username` = ? 
            AND `pwd` = ? ";

    $arrParam = [
        $_POST['username'],
        sha1($_POST['pwd'])
    ];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($arrParam);


    if( $stmt->rowCount() > 0 ){
        session_start();

        $_SESSION['username'] = $_POST['username'];

        header("Refresh: 1; url=./admin.php");
        echo "登入成功!";

    } else {

        header("Refresh: 3; url=./index.php");
        echo "登入失敗";
    }
} else {
    header("Refresh: 3; url=./index.php");
    echo "請重新登入";
}
