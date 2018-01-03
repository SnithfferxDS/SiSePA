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
                $error = "No hay tabla para consultar.";
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
                    $mensaje = "Registros en tabla: ".$table;
                }
                else
                {
                    $error = "No hay registros en la tabla.";
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
                $error = "No hay tabla para consultar.";
            }
            else
            {
                $consulta = $conexion->consulta("SELECT * FROM $tabla WHERE id = $id");
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

        protected function movimiento_Para_Elemento($method = '', $id = '', $table = '', $values = array())
        {
            $Conexion = new Connection;
            $mensaje = '';
            $error = '';
            $arreglo = array();
            if($method == 'insertar')
            {
                $consulta = $conexion->consulta("SELECT * FROM $tabla WHERE id = $id");
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
                $error = "No hay tabla para consultar.";
            }
            else
            {
                $consulta = $conexion->consulta("SELECT * FROM $tabla WHERE id = $id");
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