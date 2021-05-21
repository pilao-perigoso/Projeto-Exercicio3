<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de fake news</title>
</head>

<body>

    <form method="post" action="gerador_frases.php"> 
        <label for="">Primeira letra do seu nome: </label>
        <input type="text" name="inicial">
        <br/>
        <br/>
        <label for="">Mês em que você nasceu: </label>
        <input type="text" name="mes">
        <br/>
        <br/>
        <label for="">Dia em que você nasceu: </label>
        <input type="number" min="1" max="31" name="dia">
        <br/>
        <br/>
        <input type="submit" value="Confirmar">
    </form>

</body>

</html>