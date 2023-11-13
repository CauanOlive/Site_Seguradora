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

    <?php
        //Aqui estamos iniciando as variaveis sessions na página
        session_start();
    ?>
        <!-- Antes de iniciar o formulario, colocamos um titulo.-->
    <div class="container">
            <header class="header">
                <h1 id="title" class="text-center"> Formulário de Inscrição</h1>
                <p id="descriçao" class="descriçao text-center">
                    Obrigado por escolher nossa seguradora <?php echo$_SESSION["usuario"]?>!
                </p>
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
                 name="email"
                 type="email"
                 id="email"
                 class="form-control"
                 placeholder="Insira seu Email"
                 maxlength="200"
                 required
                 />
                </div>
                <br>
                
                <h1 id="form-title" class="form-title">Dados do Veiculo</h1>
                <br>

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
                    <input 
                    type="number"
                    name="valor-carro"
                    id="valor-carro"
                    class="form-control"
                    placeholder="Insira o valor do carro"
                    required
                 />

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
            
            <!-- Daremos três opções de planos-->
            <h1 id="form-title" class="form-title">Escolha um Tipo de Plano</h1>

            <br>

            <div class="form-group">
                <input
                 type="radio"
                 name="tipo"
                 value="basico"
                 id="tipo"
                 class="form control"
                />
                <label>Plano Basico:
                Este plano inclui somente o seguro contra colisões
                ou furto do veiculo. 
                Ele também será o mais barato e acessivel para todos.
                </label>   
            </div>

            <br>

            <div class="form-group">
                <input
                 type="radio"
                 name="tipo"
                 value="avancado"
                 id="tipo"
                 class="form control"
                />
                <label>Plano Avançado:
                Este plano inclui todos os beneficios do plano
                basico e adiciona um guincho 24hrs, sempre perto
                de você.
                </label>   
            </div>

            <br>

            <div class="form-group">
                <input
                 type="radio"
                 name="tipo"
                 value="completo"
                 id="tipo"
                 class="form control"
                />
                <label>Plano Completo:
                Este plano inclui as versões basico e Avançado,
                além de oferecer o seguro para terceiros.
                Também inclui seguro para todos os itens deixados
                ou perdidos no carro durante o furto ou a colisão.
                </label>   
            </div>

            <br>
            
            <div class="form-group">
                <input
                 type="submit"
                 id="submit"
                 value="Enviar"
                 class="form-control"
                >    
            </div>
    </div>
    </form>
    <br>
    <br>

</body>
</html>
