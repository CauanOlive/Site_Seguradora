<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
        <link rel="stylesheet" type="text/css" href="form_style.css">
    </head>
    <body>
    <div class="container">
            <header class="header">
                <h1 id="title" class="text-center"> Formulário de Inscrição</h1>
                <p id="descriçao" class="descriçao text-center">
                    Obrigado por escolher nossa seguradora!
                <p>
            </header>
        
        
        <form id="inscriçao" action="" method="POST">
            <h1 id="form-title" class="form-title">Dados pessoais</h1>
            <div class="form-group">
                <label id="nome-label" for="nome">Nome Completo:</label>
                <input
                 type="Text"
                 name="nome"
                 id="nome"
                 class="form-control"
                 placeholder="Insira seu nome"
                 maxlength="200"
                 required
                />
            </div>

            
            <div class="form-group">
                <label id="year-label" for="year">Idade:</label>
                <input
                 type="number"
                 name="idade"
                 id="idade"
                 class="form-control"
                 placeholder="Insira sua idade"
                 required
                />
            </div>

            <div class="form-group">
                <label id="cpf-label" for="cpf">CPF:</label>
                <input
                 type="text"
                 name="cpf"
                 id="cpf"
                 class="form-control"
                 placeholder="Insira seu CPF"
                 maxlength="16"
                 required
                />
            </div>


            <div class="form-group">
                <label id="email-label" for="email">Email</label>
                <input
                 type="email"
                 name="email"
                 id="email"
                 class="form-control"
                 placeholder="Insira seu Email"
                 maxlength="200"
                 required
                />
            </div>
        </form>
            <form action="upload_proc.php" method="POST" enctype="multipart/form-data">
            <label for="file">CNH:</label>
            <input type="file" name="file" id="file" accept=".jpg,.jpeg,.png">
            <br>
            <input type="submit" name="submit" value="Enviar">
            </form>

        <form id="inscriçao" action="" method="POST">
            
            <h1 id="form-title" class="form-title">Dados do Veiculo</h1>

            <div class="form-group">
                <label id="model-label" for="model-car">Modelo do Carro:</label>
                <input
                 type="text"
                 name="modelo"
                 id="modelo"
                 class="form-control"
                 placeholder="Modelo do carro"
                 maxlength="100"
                 required
                />
            </div>


            <div class="form-group">
                <label id="year-label" for="year-car">Ano do carro:</label>
                <input
                 type="number"
                 name="ano-carro"
                 id="ano-carro"
                 class="form-control"
                 placeholder="Ano do carro"
                 required
                />
            </div>

            <div class="form-group">
                <label id="placa-label" for="placa-car">Placa do Carro:</label>
                <input
                 type="text"
                 name="placa-carro"
                 id="placa-carro"
                 class="form-control"
                 placeholder="Placa do carro"
                 maxlength="10"
                 required
                />
            </div>

            <div class="form-group">
                <label id="value-label" for="value-car">Valor da Tabela FIPE do carro:</label>
                 <span class="input-symbol-euro">
                 <input 
                 type="number"
                 name="valor-carro"
                 id="valor-carro"
                 class="form-control"
                 placeholder="Insira o valor do carro"
                 required
                 />
                 </span>

            <div class="form-group">
                <label id="chassi-label" for="chassi-car">Chassi do carro:</label>
                 <input
                 type="text"
                 name="chassi-car"
                 id="chassi-car"
                 class="form-control"
                 maxlength="20"
                 required      
                 />    
            </div>
            <div class="form-group">
                <button
                 type="submit"
                 id="submit"
                 class="submit-button"
                >Continuar</button>     
            </div>
    </div>

        </form>
    </body>
</html>