<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/header_footer.css">
    <link rel="stylesheet" href="/css/style_standart.css">
    <title>Portfolio</title>
</head>
<body>
 
<header>
    <h1><p>PORTFOLIO</p></h1>
<nav role="navigation">
  <ul>
    <li><a>MENU</a>
      <ul class="dropdown">
        <li><a href="/index.html">Главная</a></li>
        <li><a href="/html/gallery.html">Фотогалерея</a></li>
        <li><a href="/html/resume.html">Резюме</a></li>
      </ul>
    </li>
  </ul>
</nav>
    
</header>
    
<div id="container">
    <span id="slider">
            <img id="image" src="/css/img/gallery/photo1.jpg" onClick="randomimg(0, imgs.length);">
    </span>
    <form name="pic_form" id="pic_forma">
        <p>Ширина:<input type="number" name="inputWidth" value=""></p>
        <p>Высота:<input type="number" name="inputHeight" value=""></p>
        <p>Рамка:<input type="number" name="inputBorder" value="0"></p>
        <input type="button" value="Изменить" onclick=" correct_number();">
    </form>    
</div> 
<!-- DOWNLOAD-->
<form id="download_form" action="/php/upload.php" method="post" enctype="multipart/form-data">
    Выберите изображение для загрузки:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Загрузить" name="submit">
</form>
    
<footer>
    <div>
    	<p>E-mail:<a href="mailto:svtrupkina@gmail.com"> svtrupkina@gmail.com</a></p>
    	<p>Telegram:<a title="Telegram" href="tg://resolve?domain=SvetokTrue"> @SvetokTrue</a></p>
    </div>
</footer>
    
<script>  
       //случайная картинка
    var image=document.getElementById("image");
    var imgs = new Array(
        <?php 
        $dir = '/var/www/html/css/img/gallery/'; 
        $img_files = preg_grep('/^([^.])/', scandir($dir));// проигнорировать . и ..
        $i = 1;
        foreach ($img_files as $f) {
			echo "'/css/img/gallery/" . $f . "'";
			if ($i++<count($img_files)) echo ",";
		}
		?>);
        function randomimg( min, max) {
			var randNum = Math.floor(Math.random() * (max - min)) + min; //случайное число
			image.src=imgs[randNum]; 
		}
		
    
</script> 
<script>
        var form_var = document.forms["pic_form"];
        var width_var = form_var.elements["inputWidth"];
        var height_var = form_var.elements["inputHeight"];  
        var border_var = form_var.elements["inputBorder"];
		
         function correct_number(){
			if (width_var.value > 0 && height_var.value > 0 && border_var.value >=0 ){
				pic_change();
			}
			else alert("Неправильно заполненое поле");
		}
       function pic_change() {
				 image.width = width_var.value;
				 image.height = height_var.value;
				 image.border = border_var.value;
		}
		/*
		 .replace( /(\-|\+)/g, "");
		*/
</script> 
</body>
</html>