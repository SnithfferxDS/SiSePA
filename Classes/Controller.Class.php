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
      
        public function html_view($view, $data)
        {
          require_once 'Views/Shared/_header.php';
          require_once 'Views/' . $view . '.html';
          require_once 'Views/Shared/_footer.php';
        }
    }
?>