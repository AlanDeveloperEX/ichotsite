<?php
if(isset($_POST['enviar_form'])){
    $name               = $_POST['name'];
    $email              = $_POST['email'];
    $comment            = $_POST['msg'];

    require_once("phpmailer/class.phpmailer.php");

    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->CharSet    = 'UTF-8';
    $mail->Host       = 'smtp.live.com'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
    $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
	$mail->SMTPSecure = 'tls';
    $mail->Port       = 587; //  Usar 587 porta SMTP
	
    $mail->Username = 'alansender@outlook.com'; // Usuário do servidor SMTP (endereço de email)
    $mail->Password = 'Aa96107343'; // Senha do servidor SMTP (senha do email usado)
 
	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
	);
    //Define o remetente
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
    $mail->SetFrom('alansender@outlook.com', 'GERACAO CRESCER'); 
    $mail->AddAddress('icrescer@icrescer.org.br', 'GERACAO CRESCER');
    $mail->AddAddress('alansender@outlook.com', 'GERACAO CRESCER');

    $mail->isHTML(true);   
    $mail->Subject = "GERACAO CRESCER"; 
    $mail->Body = "E-mail: <b>".$email."</b><br>Nome: <b>".$name."</b><br>Mensagem: <b>".$comment."</b>"; 

    $enviou = $mail->Send();
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();

    if ($enviou){
        header('Location: index.php?envio=1');
        exit();
    }else{
        header('Location: index.php?envio=2');
        exit();
    }
}
?>
