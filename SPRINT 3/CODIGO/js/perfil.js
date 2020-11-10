

//preencher automático//

$("#cep").focusout(function(){
    
    $.ajax({
        
        url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
        
        dataType: 'json',
        
        success: function(resposta){
           
            $("#rua").val(resposta.logradouro);
            $("#bairro").val(resposta.bairro);
            $("#cidade").val(resposta.localidade);
            $("#uf").val(resposta.uf);
    
            $("#num").focus();
        }
    });
});



