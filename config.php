<?php
$connection = mysqli_connect("localhost","root","root","person_crop");
if( $connection == false )
{
    echo 'Не вдалося підключитися до бази даних';
    echo mysqli_connect_error(); //вывод ошибки почему не подключилось
    exit();
}
