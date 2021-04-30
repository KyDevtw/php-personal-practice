<?php

// 設定cookie以變數,變數名稱加上存在時間time()現在時間＋預計存活時間長度（秒數）
setcookie("變數名稱","變數Value",time()+60*60*12);

// 呼叫cookie 使用 $_COOKIE
// cookie在第一次進入網頁時建立,但第一次網站loading時無法直接使用
echo ($_COOKIE["變數名稱"]);

// 清除cookie
setcookie("變數名稱", "", time() + 60 * 60 * 12); // 讓cookie值為空
setcookie("變數名稱", "", time()); // 讓cookie生存時間到目前時間
?>