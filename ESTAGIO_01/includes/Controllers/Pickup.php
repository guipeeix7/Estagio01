<?php 
    namespace ESTAGIO_01\includes\Controllers; 
    use ESTAGIO_01\includes\Core as Core; 
    use ESTAGIO_01\includes\Database;
    use \DateTimeZone;  
    require_once('C:\Program Files (x86)\Ampps\www\ESTAGIO_01\Autoloads.php'); 

    class Pickup{
        public function index(){
            Core::ShowView(Core::className(get_class()));
        }
        public function showQuery($getData){
            echo json_encode($getData);
        }
    }

    if(isset($_POST['name'])){
        $data = array(
        "name" => $_POST['name']);

        $queryResult = Database::SearchQuery("Products", $data);
        Pickup::showQuery($queryResult);
    }


    else if(isset($_POST['id']) && isset($_POST['update'])){
        $data = Database::getById("Products",$_POST['id']);
        Pickup::showQuery($data);

         
    }
    else if(isset($_POST['id']) && isset($_POST['QntLeft'])){
        $data = array(
            "quantity"=>$_POST['QntLeft'],
        );
        if($_POST['QntLeft'] >0 ){
            $getdata = Database::edit("Products",$data,$_POST['id']);
        }
        //Pickup::showQuery($data);    
    }
    else if($_POST['moneyT']){
        date_default_timezone_set('America/Sao_Paulo'); 
            // echo $date->format('Y-m-d H:i:sP');
        $data = array(
            "Product"=>$_POST['Product'],
            "Quantity"=>$_POST['Quantity'],
            "moneyT"=>$_POST['moneyT'],
            "date"=>date("Y-m-d H:i:s")
        );


        Database::add("Logs", $data);

    }
    else if(isset($_POST['ShowLogs'])){
        $get_data = Database::getAll("Logs");
        Pickup::showQuery($get_data);  
    }

?>