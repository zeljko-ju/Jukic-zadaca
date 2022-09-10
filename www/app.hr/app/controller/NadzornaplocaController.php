<?php

class NadzornaPlocaController extends Controller
{
    public function index()
    {
        $this->view->render('privatno' . DIRECTORY_SEPARATOR .
                            'nadzornaploca');
    }
}