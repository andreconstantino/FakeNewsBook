<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
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
        .container-gui{
            padding: 10px;
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

<section class="container-gui">    
<h1 class="title">
Lorem ipisum dolor sit amet
</h1> 


<div class="box content box-gui" style="margin-bottom: 10px;">
<article>
<h5 style="padding-bottom:5px; margin-bottom: 0px;">lorem ipisum dolor a a a a a a a a  ament Teste kkk bla  </h5>
<span class="tag is-danger">Noticia Falsa</span>
<br/>

<span>23 horas</span>

</article>
<img src="https://bulma.io/images/placeholders/128x128.png">


</div>


<div class="box content box-gui" style="margin-bottom: 10px;">
<article >
<h5 style="padding-bottom:5px; margin-bottom: 0px;">lorem ipisum dolor a a a a a a a a  ament Teste kkk bla bla bla</h5>
<span class="tag is-success">Noticia Verdadeira</span>
<br/>
<span>23 horas</span>

</article>
<img src="https://bulma.io/images/placeholders/128x128.png">


</div>

<div class="box content box-gui" style="margin-bottom: 10px;">
<article>
<h5 style="padding-bottom:5px; margin-bottom: 0px;">lorem ipisum dolor a a a a a a a a  ament Teste kkk bla bla bla</h5>
<span class="tag is-success">Noticia Verdadeira</span>
<br/>
<span>23 horas</span>

</article>



</div>




<div class="box content box-gui" style="margin-bottom: 10px;">
<article>
<h5 style="padding-bottom:5px; margin-bottom: 0px;">lorem ipisum dolor a a a a a a a a  ament Teste kkk bla  </h5>
<span class="tag is-danger">Noticia Falsa</span>
<br/>

<span>23 horas</span>

</article>
<img src="https://bulma.io/images/placeholders/128x128.png">


</div>


        
</section>



</body>
</html>