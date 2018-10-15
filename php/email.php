<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    ini_set('display_errors', 1);

    ini_set('SMTP', 'smtp.gmail.com');
    ini_set('smtp_port ', 587);
    ini_set('sendmail_from', 'guilhermesever@gmail.com');

    error_reporting(E_ALL);

    $from = $email;

    $to = "guilhermehmsevero@hotmail.com";

    $subject = "Contato Site ($nome)";

    $headers = "From:". $from;

    try {
        mail($to, $subject, $mensagem, $headers);
        // header('Location: /index.php?enviado=1');
        echo 'bombou!';
    } catch (Exception $e) {
        header('Location: /index.php?enviado=0&erro='.$e->getMessage());
    }
?>

<?php
	// require 'PHPMailer\PHPMailerAutoload.php';

	// $nome = $_POST['nome'];
    // $email = $_POST['email'];
    // $mensagem = $_POST['mensagem'];
	
	// $mail = new PHPMailer;
	// //$mail->SMTPDebug = true; //habilita o debug se par�metro for true
	// $mail->isSMTP();
	// $mail->Host = 'smtp.gmail.com';
	// $mail->SMTPAuth = true;
	// $mail->SMTPOptions = [ 'ssl' => [ 'verify_peer' => false ] ];
	// $mail->SMTPSecure = 'ssl';
	// $mail->Port = 465;
	// $mail->Username = 'guilhermesever@gmail.com';
	// $mail->Password = 'S@muel162820';

	// $mail->setFrom($email, $nome);
	
	// $mail->addAddress('jo_neugebauer@hotmail.com', 'CNFIT - Vida Saudável');

	// $mail->addReplyTo('guilhermehmsevero@hotmail.com', 'Guilherme Severo');
	
	// $mail->isHTML(true);
	// $mail->Subject = 'Contato Site ('.$nome.')';
	// $mail->Body    = $mensagem;
	// $mail->AltBody = $mensagem;

	// if($mail->send()) {
	// 	header('Location: /index.php?enviado=1');
	// } else {
	// 	header('Location: index.php?enviado=0&erro='.$mail->ErrorInfo);
	// }
?>