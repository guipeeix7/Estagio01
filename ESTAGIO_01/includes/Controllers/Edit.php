<?php 
    namespace ESTAGIO_01\includes\Controllers; 
    use ESTAGIO_01\includes\Core as Core; 
    use ESTAGIO_01\includes\Database; 
    require_once('C:\Program Files (x86)\Ampps\www\ESTAGIO_01\Autoloads.php'); 

    class Edit{
        
        public function index(){
            //$_SESSION['data'] = Database::getAll("Products"); 
            Core::ShowView(Core::className(get_class()));
        }

        public function insertDB(){
            
        }

        public function view(){

        }

        public function showQuery($getData){
            echo json_encode($getData);
        }
    }

    //This part goes to our beatiful and complete Ajax requests     
    
    if(isset($_POST['id']) && isset($_POST['name']) && !isset($_POST['update'])){
        $data = array(
            "name" => $_POST['name'],
            "value" => $_POST['value'],
            "quantity" => $_POST['quantity'],
            "description" => $_POST['description']); 
        Database::edit("Products",$data,$_POST['id']);
       
        //Edit::showQuery($data); 
    }

    else if(isset($_POST['name'])){
        $data = array(
        "name" => $_POST['name'],
        "value" => $_POST['value'],
        "quantity" => $_POST['quantity'],
        "description" => $_POST['description']);

        $queryResult = Database::SearchQuery("Products", $data);
        Edit::showQuery($queryResult);
    }
    

    else if(isset($_POST['id']) && !isset($_POST['update'])){
        Database::delete("Products",$_POST['id']);
    }

    else if(isset($_POST['id']) && isset($_POST['update'])){
        $data = Database::getById("Products",$_POST['id']);
        Edit::showQuery($data); 
    }
    
    


    
    