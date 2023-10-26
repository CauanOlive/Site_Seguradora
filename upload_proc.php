<?php

    $targetDir = "uploads/"; // Pasta onde os arquivos serão armazenados
    //$_FILES é o responsável por armazenar arquivos que vieram do upload. funciona de forma
	//similar ao $_GET e $_POST.
	//basename, busca o nome do arquivo no qual foi feito upload. ex: imagem.jpg
	//targetfile é a variável que receberá o caminho completo do arquivo. ex. "uploads/imagem.jpg"
	//ele é necessário para salvar corretamente o arquivo.
	$targetFile = $targetDir . basename($_FILES["file"]["name"]);
    //variável para controlar o upload. Verifica a situação
	//1 -> ok
	//0 -> houve um problema
	$uploadOk = 1;
	
	//pathinfo, em conjunto com o parâmetro PATHINFO_EXTENSION
	//buscará a extensão do arquivo destino, para verificar se é uma extensão permitida.
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Verifica se o arquivo já existe
    if (file_exists($targetFile)) {
        echo "Desculpe, o arquivo já existe.";
        $uploadOk = 0;
    }

    // Verifica o tamanho máximo do arquivo (aqui definido como 2MB)
    if ($_FILES["file"]["size"] > 2000000) {
        echo "Desculpe, o arquivo é muito grande. Tamanho máximo permitido é 2MB.";
        $uploadOk = 0;
    }

    // Aceita apenas alguns tipos de arquivo (neste exemplo, imagens JPEG e PNG)
    if($imageFileType != "jpg" && $imageFileType != "png") {
        echo "Desculpe, apenas arquivos JPG, JPEG, e PNG são permitidos.";
        $uploadOk = 0;
    }

    // Move o arquivo para o diretório de upload se todas as verificações forem bem-sucedidas
    //verifica se houve algum problema nas verificações anterior, testando a variável uploadok
	if ($uploadOk == 0) {
        echo "Ocorreu um erro, o arquivo não foi enviado.";
    } else {
		//a função move_uploaded_file concretiza o upload.
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
			
			//o que fazer se a movimentação der certo.
            echo "O arquivo " . basename($_FILES["file"]["name"]) . " foi enviado com sucesso.";
			echo "<img src='$targetFile'/>";
		} else {
            echo "O arquivo já existe.";
        }
    }

?>