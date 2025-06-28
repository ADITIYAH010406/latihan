<!DOCTYPE html>
<html>
    <head>
        <title>latihan 3a -ganti style</title>
        <style>
            .ganti-style{
                font-size: 28px;
                font-family:arial,sans-serif;
                color#1A0547;
                font-style:italic;
                font-weight:bold;
            }
            </style>
            </head>
            <body>

            <?php
            function ganti_style($tulisan,$kelas){
                return"<p class='$kelas'>$tulisan</p>"
            }

            $tulisan ="hello world here i come!";
            $kelas ="ganti-style";

            echo ganti-style($tulisan,$kelas);
            ?>
            </body>
            </html>