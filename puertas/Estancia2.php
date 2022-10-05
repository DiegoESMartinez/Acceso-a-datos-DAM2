<html>
<head>
<title>JUEGO DE PUERTAS</title>   
<style>
       body{
        background:url("galeria/fondo.jpg");

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
<h1>Bienvenido a la segunda paleta de opciones</h1>
<h2>Elige una de ellas</h2>


   <?php
   $aleatorio=rand(2,4);
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
        array[ale]="Juego%20de%20puertas.php";
        //Ir a la siguiente ventana
        var ale2=ale;
        while(ale2==ale)
                ale2=Math.floor(Math.random() * array.length-1);      
        array[ale2]="./Estancia3.php";
       
   }

   
 function link(){
          var num2=Math.floor(Math.random() * 2);

          if(0==num2){
          array[0] ="./bad_ending.html";
          array[1]="./Estancia3.php";
          }else{
         array[0]="./Estancia3.php";
         array[1]="./bad_ending.html";
          }
         
          }

    
   
   function go(i){
  
          if(<?php echo $aleatorio; ?>==2){
          link();}
          else{
          links();
          }

        location.href=array[i];
          
          }


 
    </script> 
</body>
</html>