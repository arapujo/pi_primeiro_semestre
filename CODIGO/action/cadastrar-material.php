<?php
    include_once("conexão.php");
    $nome = utf8_decode($_POST['nome_material']);
    $valor = utf8_decode($_POST['valor']);
    $descricao_simples = utf8_decode($_POST['message_simple']);
    $descricao = utf8_decode($_POST['message']);
    
    if(isset($_FILES['imagem_material'])){

        $extensao = strtolower(substr($_FILES['imagem_material']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "../imagens/"; //define o diretorio para onde enviaremos o arquivo
    
        move_uploaded_file($_FILES['imagem_material']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    
      }

      if(isset($_FILES['material'])){

        $extensao_material = strtolower(substr($_FILES['material']['name'], -4)); //pega a extensao do arquivo
        $nome_material = md5(time()) . $extensao_material; //define o nome do arquivo
        $diretorio_material = "../material/"; //define o diretorio para onde enviaremos o arquivo
    
        move_uploaded_file($_FILES['material']['tmp_name'], $diretorio_material.$nome_material); //efetua o upload
    
      }
   
   
    $result_usuario = "INSERT INTO material(nome, preco, descricao_simples, descricao, nome_imagem, nome_material) VALUES ('$nome', '$valor', '$descricao_simples', '$descricao', '$novo_nome', '$diretorio_material.$nome_material')";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    
    if(mysqli_affected_rows($conexao) != 0){
        echo ('Material adicionado');
         }else{
            echo ('Erro');
         }
?>