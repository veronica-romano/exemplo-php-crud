<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->CharSet = "utf-8";
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '64e3758202647c';
        $mail->Password = '08ea8d48d4754f';
        
        //Quem envia
        $mail->setFrom('veronica.lima.silva@uni9.edu.br', 'Site Crud');

        //Quem recebe
        $mail->addAddress('veronica.lima.silva@uni9.edu.br', 'Veronica');     
                    
        $mail->addReplyTo($email, ' - ', $assunto);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "$assunto enviada por $nome";
        $mail->Body    = "<ul> <li> Nome: $nome </li> <li> E-mail: $email </li></ul>  <ul><li> $mensagem </li></ul> ";
        $mail->AltBody = "Nome: $nome E-mail: $email Assunto: $assunto Mensagem: $mensagem";

        $mail->send();
        echo 'Mensagem enviada com sucesso!';
    } catch (Exception $e) {
        echo "Erro: A mensagm não pode ser enviada. {$mail->ErrorInfo}";
        }


}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Home</a>
    <form action="" method="post">
        <p>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="">
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="">
        </p>
        <p>
            <label for="assunto">Assunto</label>
        <select name="assunto" id="">
            <option value="selecione">selecione</option>
            <option value="Duvida">Dúvidas</option>
            <option value="Sugestao">Sugestões</option>
            <option value="Elogio">Elogios</option>
            <option value="Reclamaçao">Reclamações</option>
        </select>
        </p>
        <p>
            <label for="msg">Mensagem:</label>
        <textarea name="mensagem" id="" cols="30" rows="5"></textarea>
        </p>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>
</html>