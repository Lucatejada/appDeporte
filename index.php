<?php

#El INDEX va a mostrar la salida de las vistas al ususario y tambiein a traves de él enviaremos
#las distintas acciones que el usuario envie al controlador. 

/*require ( ) establece que el código del archivo invocado es requerido , es decir , obligatorio para el
funcionamiento del programa . Por ello , si el archivo especificado en la función require ( ) no se encuentra
saltará un error " PHP Fatal error " y el programa PHP se detendrá .

#La versión require_once ( ) funcionan de la misma forma que sus respectivo , salvo que , al utilizar la versión
once , se impide la carga de un mismo archivo más de una vez .
*/

if(isset($_GET['pagina'])){
switch ($_GET['pagina']) {
    case 'registro':
        require_once('controladores/controladorRegistro.php');
        controladorRegistro::mostrarPaginaRegistro();
        break;
    case 'ingreso':
        require_once('controladores/controlador.ingreso.php');
        ctrIngreso::mostrarPaginaIngreso();
        break;
    case 'principal':
        require_once('controladores/controlador.asistencia.php');
        controladorUsuario::ctrAsistencia();
        break;
    case 'salud':
        require_once('vistas/paginas/salud.php');
        break;
    
}
} else {
    header("Location:index.php?pagina=registro");
}




?>

</body>

</html>