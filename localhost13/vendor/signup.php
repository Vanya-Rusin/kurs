<?php

    session_start();
    require_once 'connect.php';
   

    $full_name = $_POST['full_name'];
    $datee = $_POST['datee'];
    $number = $_POST['number'];
    $number_passport= $_POST['number_passport'];
    $data_passport = $_POST['data_passport'];
   

  

        
 
        

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `date`, `telephone`, `number_passport`,`data_passport`)
         VALUES (NULL, '$full_name', '$datee', '$number', '$number_passport','$data_passport')");

        $_SESSION['message'] = 'Дані успішно подані!';
        header('Location: ../index.php');
        

    
?>
