<?php
    include "connection.class.php";
    class Model
    {
        private $modelo;
        protected function traer_Todos_Los_Elementos($table = '')
        {
            $Conexion = new Connection;
            $mensaje = '';
            $error = '';
            $arreglo = array();
            if($table == '')
            {
                $error = "Es necesaria un tabla para consultar.";
            }
            else
            {
                $kueri = "SELECT * FROM $table";
                $consulta = $Conexion->consulta($kueri);
                if(mysql_num_rows($consulta) > 0)
                {
                    while($row = mysql_fetch_array($consulta, MYSQL_NUM))
                    {
                        $arreglo[] = $row;
                    }
                    $mensaje = "La tabla " . $table . "tiene los siguientes registros:";
                }
                else
                {
                    $error = "No hay registros en la tabla: " . $table . ". Prueba con otra.";
                }
            }
            $elements['mensaje'] = $mensaje;
            $elements['errores'] = $error;
            $elements['registros'] = $records;
    
            return $elements;
        }

        protected function traer_Elementos_Por_Id($id = '',$table = '')
        {
            $Conexion = new Connection;
            $mensaje = '';
            $error = '';
            $arreglo = array();
            if($table == '')
            {
                $error = "Es necesaria un tabla para consultar.";
            }
            else
            {
                $consulta = $conexion->consulta("SELECT * FROM $table WHERE id = $id");
                if(mysql_num_rows($consulta) > 0)
                {
                    while($row = mysql_fetch_array($consulta, MYSQL_NUM))
                    {
                        $arreglo[] = $row;
                    }
                    $mensaje = "La tabla " . $table . "tiene los siguientes registros:";
                }
                else
                {
                    $error = "No hay registros en la tabla: " . $table . ". Prueba con otra.";
                }
            }

            $elements['mensaje'] = $mensaje;
            $elements['errores'] = $error;
            $elements['registros'] = $records;

            return $elements;
        }

        protected function movimiento_Para_Elemento($method = '', $id = '', $table = '', $values = array(), $fields = array())
        {
            $Conexion = new Connection;
            $mensaje = '';
            $error = '';
            $arreglo = array();
            if($method == 'insertar')
            {
                $consulta = $conexion->consulta("INSERT INTO $table $fields VALUES($values)");
                if(mysql_affected_rows($consulta) > 0)
                {
                    $mensaje = "Registros insertados en tabla: " . $table;
                }
                else
                {
                    $error = "No se ha podido insertar los registros en la tabla ". $table . ", revice la información";
                }
            }
            elseif($method == 'update')
            {
                $consulta = $conexion->consulta("UPDATE $table SET $values WHERE id = $id");
                if(mysql_num_rows($consulta) > 0)
                {
                    while($row = mysql_fetch_array($consulta, MYSQL_NUM))
                    {
                        $arreglo[] = $row;
                    }
                    $mensaje = "Registros en tabla: ".$table;
                }
                else
                {
                    $error = "No hay nada en la tabla.";
                }
            }

            $elements['mensaje'] = $mensaje;
            $elements['errores'] = $error;
            $elements['registros'] = $records;

            return $elements;
        }
    }
?>