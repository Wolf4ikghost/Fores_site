<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Страница входа</title>
<link rel="stylesheet" href="JAP.css">
</head>

<style type="text/css">
main {
display: flex;
flex-direction: column;
}
.w-70 {
width: 70%;
}
body {
font-family: Arial, sans-serif;
background-color: #f4f4f4;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0;
}

.card {
background-color: #fff;
padding: 20px;
border-radius: 5px;
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

input[type="text"],
input[type="password"],
input[type="date"] {
width: 90%;
padding: 10px;
margin-bottom: 10px;
border-radius: 5px;
border: 1px solid #ccc;
}
	button {
display: block;
margin-left: 15px;
width: 90%;
padding: 10px;
border-radius: 5px;
border: none;
background-color: #007bff;
color: #fff;
cursor: pointer;
}

button:hover {
background-color: #0056b3;
}
</style>

<body>
<div class="card">
<h2>Регистрация</h2>
<form  class="registracia"  method="post">





<input type="text" name="FIO" placeholder="ФИО">
<input type="date" name="birthday" >
<input type="text" placeholder="Почта" name="Gmail">
<button type="submit">Зарегестрироваться</button>




</form>

</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)){

// Получаем данные из формы
    $form_data = array(
        'FIO' => $_POST['FIO'],
        'birthday' => $_POST['birthday'],
    	'Gmail' => $_POST['Gmail'],
       
    );

    // Проверяем, чтобы все поля были заполнены
 //   $errors = array();

    if (!empty($form_data['FIO'])) {
      

      echo '<script type="text/javascript">alert("Отлично,ФИО не пустое");</script>';

      header('Location: http://localhost/userer/'); // перенаправление на страницу меню

   
    }
    else{ echo '<script type="text/javascript">alert("Пожалуйста,заполните ФИО");</script>';}
    
    if (!empty($form_data['birthday'])) {
          echo '<script type="text/javascript">alert("Отлично,Дата рождения не пустая");</script>';
      
      header('Location: http://localhost/userer/'); // перенаправление на страницу меню
       
    }
    else{ echo '<script type="text/javascript">alert("Пожалуйста,заполните Дату Рождения");</script>';}

     if (!empty($form_data['Gmail'])) {
        echo '<script type="text/javascript">alert("Отлично,поле почты не пустая");</script>';
    }
    else{echo '<script type="text/javascript">alert("Пожалуйста,заполните Gmail");</script>';}
    

 
 
        $requests = new registracia();
        $new_request = $requests->getEmptyRecord();

        // Устанавливаем значения полей
        $new_request->FIO= $form_data['FIO'];
        $new_request->Birthday	 = $form_data['birthday'];
       $new_request->Gmail	 = $form_data['Gmail'];
        // Сохраняем заявку
        $id = $new_request->create();

        





}




 
?>









</body>
</html>