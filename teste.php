<?php
…
?>
<html>
	<head>
		...
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<style>			
            .box-new { /*classe para adicionar edições sobre o box bulma*/ 
                display: flex; /* Altera o modo de organização dos elementos dentro do box */
                justify-content: space-between; /*distribui os elementos de maneira uniforme colocando o primeiro no inicio e o segundo no fim*/
                border: 1px solid #dbdbdb; /*codigo em exadecimal de uma variação de cinza claro */
                margin-bottom: 10px; /*espaço de 10 pixels no na parte debaixo do box*/
                padding: 10px; /*espaço de 10 pixels dentro do box */
            }
            .box-new h5{
                margin-bottom: 0px; /*altera tamanho da margin para 0px;*/
            }
		</style>
    </head>	
    <body>
		...
		<a href="noticia.php?id=<?php echo $Id; ?>"><!-- link para noticia.php informando o id da noticia via HTTP GET -->
			<div class="box content box-new"> <!--utiliza classes box e content do bulma e a classe box-new criada acima na tag style -->
				<article><!--tag simples html que informando inicio da escrida de algo-->
					<h5><?php echo $Titulo; ?> </h5><!--utiliza tag de titulo 5 e le o conteudo da variavel titulo em php-->
					<?php
                        if ($Status == 0){ //verifica se variavel statu é 0 ou 1 como se fosse verdadeiro ou falso
                            echo "<span class='tag is-success '>Notícia verdadeira</span>";/*utiliza php para escrever tag html, 
                            classe tag, classe is success deixa o elemento com a cor verde*/
                        }else{
                            echo "<span class='tag is-danger '>Notícia falsa</span>";/**classe is danger deixa o elemento com a cor vermelha */
                        }
                    ?>
					<br/>
                    <span>
                        <?php echo $Data; ?> <!--Escreve na tela a data cotida da variavel data-->
                    </span> 
                </article> 
                <img src="data:image/jpeg;base64,<?php echo base64_encode($MiniFoto); ?>"><!--Converte a imagem em base 64
                 para o formato necessario pelo html e a mostra na tela--> 
            </div>
		</a>
    </body>    
    
</html>
