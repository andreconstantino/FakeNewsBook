<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakeanalyzermock";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM noticia ";
$result = $conn->query($sql);


?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        *{
            box-sizing: border-box;
        }
        .field:not(:last-child) {
            margin-bottom: 0px;
        }        
        .map-gui{
            width:100%;
            height:250px;
        }

        .img-mini-noticia{
            width:100%;
            height:100%;
        }
        .mini-box-noticia{
            width:100%;
            height:100px;
            border: 1px solid #000000;
            display:flex;
            margin-bottom:10px;
        }
        .title-gui{
            font-size:20px;
        }
        .subtitle-gui{
            font-size:10px;
        }
        .box-gui{
            display:flex; justify-content:space-between;border: 1px solid #dbdbdb;
            margin-bottom: 10px;
            padding: 15px;

        }
        .container-gui{
            padding: 5px;
        }
        .box-gui article{
            padding-right:10px; padding-top:2px;
        }
        .box-gui img{
            width:100px;
            height:100px;
        }
    </style>

</head>
<body>



<div class="container-gui">

      
<div class="field has-addons">
  <div class="control is-expanded">
  <div class="control has-icons-left ">
    <input class="input " type="email" placeholder="Normal">
    <span class="icon is-left">
        <i class="fas fa-search"></i>
    </span>   
  </div>
  </div>
  <p class="control">
        <span class="select ">
        <select>
            <option>SP</option>
            <option>RJ</option>            
        </select>
        </span>
    </p>
    <p class="control">
        <span class="select ">
        <select>
            <option>7 dias</option>
            <option>30 dias</option>
            <option>100 dias</option>
        </select>
        </span>
    </p>
  
</div>

<img class="map-gui" src="https://lh3.googleusercontent.com/OOy8crH8HuezjHqrIEUvDnIjwO5v8A5JWwpz6SwQs-p3zvR54BARyVMUDCJlNTiDZfA=w374-rwa"/>

<section class="container-gui content">    
<h3 class="title">
Notícias mais circuladas esta semana
</h3> 


<?php

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
      $MiniFoto = $row["miniFoto"];
  
      


      ?>
    <a href="noticia.php?id=<?php echo $Id; ?>">  
    <div class="box content box-gui" style="margin-bottom: 10px;">
        <article>
            <h5 style="padding-bottom:5px; margin-bottom: 0px;"><?php echo $Titulo; ?>  </h5>
            <?php
            if($Status == 0){
                        echo"<span class='tag is-success '>Notícia verdadeira</span>";

                    }else{
                        echo"<span class='tag is-danger '>Notícia falsa</span>";
                    }
                    ?>
            <br/>
            <span><?php echo$Data;?></span>
        </article>
        <img src="data:image/jpeg;base64,<?php echo base64_encode( $MiniFoto ); ?>">
    </div>
    </a>  
      
      
      <?php
  
  
     
    }
  } else {
    echo "0 results";
  }
  $conn->close();

?>


       
</section>

</div>

</body>
</html>