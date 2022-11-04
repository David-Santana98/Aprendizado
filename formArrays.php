<html>
<head></head>
<body>
    
    <form method="GET">
        <input type="checkbox" name="sabores[]" id="mussarela" value="Mussarela">
        <label for="mussarela"> Mussarela </label>      
        <input type="checkbox" name="sabores[]" id="calabresa" value="Calabresa">
        <label for="calabresa"> Calabresa </label>      
        <input type="checkbox" name="sabores[]" id="portuguesa" value="Portuguesa">
        <label for="portuguesa"> Portuguesa </label> 
        <button type="submit">Enviar</button>
        
    </form>
        <?php 
        if(array_key_exists('sabores', $_GET)) {
            foreach($_GET['sabores'] as $sabor_escolhido){
                echo 'Você escolheu o sabor ' . $sabor_escolhido . '<br>'; 
            }
        }?>
</body>
</html>