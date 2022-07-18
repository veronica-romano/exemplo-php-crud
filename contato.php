<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        <select name="ass" id="">
            <option value="selecione">selecione</option>
            <option value="duv">Dúvidas</option>
            <option value="sug">Sugestões</option>
            <option value="elo">Elogios</option>
            <option value="cla">Reclamações</option>
        </select>
        </p>
        <p>
            <label for="msg">Mensagem:</label>
        <textarea name="msg" id="" cols="30" rows="5"></textarea>
        </p>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>