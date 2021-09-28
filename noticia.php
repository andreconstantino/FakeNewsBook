<?php
include("./nav_bar.php");


if (isset($_GET['id']))
{
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
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM noticia WHERE id = $IdNoticia;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        // output data of each row
        while ($row = $result->fetch_assoc())
        {
            $Titulo = $row["titulo"];
            $Id = $row["id"];
            $Texto = $row["texto"];
            $Texto2 = $row["texto2"];
            $Visualizacao = $row["visualizacao"];
            $Data = $row["data"];
            $Status = $row["status"];
            $Foto = $row["foto"];
        }
    }
    else
    {
        echo "0 results";
    }
    $conn->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!
    </title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .title {
        font-size: 2rem;
        padding-bottom: 0px;
        margin-bottom: 0px;
      }
      .subtitle {
        font-size: 1.50rem;
      }
      .button-gui {
        margin-top: 20px;
      }
      h1 {
        margin-bottom: 0px;
      }
      .title:not(:last-child) {
        margin-bottom: 10px;
      }
      .container-gui img {
        max-width: 100%;
        max-height: 200px;
        background-color: #C1CDC1;
        margin-top: 10px;
        margin-bottom: 10px;
      }
      .section {
        padding: 2rem 1.5rem;
      }
      .blur {
        text-shadow: 0 0 6px black;
        color: transparent;
      }
    </style>
  </head>
  <body>
    <div class="container-gui">
      <section style="padding-bottom:0px" class="section">
        <div class="container-gui content is-medium">
          <a href="principal.php" class="button"> 
            <span class="icon">
              <i class="fas fa-arrow-left">
              </i>
            </span> 
            <span>Voltar
            </span> 
          </a>
          <h1 style="margin-top: 5px;">
            <?php echo $Titulo; ?>
          </h1>
          <?php
    if ($Status == 0)
    {
        echo "<span class='tag is-success is-large'>Notícia verdadeira</span>";
    }
    else
    {
        echo "<span class='tag is-danger is-large'>Notícia falsa</span>";
    }
?>
          <br/> 
          <img class="img-gui" src="data:image/jpeg;base64,<?php echo base64_encode($Foto); ?>" />
          <p class="blur">
            <?php echo $Texto; ?>
          </p>
          <hr/>
          <div style="height: 50px; font-size:15px; display:flex; justify-content:space-between">
            <div> 
              <span class="icon-text">
                <span class="icon">
                  <i class="far fa-calendar-alt">
                  </i>
                </span> 
                <span>
                  <?php echo $Data; ?>
                </span> 
              </span>
              <br/> 
              <span class="icon-text">
                <span class="icon">
                  <i class="far fa-eye">
                  </i>
                </span> 
                <span>
                  <?php echo $Visualizacao; ?>
                </span> 
              </span>
            </div>
            <div style="max-width:50%;">
              <p style="margin-bottom:0px;">Compartilhar
              </p>
              <p class="buttons">
                <a class="button" style="background-color:#0178f6;color: white;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo(urlencode($_SERVER['REQUEST_URI']));?>">
                    <span class="icon">
                        <i class="fab fa-facebook">
                        </i>
                    </span> 
                </a>              
                <a class="button" style="background-color:#01e675; color: white;"
                href="https://api.whatsapp.com/send?text=<?php echo(urlencode($_SERVER['REQUEST_URI']));?>" 
                >
                <span class="icon is-small">
                    <i class="fab fa-whatsapp">
                    </i>
                  </span>
                </a>
              </p>
              <div> 
              </div>
            </div>
            </section>
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
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM comentarios2";
    $result = $conn->query($sql);
?>
          <!DOCTYPE html>
          <html>
            <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Hello Bulma!
              </title>
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
                <div  class="container-gui content ">
                  <div id="container_comentarios">
                  <?php
    if ($result->num_rows > 0)
    {
        echo "<h6 style='margin-bottom:0px;';><i class='far fa-comments'></i> Comentarios ($result->num_rows)</h6>";
        echo "<hr/>";
        $contador_comentarios = 0;
        
        
        while ($row = $result->fetch_assoc())
        {
          ?>

            <?php
            $flag_visualizador = "block";
            if ($contador_comentarios > 2)
            {
                $flag_visualizador = "none";
            }
            ?>
            <div class="comentario" style="display:<?php echo $flag_visualizador; ?>; ">




                      <div style=" display:flex; justify-content:space-between">
                        <label style="margin-bottom:0px;">
                          <?php echo $row['username']; ?>
                        </label> 
                        <label>
                          <span class="icon-text">
                            <span class="icon">
                              <i class="far fa-calendar-check">
                              </i>
                            </span>
                            <span>
                              <?php echo $row['data_comentario']; ?>
                            </span>
                          </span>
                        </label> 
                      </div>
                      <p>
                        <?php echo $row['comentario']; ?>
                      </p> 
                      <hr/>         
                    </div>
                    <?php
            $contador_comentarios++;
        }
        echo "<div id='add_comentario'/>";
        echo "</div>";
        echo "</div>";
        if ($result->num_rows > 3)
        {
?>
                    <button id="btn_mostrar_comentarios" onclick="mostrar_comentarios()" class="button is-small is-info is-outlined">Ver todos os comentarios
                    </button>
                    <br/>
                    <br/>
                    <div>
                      <?php
        }
    }
    else
    {
        echo "<p id='texto_nenhum_comentario'>Nenhum comentario</p>";
        echo "</div>";
        echo "</div>";
        echo "<div id='add_comentario'/>";
    }
    $conn->close();
?>
                    </div>
                    <form method="post" action="./postcomment.php">
                      <div class="container-gui content">
                        <h6 style='margin-bottom:5px;';> Comentar 
                        </h6>
                        <div class="comentar">
                          <input class="input" id="comentario" name="fname" type="text" placeholder="Escreva um comentario">
                          <button type="submit" onclick="myFunction()" style="margin-left:5px;" class=" button is-info">Comentar
                          </button>          
                        </div>
                      </div>
                    </form>
                    <hr/> 
                    </section>
                  </body>
                </html>
              <?php
}
else
{
    echo "nenhuma noticia selecionada";
}
?>
              </div>
            </body>
          </html>
        <script>

          
          function mostrar_comentarios(){
            const comentarios = document.querySelectorAll('.comentario');
            comentarios.forEach(element => {
              element.style.display = 'block';
            });


            //comando abaixo destroi o botão mostrar comentarios
            var el = document.getElementById( 'btn_mostrar_comentarios' );
            el.parentNode.removeChild( el );
          }





          function myFunction() {
            var el = document.getElementById('texto_nenhum_comentario');
            if(el  === undefined){
              el.parentNode.removeChild( el );
            }
            texto_comentario = document.getElementById('comentario').value;
            if(texto_comentario!== null & texto_comentario !== undefined & texto_comentario !== "" ){
              var d1 = document.getElementById('container_comentarios');
              d1.insertAdjacentHTML('beforeend', 
                    ` 
                    <div class="comentario" style="display:block">
                    <span style="margin-bottom:10px;" class="tag is-primary is-medium">Novo comentario!</span>
                    <div style=" display:flex; justify-content:space-between">
                    <label style="margin-bottom:0px;">"Seu comentário"</label> 
                    <label>
                    <span class="icon-text">
                    <span class="icon">
                    <i class="far fa-calendar-check"></i>
                            </span>
                    <span>Agora</span>
                            </span>
                            </label> 
                            </div>
                    <p>`+texto_comentario+`</p>          
                            </div>
                    <hr/>
                    <br/>
                    `);
            }
          }
        </script>
