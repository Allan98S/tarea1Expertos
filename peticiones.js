$(document).ready(function () {
    $("#form_recinto").submit(function () {
    var datosFormulario = $(this).serialize(); // recorre todos los campos del form y los almacena
    
    $.getJSON("recintoOrigen.php", datosFormulario, procesarDatosRecinto);
    
    return false;
    
    });
    
    function procesarDatosRecinto(datos_devueltos) { // datosDeuveltos es el json que viene de PHP
    $("#recintoFinal").html("<p>"+datos_devueltos.Recinto+"</p>");
    
    }
    
    $("#form_sexo").submit(function () {
    var datosFormulario = $(this).serialize(); // recorre todos los campos del form y los almacena
    
    $.getJSON("sexoEstudiante.php", datosFormulario, procesarDatosSexo);
    
    return false;
    
    });
    
    function procesarDatosSexo(datos_devueltos) { // datosDeuveltos es el json que viene de PHP
    $("#sexoFinal").html("<p>"+datos_devueltos.Sexo+"</p>");
    
    }
    $("#form_estilo_aprendizaje").submit(function () {
    var datosFormulario = $(this).serialize(); // recorre todos los campos del form y los almacena
    
    $.getJSON("sexoEstudiante.php", datosFormulario, procesarDatosSexo);
    
    return false;
    
    });
    
    function procesarDatosEstiloAprendizaje(datos_devueltos) { // datosDeuveltos es el json que viene de PHP
    $("#estiloFinal").html("<p>"+datos_devueltos.EstiloAprendizaje+"</p>");
    
    }
    $("#form_profesor").submit(function () {
    var datosFormulario = $(this).serialize(); // recorre todos los campos del form y los almacena
    
    $.getJSON("profesor.php", datosFormulario, procesarDatosProfesor);
    
    return false;
    
    });
    
    function procesarDatosProfesor(datos_devueltos) { // datosDeuveltos es el json que viene de PHP
    $("#profesorFinal").html("<p>"+datos_devueltos.TipoProfesor+"</p>");
    
    }

    $("#form_redes").submit(function () {
        var datosFormulario = $(this).serialize(); // recorre todos los campos del form y los almacena
        
        $.getJSON("clasificacionRedes.php", datosFormulario, procesarDatosRedes);
        
        return false;
        
        });
        
        function procesarDatosRedes(datos_devueltos) { // datosDeuveltos es el json que viene de PHP
        $("#redFinal").html("<p>"+datos_devueltos.ClasificacionRed+"</p>");
        
        }
    
    
    });

    