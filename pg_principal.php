<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProtecSeguro</title>
    <link rel="stylesheet" href="pg_principal_style.css">
</head>
<body>

    <?php

        /* Por aqui faremos os controles das sessões.
        onde iremos utilizar o nome de usuario inserido
        no index da página.*/

        //Este primeiro  código é para ocultar os erros
        //de php na página.
        error_reporting(0);
        ini_set('display_errors', 0);
        session_start();

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if($senha=="projeto"){
            $_SESSION['logado'] = 's';
            $_SESSION['usuario'] = $usuario;
            $_SESSION['erro'] = "";

    }
        else{
        $_SESSION['erro'] = "USUARIO OU SENHA INCORRETA!";

    }
    ?>
            <div>
                
                    <header>
                            <h1>ProtecSeguro  Bem-vindo <?php echo $_SESSION["usuario"];?></h1>
                            
                            <nav>
                                <ul class="menu">
                                    <li><a href="logout.php">Desconectar</a></li>
                                    <li><a href="form.php">Cotação Online</a></li>
                                    <li><a href="Contact.php">Contato</a></li>
                                    <li><a href="Group.php">Grupo</a><li>
                                </ul>
                            </nav>
                      
                    </header>
            </div>
    

    <div class="hero">
        <h2>Proteja o seu veículo com o melhor seguro do mercado!</h2>
        <p2>Oferecemos cobertura abrangente para carros e preços competitivos.</p2>
        <a href="form.php" class="cta-button1">Obter Cotação Grátis</a>
    </div>
      
        <div class="quadrado">
            <h3 class="title1">Sobre Nós</h3>
            <p3>A ProtecSeguro é uma empresa líder em seguros automotivos,
             com anos de experiência e milhares<br>
             Nossa missão é fornecer proteção confiável  de clientes satisfeitos.
             e acessível para o seu veículo.</p3>
             <img src="https://davidxiang.com/wp-content/uploads/2021/06/software-engineering-decision-making.jpg" alt="" srcset="">
        </div>


        
            <div class="comeco">
                <h3>Nossos Serviços:</h3>
            </div>
        <div>
                <ul>
                    <li class="sobre1">Seguro contra Colisões</li>
                    <div class="img1"></div>
                    <li class="sobre2">Seguro contra Danos Compreensivos</li>
                    <div class="img2"></div>
                    <li class="sobre3">Assistência 24 Horas</li>
                    <div class="img3"></div>
                </ul>
            
        </div> 

    <section class="contact">
        <div class="bloco1">
            <h4>Entre em Contato</h4>
            <p4>Tem alguma dúvida? Fale conosco para obter mais informações ou <br>
            para receber uma cotação personalizada para o seu veículo.</p4>
            <br>
            </br>
            <a href="Contact.php" class="cta-button2">Contato</a>
            <div class="img4"></div>
        </div>
    </section>

    <footer>
        <p1 class="fim">&copy; 2023 ProtecSeguro. Todos os direitos reservados.</p1>
    </footer>
</body>
</html>
