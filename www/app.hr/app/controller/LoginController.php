<?php

class LoginController extends Controller
{
    public function prijava()
    {
       // $this->view->render('prijava',[
        //    'poruka'=>'Popunite tražene podatke'
       // ]);
       $this->prijavaView('oper@edunova.hr','Popunite tražene podatke');
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

       
        $veza = DB::getInstance();
        
        echo $veza->errorCode();
        //Log::log($veza);
            // uredi kod dolje, nisam stigao popratiti
        $operater = Operater::autoriziraj$this->prijavaView($_POST['email'],'Lozinka obavezno');
        

            $_SESSION['autoriziran']=$operater;
            //$np = new NadzornaplocaController();
            //$np->index();
           //header('location:' . App::config('url') . 'nadzornaploca');

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