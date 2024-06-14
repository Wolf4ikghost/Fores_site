<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width	, initial-scale=1.0">
	<title>Document</title>
	
<link rel="stylesheet" type="text/css" href="\media/css\for_glavn_stranica.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style type="text/css">
	
body{
background: var(--container-bg-color);

		height: 100%;
}
	
</style>
<body>
	<div class="header" style="background-image: url(media/images/doc_Pic.jpg);
	
  height: 200px;
background-repeat:no-repeat;
background-size: 100% ;
background-position:50%;
background-width:20%;
box-shadow: 0.375em 0.375em 0 0 rgba(15, 28, 63, 0.125);
	" >

	

			<div id="elipse" style="
	
	display: flex;
	padding-bottom: 3rem;
	background: white;
	border-color: black;
  
  border-radius: 50%;
  box-shadow: 0.375em 0.375em 0 0 rgba(15, 28, 63, 0.125);
height: 10.5em;
  width: 10.5em;
			">
	<div class="Text" style="
	margin-top: 2.5rem;
margin-left: 50rem;
font-family: Arial Black;
  font-size: 50px;
  color: white;
  display: flex;
  justify-content: center;

	">FMD</div>				
			</div>



	</div>

<div class="main">	<!--Вёрстка main -->
		<div class="wrap-main">
			
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="media\images\one.jpg" style="width:100%">
      <div class="text">СемьЯ</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="media\images\two.jpg" style="width:100%">
     <div class="text">Caption Three</div>
  </div>
</div>
<br>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
	<div class="footer" style="
	margin-top: 10%;
	background-color: gray;
	width: 100%;
		height: 5rem;
border-radius: 25px;
	"><!--Вёрстка подвала -->
		<div class="wrap_for_list">
			
            <input type="button" value="Тема" id="toggle-theme" />
  			
				<div class="one_li" ><a class="hrf" href="https://vk.com/wolf4ik_bly">Об авторе</a>  </div>
				

				<div class="dropdown">
  						<button onclick="f();"  class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    						Выбрать из меню:
 						 </button>
  						<ul class="dropdown-menu dropdown-menu-dark">
    						<li><a class="dropdown-item active"  href="http://localhost/avtorization/"
							
							
							
							>Регистрация</a></li>
  						</ul>
				</div>

			</div>

		</div>
<!--
<script type="text/javascript">
	const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
function f() {
	for (var i = 0; i < dropdownElementList.length; i++) {
	if (dropdownElementList[i].contains(document.activeElement) && document.activeElement.tagName !== 'A'){	
window.location.href = "/админ-вход.html";

	}
		}
			}


</script>

-->






<script type="text/javascript">
  //Смены темы
	 const toggleBtn = document.querySelector("#toggle-theme");
        toggleBtn.addEventListener("click", function() {//Описание функции на переключение с ветлой на тёмную тему и аналогично наоборрот
          if(document.documentElement.hasAttribute("theme")){
            document.documentElement.removeAttribute("theme");
          }
          else{
            document.documentElement.setAttribute("theme", "dark");
          }});




//Написание js кода для карусели
var slideIndex = 0;
showSlides();//Вызов функции

function showSlides() {//Функция на поках слайда
    var i;
    var slides = document.getElementsByClassName("mySlides");//Обращение по классу к img
    for (i = 0; i < slides.length; i++) {//Перебор индексов слайда
        slides[i].style.display = "none";
    }
    slideIndex++;//Автоинкримент с каждого перебора
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Изменяет картинку в течении двух секунд
}




</script>
</body>
</html>