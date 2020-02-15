<?php 
    namespace ESTAGIO_01\includes\Controllers; 
    use ESTAGIO_01\includes\Core as Core; 
    use ESTAGIO_01\includes\Database; 
    use ESTAGIO_01\includes\Autoloads; 
    require_once('C:\Program Files (x86)\Ampps\www\ESTAGIO_01\Autoloads.php'); 

    class Register{
        
        public function index(){
            $_SESSION['data'] = Database::getlast_3("Products");        
            Core::ShowView(Core::className(get_class()));
            
        }

        public function insertDB(){
            
        }

        public function view(){

        }

        public function showLast3(){
            $getData = Database::getlast_3("Products");
            foreach($getData as $data){
                echo '
                <tr>
                <td style="text-align: center;">
                    '.$data["name"].'
                </td>
                <td style="text-align: center;">    
                    '.$data["value"].'
                </td>
                <td style="text-align: center;">
                    '.$data["quantity"].'
                </td>
                <td style="text-align: center;">
                    '.$data["description"].'
                </td>
              </tr>'; 
            }
        }
    }

    //This part goes to our beatiful and complete Ajax requests     
    if(strlen($_POST['name']) > 3 && strlen($_POST['description']) > 3 && $_POST['quantity'] > 0 && $_POST['value'] > 0){
        $data = array(
        "name" => $_POST['name'],
        "value" => $_POST['value'],
        "quantity" => $_POST['quantity'],
        "description" => $_POST['description']); 
        Database::add("Products", $data);
        Register::showLast3(); 
    }

    


    
    