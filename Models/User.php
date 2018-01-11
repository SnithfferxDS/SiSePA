<?php
    class User extends Model
    {
        public function get_All_Users()
        {
            $usuarios = traer_Todos_Los_Elementos('users');
            return $usuarios;
        }

        public function get_User_By_Id($id)
        {
            $usuario = traer_Elementos_Por_Id($id, 'users');
            return $usuario;
        }

        public function user_Actions($accion, $user, $data = '')
        {
            $campos = array(
                'first_name',
                'second_name',
                'tird_name',
                'last_names',
                'phone',
                'email',
                'activo'
            );
            $usuario = $this->movimiento_Para_Elemento('insert', 'user', $data, $campos);
        }
    }
?>