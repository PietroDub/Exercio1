<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
			<label>Nome:</label>
			<input type="text" name="nome">
			<div><?php echo $msg[0];?></div>
            <label>RG:</label>
			<input type="text" name="rg">
			<div><?php echo $msg[1];?></div>
            <label>endereco:</label>
			<input type="text" name="endereco">
			<div><?php echo $msg[2];?></div>
			<input type="submit" value="Cadastrar">
		</form>
</body>
</html>