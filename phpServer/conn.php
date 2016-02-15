<?php
    $link = mysqli_connect('mysql.hostinger.com.hk', 'u277374159_root', 'r5Tbqe4jl3','u277374159_blog');//链接数据库
    $result = mysqli_select_db($link,"myblog");
    mysqli_query($link,'SET NAMES UTF8');
