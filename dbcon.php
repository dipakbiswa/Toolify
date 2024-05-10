<?php
    //Database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "toolify";
    $conn = mysqli_connect($host, $username, $password, $database);

    //Fetching app data
    $url =  isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";  
	$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $host = parse_url($url, PHP_URL_HOST);
    $host = preg_replace('/^www\./', '', $host); // Remove www.
    $host = preg_replace('/^https?:\/\//', '', $host); // Remove https://
    $query = "select * from app where app_url = '$host'";
    $query_run = mysqli_query($conn, $query);
    $fetch_data = mysqli_fetch_assoc($query_run);
    $app_name = $fetch_data['app_name'];
    $app_email = $fetch_data['email'];
    $app_url = $fetch_data['app_url'];
    $home_ad = $fetch_data['home_ad'];
    $tools_ad = $fetch_data['tools_ad'];
?>