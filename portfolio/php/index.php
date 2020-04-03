<?php
echo "<script language="javascript">\n";
      //случайная картинка
        var image=document.getElementById("image");
        var imgs = new Array('./css/img/gallery/photo1.jpg','./css/img/gallery/photo2.jpg','./css/img/gallery/photo3.jpg','./css/img/gallery/photo4.jpg', './css/img/gallery/photo5.jpg','./css/img/gallery/photo6.jpg','./css/img/gallery/photo7.jpg','./css/img/gallery/photo8.jpg','./css/img/gallery/photo9.jpg');
    function randomimg( min, max) {
        var randNum = Math.floor(Math.random() * (max - min)) + min; //случайное число
        image.src=imgs[randNum]; 
    }
</script> 



?>