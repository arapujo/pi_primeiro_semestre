var amount = $('#amount').val();
//var amount = "600.00";
pagamento();

function pagamento() {
    $('.bankName').hide();
    $('.creditCard').hide();
    //Endereco padrão do projeto
    var endereco = jQuery('.endereco').attr("data-endereco");
    $.ajax({

        //URL completa do local do arquivo responsável em buscar o ID da sessão
        url: endereco + "pagamento.php",
        type: 'POST',
        dataType: 'json',
        success: function (retorno) {

            //ID da sessão retornada pelo PagSeguro
            PagSeguroDirectPayment.setSessionId(retorno.id);
        },
        complete: function (retorno) {
            listarMeiosPag();
        }
    });
}

function listarMeiosPag() {
    PagSeguroDirectPayment.getPaymentMethods({
        amount: amount,
        success: function (retorno) {
            console.log(retorno);
            //Recuperar as bandeiras do cartão de crédito
            $('.meio-pag').append("<div>Cartão de Crédito</div>");
            $.each(retorno.paymentMethods.CREDIT_CARD.options, function (i, obj) {
                $('.meio-pag').append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path + "'></span>");
            });

            //Recuperar as bandeiras do boleto
            $('.meio-pag').append("<div>Boleto</div>");
            $('.meio-pag').append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + retorno.paymentMethods.BOLETO.options.BOLETO.images.SMALL.path + "'><span>");

            //Recuperar as bandeiras do débito online
            $('.meio-pag').append("<div>Débito Online</div>");
            $.each(retorno.paymentMethods.ONLINE_DEBIT.options, function (i, obj) {
                $('.meio-pag').append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path + "'></span>");
                $('#bankName').show().append("<option value='" + obj.name + "'>" + obj.displayName + "</option>");
                $('.bankName').hide();
            });
        },
        error: function (retorno) {
            // Callback para chamadas que falharam.
        },
        complete: function (retorno) {
            // Callback para todas chamadas.
            //recupTokemCartao();
        }
    });
}

//Receber os dados do formulário, usando o evento "keyup" para receber sempre que tiver alguma alteração no campo do formulário
$('#numCartao').on('keyup', function () {

    //Receber o número do cartão digitado pelo usuário
    var numCartao = $(this).val();

    //Contar quantos números o usuário digitou
    var qntNumero = numCartao.length;

    //Validar o cartão quando o usuário digitar 6 digitos do cartão
    if (qntNumero == 6) {

        //Instanciar a API do PagSeguro para validar o cartão
        PagSeguroDirectPayment.getBrand({
            cardBin: numCartao,
            success: function (retorno) {
                $('#msg').empty();

                //Enviar para o index a imagem da bandeira
                var imgBand = retorno.brand.name;
                $('.bandeira-cartao').html("<img src='https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/42x20/" + imgBand + ".png'>");
                $('#bandeiraCartao').val(imgBand);
                recupParcelas(imgBand);
            },
            error: function (retorno) {

                //Enviar para o index a mensagem de erro
                $('.bandeira-cartao').empty();
                $('#msg').html("Cartão inválido");
            }
        });
    }
});

//Recuperar a quantidade de parcelas e o valor das parcelas no PagSeguro
function recupParcelas(bandeira) {
    var noIntInstalQuantity = $('#noIntInstalQuantity').val();
    $('#qntParcelas').html('<option value="">Selecione</option>');
    PagSeguroDirectPayment.getInstallments({
        
        //Valor do produto
        amount: amount,

        //Quantidade de parcelas sem juro        
        maxInstallmentNoInterest: noIntInstalQuantity,

        //Tipo da bandeira
        brand: bandeira,
        success: function (retorno) {
            $.each(retorno.installments, function (ia, obja) {
                $.each(obja, function (ib, objb) {

                    //Converter o preço para o formato real com JavaScript
                    var valorParcela = objb.installmentAmount.toFixed(2).replace(".", ",");

                    //Acrecentar duas casas decimais apos o ponto
                    var valorParcelaDouble = objb.installmentAmount.toFixed(2);
                    //Apresentar quantidade de parcelas e o valor das parcelas para o usuário no campo SELECT
                    $('#qntParcelas').show().append("<option value='" + objb.quantity + "' data-parcelas='" + valorParcelaDouble + "'>" + objb.quantity + " parcelas de R$ " + valorParcela + "</option>");
                });
            });
        },
        error: function (retorno) {
            // callback para chamadas que falharam.
        },
        complete: function (retorno) {
            // Callback para todas chamadas.
        }
    });
}

//Enviar o valor parcela para o formulário
$('#qntParcelas').change(function () {
    $('#valorParcelas').val($('#qntParcelas').find(':selected').attr('data-parcelas'));
});

//Recuperar o token do cartão de crédito
$("#formPagamento").on("submit", function (event) {
    event.preventDefault();
    var paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
    console.log(paymentMethod);

    if (paymentMethod == 'creditCard') {
        PagSeguroDirectPayment.createCardToken({
            cardNumber: $('#numCartao').val(), // Número do cartão de crédito
            brand: $('#bandeiraCartao').val(), // Bandeira do cartão
            cvv: $('#cvvCartao').val(), // CVV do cartão
            expirationMonth: $('#mesValidade').val(), // Mês da expiração do cartão
            expirationYear: $('#anoValidade').val(), // Ano da expiração do cartão, é necessário os 4 dígitos.
            success: function (retorno) {
                $('#tokenCartao').val(retorno.card.token);
                recupHashCartao();
            },
            error: function (retorno) {
                // Callback para chamadas que falharam.
            },
            complete: function (retorno) {
                // Callback para todas chamadas.                
            }
        });
    } else if (paymentMethod == 'boleto') {
        recupHashCartao();
    } else if (paymentMethod == 'eft') {
        recupHashCartao();
    }

});

//Recuperar o hash do cartão
function recupHashCartao() {
    PagSeguroDirectPayment.onSenderHashReady(function (retorno) {
        if (retorno.status == 'error') {
            console.log(retorno.message);
            return false;
        } else {
            $("#hashCartao").val(retorno.senderHash);
            var dados = $("#formPagamento").serialize();
            console.log(dados);

            var endereco = jQuery('.endereco').attr("data-endereco");
            console.log(endereco);
            $.ajax({
                method: "POST",
                url: endereco + "proc_pag.php",
                data: dados,
                dataType: 'json',
                success: function (retorna) {
                    console.log("Sucesso " + JSON.stringify(retorna));
                    $("#msg").html('<p style="color: green">Transação realizada com sucesso</p>');
                    //window.location.href = retorna['dados']['paymentLink'];
                },
                error: function (retorna) {
                    console.log("Erro" + JSON.stringify(retorna));
                    $("#msg").html('<p style="color: #FF0000">Erro ao realizar a transação</p>')
                }
            });
        }
    });
}

function tipoPagamento(paymentMethod){
    if(paymentMethod == "creditCard"){
        $('.creditCard').show();
        $('.bankName').hide();
    }
    if(paymentMethod == "boleto"){
        $('.creditCard').hide();
        $('.bankName').hide();
    }
    if(paymentMethod == "eft"){
        $('.creditCard').hide();
        $('.bankName').show();
    }
}