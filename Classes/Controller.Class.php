<?php
    class Controller
    {
        public function model($model)
        {
            require_once '../Models/' . $model . '.Model.php';
            return new $model();
        }

        public function view($view, $data = array())
        {
            require_once '../views/shared/header.php';
            require_once '../views/' . $view . '.php';
            require_once '../views/shared/footer.php';
        }
    }
?>