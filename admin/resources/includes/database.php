<?php 

function conexion()
{
    $config=parse_ini_file("config/config.ini");

    if($config)
    {
        $host=$config['db_host'];
        $usuario=$config['db_user'];
        $clave=$config['db_pass'];
        $nombre=$config['db_name'];
    }
    
    try {
        $conexion=mysql_connect($host,$usuario,$clave);
        $base= mysql_select_db($nombre,$conexion);
        return $conexion;
    }
    catch (Exception $e) {
        echo "Fallo de comunicacion con la base de datos\n";
    }
}

function cerrar_conexion($conexion)
{
    try{
        mysql_close($conexion);
    }
    catch (Exception $e) {
        echo "No se pudo cerrar sesion en la base de datos";
    }
}

function query($consulta)
{
    $conexion = conexion();
    $resultado=mysql_query($consulta,$conexion);
    if($consulta[0]=='i' or $consulta[0]=='I') // for insert
    { $resultado = mysql_insert_id();}
    cerrar_conexion($conexion);
    return $resultado;
}

function fetch_array($resultado){
    
    try{
        $fila=mysql_fetch_array($resultado);
        return $fila;
    }
    catch (Exception $e) {
        echo "El resultado de la consulta presenta un error";
    }
}

function num_rows($resultado){
    try{
        $fila=mysql_num_rows($resultado);
        return $fila;
    }
    catch (Exception $e) {
        echo "El resultado de la consulta presenta un error";
    }
}

?>
