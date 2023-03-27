var jq= jQuery.noConflict()
jq(function (){
    jq('#Nombre').on('input',Validar);
    jq('#Apellido').on('input',Validar);
    jq('#NumDoc').on('blur',Bucar);
    jq('#Email').on('blur',Bucar);
    
});

function Validar(event){
    var value = $(this).val().toUpperCase();
        $(this).val(value.replace(/[^A-Z\s]/g, ''));
}
function Bucar(){
    var valor = $(this).val();
    $.ajax({
        url: '../usuarios/' + valor,
        type: 'GET',
     
        success: function(respuesta) {
            if (respuesta.existe) {
                alert("El Usuario Ya exta Creado");
                $(this).val('');
                $(this).focus();
            } else {
                
            }
        }.bind(this)
        });
}


