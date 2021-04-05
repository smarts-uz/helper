<?
namespace teamprodev\helper;
use laravelapp\helper\App;

class Main {

    function helloWorld()
    {
        $helper = new App\Helper();
        $helper->my_helper();
        echo "Hello main!";
    }
}








