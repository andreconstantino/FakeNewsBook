<?php

if(isset($_GET['id'])){



$IdNoticia = $_GET['id'];







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

$sql = "SELECT * FROM noticia WHERE id = $IdNoticia;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $Titulo = $row["titulo"];
    $Id = $row["id"];
    $Texto = $row["texto"];
    $Texto2 = $row["texto2"];
    $Visualizacao = $row["visualizacao"];
    $Data = $row["data"];
    $Status = $row["status"];
    $Foto = $row["foto"];


   
  }
} else {
  echo "0 results";
}
$conn->close();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>

        .container-gui{            
            
        }
        .title{
            font-size: 2rem;
            padding-bottom:0px;
            margin-bottom:0px;
        }
        .subtitle{
            font-size: 1.50rem;
        }
        .button-gui{
            margin-top:20px;           
        }
        h1{
            margin-bottom:0px; 
        }
        .title:not(:last-child){
            margin-bottom:10px;
        }
        .container-gui img{
            max-width:100%;
            max-height: 200px;
            background-color:#C1CDC1;
            
            
            margin-top:10px;
            margin-bottom:10px;

        }
        .section {
            padding: 2rem 1.5rem;
        }
        
        
    
    </style>

  </head>
  <body>
  <section style="padding-bottom:0px" class="section">
        
    <div class="container-gui content is-medium">
        <a href="principal.php" class="button">
            <span class="icon">
            <i class="fas fa-arrow-left"></i>
            </span>
            <span>Voltar</span>
        </a>
        <h1 style="margin-top: 5px;">
            <?php echo $Titulo;?>
        </h1>
        
        <?php 
        

        if($Status == 0){
            echo"<span class='tag is-success is-large'>Notícia verdadeira</span>";

        }else{
            echo"<span class='tag is-danger is-large'>Notícia falsa</span>";
        }
        ?>

        
        




        
        <br/>
        
        <img class="img-gui" src="data:image/jpeg;base64,<?php echo base64_encode( $Foto ); ?>" />

        

        <p >
            <?php echo $Texto;?>        </p>
        <p >
            <?php echo $Texto2;?>        </p>
        </p>
        <hr/>
        <div  style="height: 50px; font-size:15px; display:flex; justify-content:space-between">
            <div >
            <span class="icon-text">
                <span class="icon">
                    <i class="far fa-calendar-alt"></i>
                </span>
                <span><?php echo $Data;?></span>
            </span>
            <br/>
            <span class="icon-text">
                <span class="icon">
                    <i class="far fa-eye"></i>
                </span>
                <span><?php echo $Visualizacao;?></span>
            </span>
            </div>
            
            <div style="max-width:50%;">
            <p style="margin-bottom:0px;">Compartilhar</p>
            <p class="buttons">
                
                <button class="button" style="background-color:#8b9dc3">
                    <span class="icon">
                        <i class="fab fa-facebook"></i>
                    </span>
                    
                </button>
               
                <button class="button" style="background-color:#25D366">
                    <span class="icon is-small">
                        <i class="fab fa-whatsapp"></i>
                    </span>
                    
                </button>
            </p>
            <div>
        </div>

        

        

  
    </div>
  </section>
  </body>
</html>

<?php


include 'comentarios.php';

}
else{
    echo "deu ruim";
}

?>