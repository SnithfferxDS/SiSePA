<?php
    class Home extends Controller
    {
        public function inicio()
        {
            $titulo = 'Home';
            $this->view("inicio",array('header'=>$titulo));
        }
    }