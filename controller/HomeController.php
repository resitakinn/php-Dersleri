<?php
/** class Tanımlama */
class HomeController{
    private $number = 100; //** sadece bu classta kullanılır */
    protected $strint = ''; //** sadece ben ve kalıtım yoluyla ilişkili olduklarım kullanılır */
    public $array = []; //** her yerde kullanılabilir */
    
    /** Method Tanımlama */
    public function index(){
        $title = "Anasayfa";
         require_once APP_ROOT .'/view/start.php';
    }
}