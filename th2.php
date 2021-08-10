<?php

use Application as GlobalApplication;

class Application 
{
    private static Application $instance;

    private function __construct()
    {
        
    }

    public static function getInstance(): GlobalApplication
    {
        if (self::$instance === null) {
            self::$instance = new Application();
            echo 'alo';
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance();
$app2 = Application::getInstance();
// $app3 = new Application();

?>