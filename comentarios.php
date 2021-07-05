


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
    </style>



  </head>
  <body>
  <section class="section">
    <div class="container-gui">
        <h4 class="title is-4">Comentarios</h4>

        <hr/>
        <div class="comentario">
            <h6 class="title is-6">Username</h6>
            <h6 class="subtitle is-6">Comment bla bla bla..</h6>          
        </div>
        <hr/>
        <div class="comentario">
            <h6 class="title is-6">Username</h6>
            <h6 class="subtitle is-6">Comment bla bla bla..</h6>          
        </div>
        <hr/>
        <div class="comentario">
            <h6 class="title is-6">Username</h6>
            <h6 class="subtitle is-6">Comment bla bla bla..</h6>          
        </div>
        <hr/>
        <button class="button is-small is-info is-outlined">Ler mais comentarios</button>
        
    </div>
    <div class="container-gui">
        <h4 class="title is-4">Comentar</h4>

        <div class="comentar">
        
        <input class="element input is-small" type="text" placeholder="Escreva seu nome">
        <textarea class="element textarea is-small" placeholder="Escreva um comentario..."></textarea>
        <button class="element is-small button is-info">Comentar</button>          
        
        </div>
       
        
    </div>
   
    
  </section>
  </body>
</html>