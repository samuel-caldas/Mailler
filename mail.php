<?php
//Define usuario e senha pra autenticação e envio
$email='samuel.caldas@gmail.com';
$senha='samuel18';

//~~Definições da mensagem~~//
// Nome do rementente
$remetente='Samuel Caldas';
 
// assunto da mensagem
$assunto='Teste';
 
// corpo da mensagem
$corpoHTML='<p>Teste Html</p>';
 
// corpo da mensagem em modo texto
$corpoAlt='Teste Texto';
 
// adiciona destinatário (pode ser chamado inúmeras vezes)
$destinatario='samuel.caldas@hotmail.com';
 
// adiciona um anexo
$anexo='';

//Abrindo o phpmailer
require 'phpmailer/class.phpmailer.php';
 
$PHPMailer = new PHPHPMailerailer();
 
// define que será usado SMTP
$PHPMailer->IsSMTP();
 
// envia email HTML
$PHPMailer->isHTML( true );
 
// codificação UTF-8, a codificação mais usada recentemente
$PHPMailer->Charset = 'UTF-8';
 
// Configurações do SMTP
$PHPMailer->SMTPAuth = true;
$PHPMailer->SMTPSecure = 'ssl';
$PHPMailer->Host = 'smtp.gmail.com';
$PHPMailer->Port = 465;
$PHPMailer->Username = $email;
$PHPMailer->Password = $senha;
 
// E-Mail do remetente (deve ser o mesmo de quem fez a autenticação
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
 
// adiciona destinatário (pode ser chamado inúmeras vezes)
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