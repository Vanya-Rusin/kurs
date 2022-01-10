<?php

    session_start();
    require_once 'connect2.php';
   

    $name = $_POST['name'];
    $second_name = $_POST['second_name'];
    $yes_no = $_POST['yes_no'];
   
   


        
        
 
        

   
 
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users2` (`id`, `name`, `second_name`, `yes_no`)
         VALUES (NULL, '$name', '$second_name', '$yes_no')");

        $_SESSION['message'] = 'Ви успішно внесли свої дані!';       
        header('Location: ../index.php');

    
?>
