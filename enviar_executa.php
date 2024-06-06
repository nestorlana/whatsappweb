<html>

	<head>
        <title>Enviar mensagem de WhatsApp sem ter o contato na agenda</title>
            <meta name="title" content="Enviar mensagem de WhatsApp sem ter o contato na agenda">
            <meta name="description" content="Dica de WhatsApp">
            <meta itemprop="image" content="logo.jpg">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

<body>
        
<?php
// Inclui os arquivos de CSS e JS do Bootstrap
include "bootstrap.php";
?>

<?php
//include "conecta_banco_de_dados.php"; // Realiza a conexão com o banco de dados
?>

<?php
// Recebendo o IP do Visitante
$ip_de_acesso = $_SERVER["REMOTE_ADDR"];
// echo "ip_de_acesso = ".$ip_de_acesso."<br>"; 
?>

<div class="container" align="center">
    <div class="row" align="center"> 
        <div id="principal" class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 col-xl-4 col-xl-offset-4">
	        
		<img src='banner.jpg' width='100%'>
		<br>

<?php
//Recebendo dados do formulário
$cod_pais = $_POST["cod_pais"];
// echo "cod_pais = ".$cod_pais."<br>";

$cod_ddd = $_POST["cod_ddd"];
// echo "cod_ddd = ".$cod_ddd."<br>";

$nr_telefone = $_POST["nr_telefone"];
$nr_telefone = trim($nr_telefone, ' '); // Retira espaços a esquerda e a direita da string
$nr_telefone = str_replace('-', '', $nr_telefone); // Retira o caracter '-'
// echo "nr_telefone = ".$nr_telefone."<br>";

$mensagem = $_POST["mensagem"];
$mensagem = trim($mensagem, ' '); //Retira espaços a esquerda e a direita da string
$mensagem = str_replace('-', '', $mensagem); // Retira o caracter '-'
$mensagem = str_replace(' OR ', 'OROR', $mensagem); // Modifica a string 'OR'
$mensagem = str_replace(' or ', 'OROR', $mensagem); // Modifica a string 'OR'
$mensagem = str_replace(' = ', '====', $mensagem); // Modifica a string 'OR'

// Definindo msg padrao
$mensagem = "Envie mensagens de WhatsApp sem precisar de salvar o contato na agenda.%0a%0ahttps://www.minutociber.com.br/whatsapp/enviar.php" ;

// echo "mensagem = ".$mensagem."<br>";

echo "<br><strong><font size='6'>A mensagem </font>";
// echo "<br><font size='2'>".$mensagem."<br></font>" ;
echo "<font size='5'>está pronta para ser enviada pelo WhatsApp para o número<br><br></font><font size='5'>+".$cod_pais."".$cod_ddd."".$nr_telefone."</strong></font>";

$link = "https://api.whatsapp.com/send?phone=".$cod_pais."".$cod_ddd."".$nr_telefone."&text=".$mensagem."" ;

// echo "link = ".$link."<br>";

echo '<br><br><br><a href="'.$link.'" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Enviar mensagem</a>' ;


?>
      	  
		  </div>
	</div>
</div>

<div style="position:fixed; bottom:10px; right:10px;">
	<a href='https://api.whatsapp.com/send?text=Envie mensagem de WhatsApp sem ter que salvar o contato na agenda.%0A%0Ahttps://www.minutociber.com.br/whatsapp/enviar.php'><img src='compartilhar_whatsapp.gif' width='150'></a>
</div>

<div style="position:fixed; bottom:10px; left:10px;">
	<a href='enviar.php'><img src='voltar.gif' width='150'></a>
</div>



<?php
// Fecha a conexao com o Banco de Dados
mysql_close();
?>

</body>
</html>
