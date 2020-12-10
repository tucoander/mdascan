jQuery(document).ready(function(){
    jQuery("#form-login").submit(function(){
        return false;
    });   
    // carregando a função para o envio
    jQuery("#login").click(function(){
        userLogin();
    });
    // limpando a div antes de um novo envio
    function userLogin() {
        jQuery("#response").empty();
        // pegando os campos do formulário
        var user = (jQuery("#user").val());
        var password = (jQuery("#password").val());
        // tipo dos dados, url do documento, tipo de dados, campos enviados    
        // para GET mude o type para GET  
        jQuery.ajax({
            type: "POST",
            url: "../../backend/login/index.php",
            dataType: "html",
            data: { user, password },
        // enviado com sucesso
            success: function(response){
                var responseJson = jQuery.parseJSON(response);
                console.log(responseJson);
                jQuery("#response").append(responseJson.message);
                if(responseJson.message === 'Ok'){
                    window.setTimeout(jQuery(location).attr('href','../live'),3000);
                }
            },
            // quando houver erro
            error: function(){
                alert("Erro no Ajax");
            }
        });
    }
});