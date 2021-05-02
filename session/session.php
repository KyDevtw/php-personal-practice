<?php

// session只存在伺服器當中
// seesion的存活時間要從php.ini設定
    session_start();
    $_SESSION["username"]='test';
// session建立之後可以立即使用
    echo $_SESSION["username"];
// session只要還沒過期或清除都可以取用

// 清除session有兩種方式
session_unset(); // 將session所有陣列清空,馬上可以看到session內的陣列全部清除,但是session的值還是會在,只是為0
session_destroy(); // 刪除伺服器上的session,下次存取網頁session就會消失,刪除的當下還是可以使用


?>