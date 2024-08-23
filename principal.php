
<?php
include("./nav_bar.php");

$valor_pesquisa = "a";

if (!empty($_GET['valor_pesquisa'])) {
  $valor_pesquisa = $_GET['valor_pesquisa'];

}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakeanalyzer";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
 
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fake news book</title>
    <link rel="icon" href="img/mini-logo.png">
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load( {
        'packages':['geochart'],
        // Note: Because this chart requires geocoding, you'll need mapsApiKey.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);



   
      


    function drawRegionsMap() {

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Region');
      data.addColumn('number', 'Fake News');

      data.addRows([       
      <?php
        $sql_query_noticias = "SELECT estados.nome, noticia.titulo FROM estados INNER JOIN noticia ON estados.id = noticia.estados_fk";
        $result_query_noticias = $conn->query($sql_query_noticias);

        if ($result_query_noticias->num_rows > 0) {          
            
          while($row = $result_query_noticias->fetch_assoc()) {             
            echo "['",$row["nome"],"',1],";                          
          }
          echo("['',0]  ");            
        }
      ?>           
      ]);    

      var options = {            
        resolution: 'provinces', 
        region: 'BR',  
        colorAxis: {colors: ['purple']} 
      };

      var chart = new google.visualization.GeoChart(document.getElementById('geochart-colors'));
      chart.draw(data, options);
      };

      
    </script>

</head>
<body>
<br/>
<div class="container-gui">


<form method="GET" action="./principal.php">
  <div class="field has-addons">

    <p class="control is-expanded">
      <input class="input is-medium is-rounded" name="valor_pesquisa" type="text" placeholder="Procure uma noticia aqui">
    </p>
    <p class="control">
      <button type="submit" class="button is-medium is-primary is-rounded ">
        <i class="fas fa-search"></i>
    </button>
    </p>
  </div>
</form> 
      


<div class="tabs" >
  <ul>
    <li class="is-active"><a href="principal.php?filter=latest">Ultimas noticias</a></li>
    <li><a href="principal.php?filter=more">Mais visualizadas</a></li>
    <li><a href="principal.php?filter=all">Todas as notícias</a></li> 
    <li><a href="principal.php?filter=false">Apenas falsas</a></li> 
    <li><a href="principal.php?filter=true">Apenas verdadeiras</a></li>  
    
  </ul>
</div> 

<h4 class="title is-4">Mapa de noticias</h4>

<center>
  <div id="geochart-colors"  style="min-width:300px; max-width: 400px; height:auto;  "></div>   
</center>
<!--
<section class="container-gui content">

<h4 class="title" style="margin-bottom: 5px;">
Assuntos:
</h4> 

<div class="tags">
<?php
$sql_query_assuntos = "SELECT * FROM assuntos ";
$result_query_assuntos = $conn->query($sql_query_assuntos);

if ($result_query_assuntos->num_rows > 0) {
  while($row = $result_query_assuntos->fetch_assoc()) {
  echo "<span class='tag'>",$row["nome"],"</span>";
  }
}
?>  
  
</div>

</section>
-->
<br/>
<section class="container-gui content">    
<h3 class="title">
Notícias mais circuladas esta semana
</h3> 


<?php
//$sql = "SELECT * FROM `noticia` ORDER BY data DESC";

//$sql = "SELECT * FROM `noticia` WHERE `titulo` LIKE '%+$valor_pesquisa+%' OR `texto` LIKE '%+$valor_pesquisa+%' OR `texto2` LIKE '%+$valor_pesquisa+%' ORDER BY `data` DESC";

$sql = "SELECT * FROM `noticia` WHERE `titulo` LIKE '%$valor_pesquisa%' OR `texto` LIKE '%$valor_pesquisa%' OR `texto2` LIKE '%$valor_pesquisa%' ORDER BY `data` DESC ";



//$valor_pesquisa;

if(!empty($_GET['filter'])){



  switch ($_GET['filter']) {
    case "false":
      
      $sql = "SELECT * FROM `noticia` WHERE status = '1'";
     
      break; 
    case "true":
      
      $sql = "SELECT * FROM `noticia` WHERE status = '0'";
       
      break; 
    case "latest":
      
      $sql = "SELECT * FROM `noticia` ORDER BY data DESC";

      break;  
    case "more":
      
      $sql = "SELECT * FROM `noticia` order by visualizacao desc";
     
      break; 
    case "all":
      
      $sql = "SELECT * FROM noticia ";
      break;   
    default:
      echo "default";
      $sql = "SELECT * FROM noticia ";
  }




}




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
      $MiniFoto = $row["miniFoto"];
      
      
      //echo "----------";
      //echo $row["estados_fk"];
  
      


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