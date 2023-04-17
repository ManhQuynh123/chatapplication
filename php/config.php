<?php
    $conn = mysqli_connect("localhost", "root", "", "chat");
    if(!$conn){
        echo "Kết nối thành công" . mysqli_connect_error();
    }
?>