<?php 
    namespace ESTAGIO_01\includes\Controllers; 
    use ESTAGIO_01\includes\Core as Core; 

    class Home{
        function __construct() {
            //print "Home class constructed";
        }

        public function index(){
            //Core::loadCss("ADASDSFSFDF"); 
            Core::ShowView(Core::className(get_class()));
        }
        

        public function view(){
            

        }  

        public function test(){
            //header("Refresh:0; url=page2.php");
        }
    }
    
    Core::DBconnect();


?>