<?php
class loginController extends controller {

    

    public function entrar() {
        $dados = array();
        
        $this->loadTemplate('login/entrar', $dados);
        
    }
    
    public function cadastrar() {
        $dados = array();
        
        $this->loadTemplate('login/cadastrar', $dados);
    } 
}


