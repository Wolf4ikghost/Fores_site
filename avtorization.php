<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Администратор-вход</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="\media\css\for_admin.css">
	<link rel="stylesheet" type="text/css" href="\media\css\style.css">

</head>

<body>


<header id="herq">
	<div class="hero-container">
		<div class="environment"></div>
		<h2 class="hero glitch layers" data-text="認証/登録"><span>Author/Registra</span></h2>
	  </div>
	

</header>





	<main>
  <div class="mmm">
    <form class="fr2" method="post">
      <input class="pole" type="text" maxlength="50" placeholder="ФИО" name="FIO">
      <label>Год рождения</label><br>
      <input class="pole" type="date" maxlength="10" name="dates"><br>
      <label>Почта</label><br>
      <input class="pole" type="email" maxlength="50" name="pocta"><br>
      <label>Выбор роли:</label><br>
      <select class="sel"  name="choice">
        <option value="first">Администратор</option>
        <option value="second" selected>Пользователь</option>
        <option value="tree" selected></option>
      </select>
      <input  id="subm"  onclick="input_in_admin()" type="submit" name="onet">
    </form> 
    <div class="podval2">
      <ul class="list">
        <li class="one"><a href=""> Регистрация</a> </li>
        <li class="two">Авторизация</li>
      </ul>
    </div>
  </div>
</main>

	


<?php
include_once 'site/db.class.php';
$podkl=new DB("127.0.0.1","preddiplom_two","root","");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if(!empty($Fio2)){
$Fio2=$_POST["FIO1"];
$prov=$podkl->selectRow("Admin_roli");


		if($Fio2 == $prov){
echo '<script type="text/javascript">alert("Всё отлично");</script>';


		}
		else{
echo '<script type="text/javascript">alert("Плохо дело");</script>';

		}


}
}



 ?>






<?php
include_once 'site/db.class.php';

$podkl=new DB("127.0.0.1","preddiplom_two","root","");
$mas = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$FIO = $_POST["FIO"];

$ROJD = $_POST["dates"];
$poc = $_POST["pocta"];
$rol = $_POST["choice"];
	if (!empty($FIO)) {
		 $hasNumber = false;
    for ($i = 0; $i < strlen($FIO); $i++) {
        if (is_numeric($FIO[$i])) {//Проверка поле ФИО на чсиленность,с помощью массива
        	 echo '<script type="text/javascript">alert("ФИО норм");</script>';
            $hasNumber = true;
            break;
        }
    }
    
    if ($hasNumber) {
        echo '<script type="text/javascript">alert("ФИО содержит числа");</script>';
    } else {
        echo '<script type="text/javascript">alert("ФИО верное");</script>';
		

		
    }
	}
	else{

		echo '<script type="text/javascript">alert("ФИО пустто");</script>';
	}
   


    if (!empty($ROJD)) {
    	echo '<script type="text/javascript">alert("Дата Рождения-заполнена");</script>';
    }
    else{

		echo '<script type="text/javascript">alert("Дата Рождения-не заполнена");</script>';


    }
$vall=array("/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i");//Проверка(регулярки),на правильность почты.

    for ($i=0; $i <count($vall) ; $i++) { 
    	if (preg_match($vall[$i], $poc)) {
        echo '<script type="text/javascript">alert("Почта норм");</script>';
    } else {
        echo '<script type="text/javascript">alert("Почта не норм");</script>';
    }
    break;
}

//Перенаправлнгтн по выделенному значение
$selectedValue = $_POST['choice'];
if ($selectedValue === 'first') {
	
header('Location: http://localhost/meny/'); // перенаправление на страницу для администратора
    exit();
}
elseif($selectedValue === 'second'){ 
	
	$podkl->addRow('User_roli',array('FIO'=>$FIO,'RoJD'=>$ROJD,'pochta'=>$poc));
	
	header('Location: http://localhost/meny/');exit;
	

}
	



}



 ?>
 
 <!--
<script type="text/javascript">
	function input_in_admin() {
			const btn=document.getElementById('subm');
		
			const pas=document.getElementsByClassName('sel').value;

		if (selectedValue === 'first') {
            window.location.href = "/for_admine.php"; // перенаправляем на страницу для администратора
        } else if (selectedValue === 'second') {//Сравнение типитизации 
            window.location.href = "/for_user.php"; // перенаправляем на страницу для пользователя
        }


</script>

-->

	
</body>
</html>