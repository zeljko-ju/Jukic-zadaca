<?php

class LoginController extends Controller
{
    public function prijava()
    {
       // $this->view->render('prijava',[
        //    'poruka'=>'Popunite tražene podatke'
       // ]);
       $this->prijavaView('operater@edunova.hr','Popunite tražene podatke');
    }

    public function autorizacija()
    {
       
        if(!isset($_POST['email']) || 
        !isset($_POST['password'])){
            //$this->view->render('prijava',[
            //    'poruka'=>'Email i lozinka obavezno'
            //]);
            $this->prijava();
            return;
        }


        if(strlen(trim($_POST['email']))===0){
            //$this->view->render('prijava',[
            //    'poruka'=>'Email obavezno'
            //]);
            $this->prijavaView('','Email obavezno');
            return;
        }


        if(strlen(trim($_POST['password']))===0){
            $this->prijavaView($_POST['email'],'Lozinka obavezno');
            return;
        }

        // ovdje sam siguran kako su uneseni email i lozinka
        
        if($_POST['email']!=='operater@edunova.hr' ||
            $_POST['password']!=='o'){
                $this->prijavaView($_POST['email'],'Email i Lozinka ne ispravno');
                return; 
            }


            // kasnije ćemo se spojiti na bazu
            $_SESSION['autoriziran']=$_POST['email'];
            //$np = new NadzornaplocaController();
            //$np->index();
            header('location:' . App::config('url') . 'nadzornaploca');

    }

    private function prijavaView($email,$poruka)
    {
        $this->view->render('prijava',[
            'poruka'=>$poruka,
            'email'=>$email
        ]);
    }

    public function odjava()
    {
        unset($_SESSION['autoriziran']);
        session_destroy();
        $this->prijavaView('','Uspješno ste odjavljeni');
               
    }
}