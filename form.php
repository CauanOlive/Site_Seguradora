<!DOCTYPE html>
<html lang="pt-br">
    <!-- Este formulario vai ser responsavel por armazenar as informações
        dos clientes e utilizar as variaveis para o calculo do seguro
        que sera feito em outra página. -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
        <link rel="stylesheet" type="text/css" href="form_style.css">
    </head>
    <body>
        <!-- Antes de iniciar o formulario, colocamos um titulo.-->
    <div class="container">
            <header class="header">
                <h1 id="title" class="text-center"> Formulário de Inscrição</h1>
                <p id="descriçao" class="descriçao text-center">
                    Obrigado por escolher nossa seguradora!
                <p>
            </header>
        
        <!-- Aqui iniciamos o formulario com os dados pessoais do cliente.-->
        <form id="inscriçao" action="seguro.php" method="POST">
            <h1 id="form-title" class="form-title">Dados pessoais</h1>
            <div class="form-group">
                <!-- Primeiro o nome, seguido das identificações para o CSS.-->
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

            <!-- input pedindo a idade, onde será utilizada para o calculo do seguro.-->
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

            <!-- CPF do cliente. (Aqui vai ser um número fícticio)-->
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

            <!-- Email também fícticio -->
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
            <br>
        </form>
            <!-- Aqui fechamos o form para incrementar o upload de arquivos.-->
            <!-- Linkamos o form com outro arquivo que contêm a estrutura PHP.-->
            <form action="upload_proc.php" method="POST" enctype="multipart/form-data">

            <div class="form-control">
                <label for="file">CNH:</label>
                <!-- Limitamos os tipos de arquivos que podem ser enviados.-->
                <input type="file" name="file" id="file" accept=".jpg,.jpeg,.png">
                <br>
                <br>
                <input type="submit" name="submit" value="Enviar">
            </div>

            </form>
        <!-- Aqui continuamos o form, mas agora com os dados do veiculo.-->
        <form id="inscriçao" action="seguro.php" method="POST">
            <br>
            <h1 id="form-title" class="form-title">Dados do Veiculo</h1>
        <!-- O modelo do carro, que sera irrelevante para a estrutura PHP.-->
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

            <!-- O ano do carro será importante, pois ele vai ter grande influência no preço final.-->
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
            <!-- Placa do carro tabém irrelevante para a estrutura.-->
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
            <!-- O valor do carro também será de extrema importância.-->
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
            <!-- Chassi do carro.-->
            <div class="form-group">
                <label id="chassi-label" for="chassi-car">Chassi do carro:</label>
                 <input
                 type="text"
                 name="chassi-car"
                 id="chassi-car"
                 class="form-control"
                 maxlength="20"
                 placeholder="Insira o Chassi"
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
