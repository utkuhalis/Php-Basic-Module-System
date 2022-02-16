<?php
    include "moduleSystem.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Module System</title>
        <style>
            * {
                text-decoration: none;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                background: #222;
                color: #fff;
                font-family: Arial;
                padding: 5px;
            }

            ul {
                width: 100%;
                list-style: none;
            }

            li{
                float: left;
                padding: 10px;
                margin-left: 10px;
                background: rgba(0,0,0,0.5);
            }

            a {
                color: #fff;
                transition: all .2s ease-in-out;
            }

            a:hover {
                color: #bbb;
            }

            div>h3{
                color: brown;
            }

            input[type="submit"]{
                border: 0;
                padding: 5px;
                margin: 5px;
            }

            .area{
                float:left;
                border: 1px solid #333;
                width: 300px;
                height: 100px;
                padding: 5px;
                margin: 5px;
                font-family: Consolas;
            }

            .sc{
                color: lime;
            }

            .fl{
                color: red;
            }
        </style>
    </head>
    <body>
        <h2>Welcome eTone Module System</h2>
        <br>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="market.php">Market</a></li>
            <li><a href="upload.php">Add Manually</a></li>
        </ul>
        <br><br><br>
