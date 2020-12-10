jQuery(document).ready(function(){
    jQuery("#form-login").submit(function(){
        return false;
    });   
    // carregando a função para o envio
    jQuery("#execute").click(function(){
        readFile();
    });
    // limpando a div antes de um novo envio
    function readFile() {
        jQuery("#response").empty(); 
        jQuery.ajax({
            type: "POST",
            url: "../../backend/readfile/index.php",
            dataType: "json",
        // enviado com sucesso
            success: function(response){
                console.log(response);
                jQuery("#height").val(response.height);
                jQuery("#width").val(response.width);
                jQuery("#length").val(response.length);
                jQuery("#weigth").val(response.weigth);
                jQuery("#imagem").attr('src', response.file.toString().replace('txt','jpg').replace('testeimage','teste1image'));
            },
            // quando houver erro
            error: function(){
                alert("Erro no Ajax");
            }
        });
    }
});