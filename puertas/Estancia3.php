<html>
<head>
<title>JUEGO DE PUERTAS</title>   
<style>
       body{
        background:url("https://us.123rf.com/450wm/hypnocreative/hypnocreative1606/hypnocreative160600097/58598550-vector-de-estilo-vintage-dise%C3%B1o-floral-de-fondo-sin-patr%C3%B3n-flores-elegantes-repetir-patr%C3%B3n-de-superf.jpg");

        }

        h1{
                color:white;
                background:gray;
                width: 400px;
        }
        h2{
                color:white;
                background:gray;
                width: 300px;
        }

        .img{
                display:inline;
                height:400;
                width:250;
                margin-left: 70px;
                margin-right: 70px;
                margin-bottom: 50px;
                
        }

                
        img:hover{
                content: url("galeria/abierto.jpg");
        }

</style>       
</head>
<body>
<center>
<h1>Bienvenido a la tercera paleta de opciones</h1>
<h2>Elige una de ellas</h2>


   <?php
   $aleatorio=rand(3,6);
  for($i=0;$i<$aleatorio;$i++){
        if($i%4==0) echo "</br>";
          echo "<img src='./galeria/cerrado.jpg' id='$i' onclick='go($i)' class='img'/>";

        }
 
  ?>
</center>   
   
   
   <script> 
   var array=new Array(<?php echo $aleatorio; ?>);
   function links(){
        //Generamos un array para guardar los links
        for(var i=0;i<array.length;i++)
                array[i]="./bad_ending.html";


        //volver a la ventana anterior
        var ale=Math.floor(Math.random() * array.length-1);
        array[ale]="./Estancia2.php";
        //Ir a la siguiente ventana
        var ale2=ale;
        while(ale2==ale)
                ale2=Math.floor(Math.random() * array.length-1);      
        array[ale2]="./Estancia4.php";
       
   }

   
   function go(i){
  
  links();


location.href=array[i];
  
  }



 
    </script> 
</body>
</html>