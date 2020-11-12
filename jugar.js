var arma
var objetivo
$("#jugar").click(function(){
    if($("#arma").val() == "" || $("#objetivo").val() == ""){
        if($(".main").html().includes('<h1 style="color: #f00;">Debes ingresar los archivos</h1>')){

        }else{
            $(".main").append(`
            <h1 style="color: #f00;">Debes ingresar los archivos</h1>
        `)
        }
    }else{
        arma = 
        objetivo = 
        window.location = "index"
    }
})