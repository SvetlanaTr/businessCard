<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/header_footer.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Portfolio</title>
</head>
<body>
 
<header>
    <h1><p>PORTFOLIO</p></h1>
<nav role="navigation">
  <ul>
    <li><a>MENU</a>
      <ul class="dropdown">
        <li><a href="/html/gallery.html">Фотогалерея</a></li>
        <li><a href="/html/resume.html">Резюме</a></li>
      </ul>
    </li>
  </ul>
</nav>
    
</header>
<div id="div_cont">
   <div><img alt="my photo" src="/css/img/ya1.jpg"></div>
   <div id="slider"><input id="button_mys" type="button" value="О СЕБЕ" onclick="hideshow();"/></div>
   <div id="other">
    <p>Я, Трупкина Светлана Александровна, родилась 22 ноября 1998 года в городе Харькове. </p>

        <p>В 2005 году поступила в общеобразовательную школу <sup>№164</sup>. Во время учебного процесса с 06 сентября 2010 года по 2014 я проходила подготовку в Малой Компьютерной Академии филиале ООО <i>«Компьютерная Академия - ШАГ»</i> г. Харьков.</p>

        <p>В 2016 году хорошо окончила школу. В этом же году начала обучение в Харьковском Политехническом Институте «ХПИ», по специальности <i>«Компьютерные науки и информационные технологии».</i> </p>

        <p>В данный момент продолжаю обучение.</p>
      
        <p>Дополнительная информация:</p>
        
        <p>Во время учебного процесса я увлекалась рисованием, и дополнительно обучалась этому у студентки Харьковского национального университета строительства и архитектуры «ХНУСА»</p>
    
        <p>Так же посещала занятия дайвинга и подводной фотографии клуба «Дельта», во Дворце детского и юношеского творчества (Дворце пионеров). Хоть я и оставила занятия с клубом мне по сей день нравиться подводное плаванье и фото. В Моей фотогалерее можете оценить сделанные мною фото</p>
    
        <p>Интересуюсь разного рода мастерством, вроде: шитья, кулинарии, создание диорам в аквариуме. Интересны и более тяжелые виды творчества в виде ювелирного дела и резьбы по дереву гипсу и тд.</p>
        <p>По сей день увлекаюсь рисованием, плаваньем, и творением всего разнообразного.</p>
   </div>
</div>    

<footer>
    <div>
    	<p>E-mail:<a href="mailto:svtrupkina@gmail.com"> svtrupkina@gmail.com</a></p>
    	<p>Telegram:<a title="Telegram" href="tg://resolve?domain=SvetokTrue"> @SvetokTrue</a></p>
    </div>
</footer>
    
<script>
            function hideshow() {
              document.getElementById("slider").style="display:none";
              document.getElementById("other").style="display:block";
            }
</script>    
</body>


</html>
   <!--
    
    -->