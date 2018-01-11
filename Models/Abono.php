<?php
    class Abono extends Model
    {
        public function get_All_Abonos()
        {
            $abono = $this->traer_Todos_Los_Elementos('abonos');
            return $abono;
        }

        public function insert_Abono($user, $amount, $loan)
        {
            $creado = now();
            $valores = array(
                $user.
                $loan,
                $amount,
                $creado
            );
            $campos = array(
                'user',
                'loan',
                'amount',
                'created_date'
            );
            $abonar = $this->movimiento_Para_Elemento('insert','abonos', $valores, $campos );
            return $abono;
        }

        public function modify_Abono()
        {
            
        }
    }