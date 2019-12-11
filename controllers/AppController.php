<?php

declare(strict_types=1); #php trzymie się sztywno typów

class AppController{
    private $request;

    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_METHOD'];#zwraca nazw metody http użytej w otwartej stronie
    }

    protected function isGet(): bool
    {
        return $this->request === 'GET'; #porównanie wartości i typu czyli czy nasz request jest getem
    }

    protected function isPOST(): bool
    {
        return $this->request === 'POST'; #porównanie wartości i typu czyli czy nasz request jest postem
    }

    protected function render($variables = array(), $filename=null)
    {
        $templatePath = $filename ? dirname(__DIR__).'\\Views\\'.get_class($this).'\\'. $filename.'.php' : '';

        $output = 'File not found';
        
        if(file_exists($templatePath)){
            extract($variables);
            
            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }
        print $output;
        
    }
}


