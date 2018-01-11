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
    $('.Registrar').click(fisher('registrador', 'index'));
    $('.abono').click(fisher('abonar', 'index'));
    $('.prestamo').click(fisher('presatar', 'index'));
    $('.Cuota').click(calculador());
});

function fisher(controller, method, data){
    $.ajax({ 
        url: '/Classes/App.Class.php',
        data: {controlador: controller, metodo: method, datos:data},
        type: 'post',
        success: function(respuesta)
        {
            $("#section").html(respuesta);
        }
    });
}

function calculador()
{
    var capital
    var acciones
    
}