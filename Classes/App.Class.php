<?php
    class App
    {
        protected $controller = 'Home';
        protected $method = 'index';
        protected $params = array();

        public function __construct()
        {
            if($_POST)
            {
                if(isset($_POST['control']))
                {
                    $this->controller = $_POST['control'];
                }
                else
                {
                    //redirect to error
                }

                if(isset($_POST['metodo']))
                {
                    $this->method = $_POST['metodo'];
                }
                if(isset($_POST['data']))
                {
                    $this->params = $_POST['data'];
                }
            }
    
            require_once 'Controllers/' . $this->controller . '.Controller.php';
            $this->controller = new $this->controller;
    
            if(isset($this->method))
            {
                if(method_exists($this->controller, $this->method))
                {
                    $this->params = $params ? array_values($params) : array();

                    $metodo = array($this->controller,$this->method);
                    call_user_func_array($metodo, $this->params);
                }
            }
        }
    }
?>