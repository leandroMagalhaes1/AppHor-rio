<?php 

    define('NAME','Leandro');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app</title>

</head>

<body>
    <h1><?php echo "Bem vindo ". NAME; ?></h1>
    <h2>Adiciona gasto</h2>

    <div id="div_text" style="display: flex; align-items: center;">
        <label for="i_text">Gasto:</label>
        <input id="i_text" type="text" style="margin-left: 10px; margin-right: 20px;">
        
        <label for="i_textPrice">Preço:</label>
        <input id="i_textPrice" type="number" style="margin-left: 10px;">
        
        <button id="b_submit" onclick="submit()" style="margin-left: 10px;">submit</button>
    </div>   

    <br>

    <textarea id="text_area" readonly></textarea>
    <br>
    <label for="i_gasto">Total gasto:</label>
    <span id="i_gastos">0</span>
    
    <script src="script.js"></script>
    
</body>

</html>