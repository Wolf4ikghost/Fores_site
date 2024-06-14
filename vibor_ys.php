<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style type="text/css">

input[type="text"],

select{
	margin-left: 20%;
	width: 50%;
padding: 10px;
margin-bottom: 10px;
border-radius: 5px;
border: 1px solid #ccc;
}
input[type="submit"]{
	margin-left: 20%;
	width: 50%;
padding: 10px;
margin-bottom: 10px;
border-radius: 5px;
border: 1px solid #ccc;
border-radius: 5px;
border: none;
background-color: #007bff;
color: #fff;
cursor: pointer;
/* display: block;
margin-left: 15px;
width: 90%;
padding: 10px;
border-radius: 5px;
border: none;
background-color: #007bff;
color: #fff;
cursor: pointer;*/

}
.fr1{
display: flex;
flex-direction: column;
width: 400px;

}


main{

display: flex;
justify-content: center;

}
.One_txt{
	margin-top: 1rem;
	font-size:1.5rem;
	color: #E7C697;
	font-family: Arial Black;
display: flex;
justify-content: center;


}
.two_txt{

margin-top: 1rem;
	font-size:1.5rem;
	color: #E7C697;
	font-family: Arial Black;
display: flex;
justify-content: center;




}
.ob_main{
border-radius: 10px;
margin-top: 20%;
width: 1000px;
height: 800px;
background-color:white;


}
.razdelenie{
height: 1px;
margin-top: 10px;
width: 1250px;
background-color:#F5F5F5;

}

.two_ob_maim{
	margin-top: 1rem;
margin-top: 
width: 1250px;
height: 1250px;
display: grid;
grid-template-areas: "c a d";

}
p{
display: flex;
	padding-top: 20px;
	justify-content: center;

}
.c{

	 opacity: 0.45;
  transition: opacity 0.5s;


	border-radius: 10%;
	margin-left: 2.5rem;
	grid-area: c;
	width: 12rem;
	height: 4rem;
	background-color: #DBD7D2;}
.c:hover{
	 cursor:pointer;
  opacity: 1.0;
  transition: opacity 0.5s;
}



.a{


	 opacity: 0.45;
  transition: opacity 0.5s;

border-radius: 10%;
	grid-area: a;
	width: 12rem;
	height: 4rem;
	background-color: #DBD7D2;


}

.a:hover{
	cursor:pointer;
	  opacity: 1.0;
  transition: opacity 0.5s;


}



.reg_prav{
margin-top: 15px;





}

.txtprav{

font-size: 1rem;





}
form{
display: flex;
justify-content: center;
flex-direction: column;


}

/* Модальное окно*/

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.5);
}

.modal-content {
  background-color: #fff;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50rem;
  height: 20rem;
  border-radius: 20px;
}



</style>
<body>
 <div class="modal" id="modal"><!--Вёрстка модального окна -->

    <div class="modal-content">
    <div class="md-header">Регистрация,прав</div>
<form class="fr1" method="post">
<!--

<?php


$fields = array(array("Фио", "char", "name", array("required" => true)),
                array("Email", "email", "email"),
				array("Выбор  прав", "enum", "theme", array("empty_value" => "Не выбрано", "required" => 1,
				"values_list" => array("business" => "Организационный вопрос",
										"tecnical" => "Технический вопрос",
										"commertial" => "Коммерческое предложение",
										"other" => "Другое"))),
               
);





/*
$form = new Form("Reg_prav"); 

$fields = array("char", "email");


/*$ob= $form -> setRequiredFields(array("name", "email", "theme"));//Обязательные поля
$poc_form=$form -> addRule("email", "email ", "Неверный формат почты");
$poc_form=$form -> addRule("email", "email ", "Неверный формат почты");
$form -> useTokenCSRF();
 */



$form = new Form($fields);

//Вывод всех полей формы, по умолчанию выводится рядами таблицы
echo $form -> display();
 
 if (!$form -> isValid()) {
 	echo $form -> displayErrors();
 }
else{
echo '<script type="text/javascript">alert("Данные успешно внесены в систему");</script>


';
}




//Вывод всех полей формы, по умолчанию выводится рядами таблицы






/*include_once 'views/site/db.class.php';
$podkl2=new DB("127.0.0.1","preddiplom_two","root","");*/	



/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$FIOe=$_POST["name"];
$pocte=$_POST["email"];

$vb_th=$_POST["theme"];

if (!empty($FIOe)&& !empty($pocte)&&!empty($vb_th)) {
			 echo '<script type="text/javascript">alert("Данные успешно внесены в систему");</script>


';

$result = $this -> db -> query("INSERT INTO reg_prav(ФИО,Почта,Выбор_прав)VALUES({$FIOe},{$pocte},{$vb_th})");


 



//$podkl2->addRow('reg_prav',array('ФИО'=>$FIOe,'Почта'=>$pocte,'Выбор_прав'=>$vb_th));
	}
	else{

echo '<script type="text/javascript">alert("Видимо какое-то из полей не заполненное,пожалуйста,заполниете его");</script>
';

	}



}


$form = new Form($fields);

//Вывод всех полей формы, по умолчанию выводится рядами таблицы
echo $form -> display();

*/	
	?>


<p><input type="submit" value="Отправить" /></p>
-->
</form>




	
      <form action="/vibor/" class="reg_prav" method="post">
		<input placeholder="ФИО" class="pole in" type="text" name="FIO">
		<div class="txtprav">Выбор вида транспортного средства</div>	
		<select  class="sel" class="sel_doc" name="vebr">
			<option value="zero"></option>
			<option value="Легковые">Легковые(до:3,5т)</option>
			<option value="Грузовые">Грузовые</option>
		</select>


		<input type="submit" value="Отправить" />
      </form>
    </div>


  </div>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)){

// Получаем данные из формы
    $form_data = array(
        'FIO' => $_POST['FIO'],
        'vebr' => $_POST['vebr'],
       
    );

    // Проверяем, чтобы все поля были заполнены
    $errors = array();

    if (!empty($form_data['FIO']) && !empty($form_data['vebr'])) {
echo '<script type="text/javascript">alert("Отлично,поля не пустые");</script>';       
    }
    
   else{

echo '<script type="text/javascript">alert("Заполните форму");</script>';  

   }
    

  
        $requests = new reg_prav();
        $new_request = $requests->getEmptyRecord();

        // Устанавливаем значения полей
        $new_request->FIO= $form_data['FIO'];
        $new_request->email	 = $form_data['vebr'];
       
        // Сохраняем заявку
        $id = $new_request->create();
  
}












 ?>







  



	
<main>
	
	<div class="ob_main">
		<div class="One_txt">Услуги физическим лицам</div>
		<div class="razdelenie">
			</div>
			<div class="two_txt">Гражданство,регистрация</div>
			<div class="two_ob_maim">
				<div class="c js-open-modal"><p>Права</p></div>
				<div class="a"><p>Загс</p></div>
				<div class="d"></div>	


			</div>

			
		


	</div>








</main>



<script type="text/javascript">
//Обработчик событий
document.querySelectorAll('.js-open-modal').forEach(item => {
  item.addEventListener('click', event => {
    document.getElementById('modal').style.display = 'block';
  });
});



window.addEventListener('click', event => {
  if (event.target == document.getElementById('modal')) {
    document.getElementById('modal').style.display = 'none';
  }
});


</script>

</body>
</html>