<?php
   session_start();
?>

<!doctype html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
   body { 
    background: linear-gradient(#006699, #33cccc) fixed;
   }
   
  </style>
    
    
</head>

<body>
 
 
    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ПІБ</label>
        <input type="text" name="full_name" placeholder="Введіть своє повне ім'я">
        <label>Дата народження</label>
        <input type="text" name="datee" placeholder="Введіть дату народження">
        <label>Номер телефону</label>
        <input type="text" name="number" placeholder="Введіть номер телефону">
        <label>Номер паспорта</label>
        <input type="text" name="number_passport" placeholder="Введіть номер паспорта">
        <label>Дата видачі паспорта</label>
        <input type="text" name="data_passport" placeholder="Введіть дату видачі паспорту">
        <p> Згоден на використання персональних даних ? <input type="checkbox" name="parental"  /> так <p>
        <button type="submit">Подати дані</button>
        <p>
            У вас уже є сертифікат? - <a href="/">Ввести</a>!
        </p>
        
         
            
    </form>

</body>
</html>