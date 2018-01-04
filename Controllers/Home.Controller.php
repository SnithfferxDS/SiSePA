<?php
    class Home extends Controller
    {
        public function index()
        {
            $titulo = 'Home';
            $this->view("Home/inicio",array('header'=>$titulo));
        }
    }