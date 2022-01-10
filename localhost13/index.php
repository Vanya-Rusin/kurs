<?php 
session_start();
?>

<!doctype html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>Сертифікат</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
   body { 
    background: linear-gradient(#006699, #33cccc) fixed;
   }
   
  </style>
</head>
<body>
    

<!-- Форма авторизации -->

    <form action="vendor/signup2.php" method="post" enctype="multipart/form-data">
        <label>Ім'я</label>
        <input type="text" name="name" placeholder="Введіть  ім'я">
        <label>Фамілія</label>
        <input type="text" name="second_name" placeholder="Введіть фамілію">
        <label>Код сертифіката</label>
        <input type="text" name="yes_no" placeholder="Введіть код сертифіката">
        <p>Немає сертифіката? - <a href="/register.php">подайте документи</a>! </p>
        <button type="submit">Подати дані</button>
        <?php
            if ($_SESSION['message']) {
                echo '<p class= "msg"  style="border: 2px solid #ffa908;border-radius: 3px;padding: 10px;text-align: center;font-weight: bold;">' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
    ?>
        
    </form>
   
           
</body>
</html>