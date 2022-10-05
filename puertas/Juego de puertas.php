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
<h1>Bienvenido a la primera paleta de opciones</h1>
<h2>Elige una de ellas</h2>

   <?php
   
  for($i=0;$i<2;$i++){
        if($i%4==0) echo "</br>";
          echo "<img src='galeria/cerrado.jpg' id='$i' onclick='go()'  class='img' />";

        }
  
   ?>  
 <script> 
          function go(){
              location.href=rutae();
          }


 function rutae(){
          var ruta="";
          var num2=Math.floor(Math.random() * 2);

          if(0==num2){
          ruta="./bad_ending.html";
              
          }else{
          ruta="./Estancia2.php";
          }
          
          return ruta;
          }
    </script> 
</body>
</html>