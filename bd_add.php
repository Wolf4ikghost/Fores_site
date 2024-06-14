<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration_user</title>
	   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style type="text/css">
body{
height: 100%;
background-color: #F8F8FF;


}

.main{
	margin-top: 15rem;

	display: flex;
	justify-content: center;


}



.pole{
	border: 1px solid rgb(0,0,0);
margin-bottom: 0.9rem;
border-radius: 15px;
border-color: black;
padding: 5px 20px 0px 5px;
}
table{
display: flex;
justify-content: center;
margin-top: 6rem;



}
td{ text-align: left;
	width: 250px;
	padding: 10px;
	border: 1px solid rgb(0, 0, 0);}
th{ text-align: center;
	width: 250px;
  padding: 10px;
	border: 1px solid rgb(0, 0, 0);}

#btn{
background-color: white;
border-color: black;
border-radius: 10px;
width: 12rem;
padding: 2px;


}
.for_thems{
width: 50px;
height: 50px;
background-color: gray;



}
.wrap_main{
	padding: 25px;
	display: flex;
	justify-content: center;
width: 15%;
background-color:  silver;
border:1px solid black;
border-color: black;
border-radius: 25px;



}


</style>
<body>














<!--
<div class="for_thems">
<div class="dropdown" data-bs-theme="light">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
    Default dropdown
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
    <li><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>

<div class="dropdown" data-bs-theme="dark">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonDark" data-bs-toggle="dropdown" aria-expanded="false">
    Dark dropdown
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonDark">
    <li><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>



	</div>



-->



<div class="main">



	<div class="wrap_main">
		<form method="POST"><!--Глабольный массив Post -->
			<label name="id	"></label>
			<input maxlength="65" type="text" class="pole" placeholder="ФИО" name="FIO"><br/>
			<input type="tel" maxlength="10" class="pole" placeholder="Телефонный номер"  name="Phone"><br/>
			<input type="text" maxlength="65" class="pole" placeholder="Место проживания"  name="Projiv"><br/>
			<input type="submit" id="btn" name="btn">

		</form>
	</div>
</div>





	

<?php 

$FIO=$_POST["FIO"];
$Phone=$_POST["Phone"];
$Projiv=$_POST["Projiv"];



include_once 'db.class.php';
$podcl= new DB('127.0.0.1','preddiplom_one_doc_oborot','root','');//Подключение к базе Данной PhpMyAdmin


$dr=$podcl->selectRow("new_clients");//Использование готового метода для отображения данных из phpMA 
$dn=$podcl->updateRow("new_clients",$id="id",array('FIO'=>$FIO,'phone'=>$Phone,'mesto_projivanie'=>$Projiv));



echo "<main> ";
echo "<table> ";
echo "<tr><th>FIO</th><th>Phone</th><th>Projiv</th></tr>";	



if ($dr !== false && count($dr) > 0) {

 foreach ($dr as $row) {
        echo "<tr>";
        echo "<td>" . $dr['FIO'] . "</td>";
        echo "<td>" . $dr['phone'] . "</td>";
        echo "<td>" . $dr['mesto_projivanie'] . "</td>";
        echo "</tr>";
    }









}








echo "</table>";
echo "</main>";





if($_SERVER['REQUEST_METHOD'] == 'POST'){






/*while ($row = $dr -> fetch()) {

	 echo "<tr>";

    echo "<td>" . $row['FIO'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['mesto_projivanie'] . "</td>";
    echo "</tr>";
   
	

		}	
*/










if (!empty($_POST["FIO"])&& !empty($_POST["Phone"]) && !empty($_POST["Projiv"])) {
	



	echo '<script type="text/javascript">

 alert("Всё ок");

</script>';








$podcl->addRow('new_clients',array('FIO'=>$FIO,'phone'=>$Phone,'mesto_projivanie'=>$Projiv));


	}

else {
     echo '<script type="text/javascript">

 alert("Пожалуйста, заполните все поля формы");

</script>';    
    }
}

?>


</body>
</html>