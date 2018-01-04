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
            require_once 'Views/shared/_header.php';
            require_once 'Views/' . $view . '.php';
            require_once 'Views/shared/_footer.php';
        }
    }
?>