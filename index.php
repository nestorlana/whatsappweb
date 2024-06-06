<html>
	<head>
       <title>Envie mensagem de WhatsApp sem ter o contato na agenda</title>
            <meta name="title" content="Envie mensagem de WhatsApp sem ter o contato na agenda">
            <meta name="description" content="Dica de WhatsApp">
            <meta itemprop="image" content="imagens/logo.jpg">

		<meta http-equiv='refresh' content='0;URL=enviar.php'>
    </head>


    <body>
        
        <?php
        // Inclui os arquivos de CSS e JS do Bootstrap
        include "bootstrap.php";
        ?>
        
        <div class="container" align="center">
	        <div class="row" align="center"> 
		        <div id="principal" class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 col-xl-4 col-xl-offset-4">
  		            <img src="imagens/banner.jpg" width="350" >
  		            <br>
  		            <font size="4">
          		    <br>
      Este aplicativo foi desenvolvido para evitar que tenhamos que salvar um 
      contato na agenda do telefone apenas para poder enviar uma mensagem de WhatsApp<br>
      <br>
      Já foram realizados 
      <?php
                        // Contador de número de exercicios realizados
                            // Faz a inclusão do arquivo de conexão com Banco de Dados
                            include "conecta_banco_de_dados.php"; 
                            $sql_busca_registros = mysql_query ("SELECT * FROM whatsapp");
                            $total_registrados = mysql_num_rows($sql_busca_registros);
                            echo $total_registrados;
                        ?>
      envios de mensagens. <br>
      <br>
                    </font> 
        			
        			<a class="btn btn-primary btn-lg" href="enviar.php" role="button">Enviar mensagem</a>
        	</div>
        </div>
        
        
<div style="position:fixed; bottom:10px; right:10px;">
	<a href='https://api.whatsapp.com/send?text=Envie mensagem de WhatsApp sem ter que salvar o contato na agenda em www.lananet.com.br/whatsapp/enviar.php'><img src='imagens/compartilhar_whatsapp.gif' width='150'></a>
</div>
       
       <!--
        <div style="position:fixed; bottom:10px; left:10px;">
    	<a href='../'><img src='imagens/visitar_lananet.gif' width='150'></a>
        </div>
        -->
    </body>
</html>