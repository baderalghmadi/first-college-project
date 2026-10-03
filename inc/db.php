<?php

//$conn = mysqli_connect('localhost','root','','Projwin');

$conn = mysqli_connect('sql112.infinityfree.com', 'if0_42894723', 'nTqxUqkCtHy7O', 'if0_42894723_projwin_db');

if (!$conn) {
    die("خطأ في الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}

?>