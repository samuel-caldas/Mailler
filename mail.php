<?php
//Define usuario e senha pra autentica��o e envio
$email='samuel.caldas@gmail.com';
$senha='samuel18';

//~~Defini��es da mensagem~~//
// Nome do rementente
$remetente='Samuel Caldas';
 
// assunto da mensagem
$assunto='Teste';
 
// corpo da mensagem
$corpoHTML='<p>Teste Html</p>';
 
// corpo da mensagem em modo texto
$corpoAlt='Teste Texto';
 
// adiciona destinat�rio (pode ser chamado in�meras vezes)
$destinatario='samuel.caldas@hotmail.com';
 
// adiciona um anexo
$anexo='';

//Abrindo o phpmailer
require 'phpmailer/class.phpmailer.php';
 
$PHPMailer = new PHPHPMailerailer();
 
// define que ser� usado SMTP
$PHPMailer->IsSMTP();
 
// envia email HTML
$PHPMailer->isHTML( true );
 
// codifica��o UTF-8, a codifica��o mais usada recentemente
$PHPMailer->Charset = 'UTF-8';
 
// Configura��es do SMTP
$PHPMailer->SMTPAuth = true;
$PHPMailer->SMTPSecure = 'ssl';
$PHPMailer->Host = 'smtp.gmail.com';
$PHPMailer->Port = 465;
$PHPMailer->Username = $email;
$PHPMailer->Password = $senha;
 
// E-Mail do remetente (deve ser o mesmo de quem fez a autentica��o
// nesse caso seu_login@gmail.com)
$PHPMailer->From = $email;
 
// Nome do rementente
$PHPMailer->FromName = $remetente;
 
// assunto da mensagem
$PHPMailer->Subject = $assunto;
 
// corpo da mensagem
$PHPMailer->Body = $corpoHTML;
 
// corpo da mensagem em modo texto
$PHPMailer->AltBody = $corpoAlt;
 
// adiciona destinat�rio (pode ser chamado in�meras vezes)
$PHPMailer->AddAddress( $destinatario );
 
// adiciona um anexo
//$PHPMailer->AddAttachment( $anexo );
 
// verifica se enviou corretamente
if ( $PHPMailer->Send() )
{
	echo "Enviado com sucesso";
}
else
{
	echo 'Erro do PHPMailer: ' . $PHPMailer->ErrorMsg;
}
?>