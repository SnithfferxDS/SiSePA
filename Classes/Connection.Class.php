<?php
    class Conexion
    {
        private $conexion;
        protected function Conection()
        {
            //Declaracion del servidor.
            $db_host="localhost";
            $db_Base="sisepadb";
            $db_User="root";
            $db_Pass="";
            $dsn="mysql:dbname='". $db_Base ."';host='". $db_host ."'";
            
            //coneccion a la base de datos mysqli_connect(host,User,Pass,Base,port)
            try
            {
                $conexion = new  PDO($dsn, $db_User, $db_Pass);
                $conexion->exec("SET CHARACTER SET utf8_decode");
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                die("Error:&nbsp;".$e->getMessage());
                echo "Linea del error:".$e->getLine();
            }
        }

        protected function Consulta($cadena)
        {
            $db = new $this->conexion;
            $declaracionPDO = $db->prepare($cadena);
        }    
    }
?>