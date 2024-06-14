<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style type="text/css">

body{
	height: 100%;
	width: 70%;
	margin-left: 15%;
}


/*header{
	margin-top: -6px;
	width: 100%;
height: 4rem;
background-color: gray;




}
*/
.one{
	border-radius: 10%;
	background-size: 180%;
background-image: url(/media/images/fiz_lico.png);
	grid-area: f;
		margin-left: 1rem;
		margin-top: 5rem;
width: 13rem;
height: 11.6rem;
background-color: gray;
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
/*background-image: url(); */
}
.two{
	box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
	border-radius: 10%;
background-image: url(/media/images/yr.jpg);
background-size: 99%;
grid-area: i;
margin-top: 5rem;
width: 13rem;
height: 11.6rem;
background-color: gray;

}

a{
	color: white;
	font-family: Arial Black;
	text-decoration: none;


}

.three{
	border-radius: 10%;

	margin-left: 1rem;
	grid-area: b;
	margin-top: 5rem;
	width: 13rem;
height: 13rem;
background-color: gray;
}
.foure{
	border-radius: 10%;

grid-area: c;
margin-top: 5rem;
width: 13rem;
height: 13rem;
background-color: gray;
}
.Text{
	color:black;
	margin-top: 1rem;
	margin-left: 1.5rem;
font-size: 1rem;
font-family: Arial Black;
}
.wr_main{
	display: flex;
display: grid;
box-shadow: 1px;
  margin-top: 15rem;
  width: 35%;
height: 750px;
margin-left: 2rem;
grid-template-areas: "f i "
					 "b c";
}
 .wr_footer{

display: flex;
flex-direction: column;


 }


.razdel{


padding-top: 2px;
width: 100%;
background-color:#00cccc;
height: 0.3px;
}

.wrs{padding: 1rem;
 background-color: #48d1cc; height: 11rem;}
.footer{ 

margin-top: 20%;
	width: 100%;

height: 3rem;}
.fun_bt{
	font-family: Arial Black;
	 font-weight: bold;
	  color: #48d1cc;
	font-size: 2rem;
	display: flex; 
	flex-direction: row;
	justify-content: space-around;
}


.ones:hover{color: #00a693}
.tws:hover{color: #00a693}
.trs:hover{color: #00a693}


.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: visible;
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
overflow: auto;
}
.text_o_Doc{
margin-top: 2rem;
font-size: 15px;
font-style: italic;

}
</style>
<body>




<header>
	<div class="wrap_head">
		


	</div>



</header>

<div class="modal" id="modal"><!--Вёрстка модального окна -->

    <div class="modal-content">
    <div class="md-header">MFD-краткий экскурс</div>

<div class="text_o_Doc">Электронный документооборот на сайте "MFD" представляет собой современную систему, которая позволяет автоматизировать процессы обмена документами между различными участниками компании. С помощью данного инструмента можно быстро и эффективно обмениваться электронными документами, следить за их статусом, контролировать доступ к информации и многое другое. Благодаря использованию электронного документооборота можно значительно упростить и ускорить рабочие процессы, снизить риски потери документов и повысить общую эффективность работы организации.</div>

  </div>

</div>


<main>
<div class="fun_bt">
	<div class="c js-open-modal ones" style="
cursor: pointer;

	">О программе</div>
	<div class="tws">Полезные ссылки</div>
	<div class="trs"  ><a style="color: #00a693;" href="http://localhost/">MFD</a> </div>


</div>


<div class="razdel"></div>


	<div class="wr_main">
		<div class="one">

			
			<div class="razdel3" style="

margin-top: 12rem;
padding-top: 2px;
width: 100%;
background-color:#00cccc;


			"></div>
			<div class="Text"><a href="http://localhost/vibor/" style="
color: #00a693;
display: flex;
font-size: 11.7px;


			">Услуги физическим лицам</a></div>
				</div>



		<div class="two">
			<div class="razdel3" style="
margin-top: 12rem;
padding-top: 2px;
width: 100%;
background-color:#00cccc;


			"></div>
				<div class="Text"><a href="http://localhost/404" style="
color: #00a693;
display: flex;
font-size: 11.7px;

				"> Услуги юридическим лицам</a></div>
				</div>


<div class="three">	<div class="Text">Дополнительные (платные) услуги</div></div>




	</div>

	


	
















</main>

	
<div class="footer">
	<div class="wrs">
		<div class="wr_footer oneq">
			<h2>MFD</h2>
			<h3>Горячая линия</h3>
			<h4>8 8412 927-000</h4>




		</div>	

		<div class="wr_footer twoq">
			



			
		</div>	



<div class="razdel2" style="

height: 0.5px;

padding-top: 2px;
width: 100%;
background-color:white;



"></div>	

<h5 style="
padding-top: 5px;
display: flex;
justify-content: center;

">© 2024 «MFD». Демо продукт Самарской  области.</h5>


	</div>
	

</div>

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