<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contact.css">
    <title>Página de Contato</title>
</head>
<body>

    <?php
    session_start();
    ?>
    
    <h1>Preencha este formúlario</h1>

    <div class="form-group">

    <form method="post" action="form_contact.php" id="contato">
    
        <label>Nome:</label>
        <input
         type="text"
         name="nome"
         id="nome"
         class = "form-control"
         required
        /> <br>

        <label>Email:</label>
        <input
         type="email"
         name="email"
         id="email"
         class = "form-control"
         required
        /> <br>

        <label>Telefone:</label>
        <input
         type="tel"
         name="telefone"
         id="telefone"
         class = "form-control"
         required
        /> <br>
        
        <label for="msg">Mensagem</label><br>
	    <textarea id="msg" name="msg" rows="4" cols="50" maxlength="350"></textarea>
        <br>

        <input
         type="submit" 
         value="enviar"
         id="enviar"
         class="form-control"
        />


    </form>

    </div>

    <footer>
        <p>&copy; 2023 ProtecSeguro</p>
    </footer>
</body>
</html>
