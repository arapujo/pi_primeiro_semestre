<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles/css/admin.css">
</head>
<body>
<div class="container"> <div class=" text-center mt-5 ">
        <h1>Cadastrar material</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form method="POST" id="cadastro-material" action="../../action/cadastrar-material.php" enctype="multipart/form-data" >
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Nome do material:</label> <input id="form_image" type="text" name="nome_material" class="form-control" placeholder="Ex:Lógica de programação" maxlength="40" required="required"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Preco:</label> <input id="form_image" type="text" name="valor" class="form-control" placeholder="Ex:24,99" maxlength="6" required="required"></div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_name">Imagem:</label> <input id="form_image" type="file" name="imagem_material" class="form-control" accept="image/*" required="required"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_name">Material:</label> <input id="form_image" type="file" name="material" class="form-control" accept="application/pdf, video/*" required="required"></div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group"> <label for="form_message_simple">Descrição simples:</label> <textarea id="form_message_simple" name="message_simple" class="form-control" placeholder="Ex: Aprenda o que é variáveis, funcões, instruções e muito mais. Você se tornará apto para escrever os seus próprios programas." maxlength="175" rows="4" required="required" data-error="Por favor, forneça uma descrição simples."></textarea> </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Descrição detalhada:</label> <textarea id="form_message" name="message" class="form-control" placeholder="Ex: - Variáveis
- Tipo de dados (string, int, float e boolean)
- Estruturas condicionais e laços de repetição
- Operadores lógicos e matemáticos
- Vetores e arrays
- Funções, métodos e classes " maxlength="300" rows="4" required="required" data-error="Por favor, forneça uma descrição detalhada."></textarea> </div>
                                    </div>
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Cadastrar"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
</body>
</html>