function objetoAjax(){
    var xmlhttp = false;
    try{
        xmlhttp =  new ActiveXObject("Msxml2.XMLHTTP");
    }catch(e){
        try{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch(E){
            xmlhttp = false;
        }
    }
    if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
        xmlhttp =  new XMLHttpRequest();
    }
    return xmlhttp;
}

$(document).ready(function()
{
    $('.Registrar').click(fisher());
    $('.abono').click(fisher());
    $('.prestamo').click(fisher());
    $('.Cuota').click(fisher());
});

function fisher($controller, $method, $data){
    $.ajax({ 
        url: 'sipimini/fido.php',
        data: {controlador: 'seguimientos', metodo: 'index', datos:''},
        type: 'post',
        success: function(respuesta)
        {
            $("#section").html(respuesta);
        }
    });
}