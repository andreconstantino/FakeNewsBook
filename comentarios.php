<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakeanalyzermock";

$Titulo = "";
$Id = "";
$Texto = "";
$Texto2 = "";
$Data = "";
$Foto = "";
$Status = "";
$Visualizacao = "";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM comentarios";
$result = $conn->query($sql);


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <style>
        .container-gui{
            
            margin-bottom: 30px;
        }
        .title{
            font-size: 2rem;
            margin-bottom: 100px;            
        }
        hr{
            margin: 10px 0;
        }
        .button-gui{
            margin-top:20px;           
        }
        .element{
            margin: 3px 0px;
        }
        .comentario h6{
            margin-bottom:0px;
        }
        .comentar{
          display: flex;
        }
   
    </style>



  </head>
  <body>
  <section style="padding-top: 0px; padding-bottom:0px;" class="section">
    <div class="container-gui content ">

        <?php
        
        if ($result->num_rows > 0) {

            echo "<h6 style='margin-bottom:0px;';><i class='far fa-comments'></i> Comentarios ($result->num_rows)</h6>";
            echo "<hr/>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
              
              

              ?>
                <div class="comentario">
                    <div style=" display:flex; justify-content:space-between">
                    <label style="margin-bottom:0px;"><?php echo $row['username'];?></label> 
                    <label>
                    <span class="icon-text">
                        <span class="icon">
                        <i class="far fa-calendar-check"></i>
                        </span>
                        <span><?php echo $row['data'];?></span>
                    </span>
                    </label> 
                    </div>
                    <p><?php echo $row['comentario'];?></p>          
                </div>
                <hr/>
              <?php
          
            
             
            }
            if($result->num_rows >5){
            echo "<button class='button is-small is-info is-outlined'>Ler mais comentarios</button>";
            }
          } else {
            echo "0 results";
          }
          
        $conn->close();
        
        ?>
    
        

        
        
        
        
        
    </div>
    <div class="container-gui content">
        <h6 style='margin-bottom:5px;';> Comentar </h6>

        <div class="comentar">
        
       
        <input class="input" type="text" placeholder="Escreva um comentario">

        <button style="margin-left:5px;" class=" button is-info">Comentar</button>          
        
        </div>
       
        
    </div>
   
    <hr/> 
  </section>
 
  </body>
</html>