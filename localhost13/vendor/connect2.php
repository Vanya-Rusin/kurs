<?php

    $connect = mysqli_connect('localhost', 'root', '', 'test2');

    if (!$connect) {
        die('Error connect to DataBase');
    }