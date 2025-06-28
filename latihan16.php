<?php
if(lisset($_session["login"])){
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>admin</title>
        <style>
            body{
                margin:0;
                font-family:arial,sans-serif;
                background-color:#f2f2f2;
                height:100vh;
                display:flex;
                align-items:center;
                justify-contect:center;
            }

            .card{
                background-color:white;
                padding:30px 40px;
                border-radius:10px;
                box-shadow:0px 0px 15px rgba(0,0,0,0,1);
                text-align:center;
            }

            .card h2{
                margin-bottom:10px;
            }

            .card p{
                margin-bottom:20px;
            }

            .logout{
                padding:10px 20px;
                background-color:#ff4d4d;
                color:white;
                text-decoration:none;
                border-radius:5px;
                font-weight:bold;
            }

            .logout:hover{
                background-color:#e60000;
            }
            </style>
            </head>
            <body>
                <div class="card">
                <h2>selamat datang,admin<h2>
                    <p>ini adalah halaman admin</p>
                    <a href="logout.php"class="logout">logout</a>
        </div>
        </body>
        </html>
