<?php
    class Conexion
    {
        private $conexion;
        protected function Conection()
        {
            $db_host="localhost";
            $db_Base="importdb";
            $db_User="root";
            $db_Pass="";
            $dsn="mysql:dbname='". $db_Base ."';host='". $db_host ."'";
            //coneccion a la base de datos mysqli_connect(host,User,Pass,Base,port)
            try
            {
                $conexion = new  PDO($dsn, $db_User, $db_Pass);
                //$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
                $conexion->exec("SET CHARACTER SET utf8_decode");
                //$sql="INSERT INTO purchasedetails (FechaCompra,SupplierName,MontoTotal,Documento,Nombre) VALUES (:fecha, :provee, :total, :fact, :nombre)";
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //$conexion->exec("SET CHARACTER SET UTF8");
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

        /* protected function CloseConection()
        {
            $this->conexion
        } */
    
    }
?>