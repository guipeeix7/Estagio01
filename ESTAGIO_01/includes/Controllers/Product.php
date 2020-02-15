<?php 
    namespace ESTAGIO_01\includes\Controllers; 
    //use Models\ProductModel\ProductModelClass;
    use ESTAGIO_01\includes\Core as Core; 

    class Product{
        function print_product_class_names(){
            echo"This is my class bro"; 
        }
        public function index(){
            //Core::loadCss("ADASDSFSFDF"); 
            Core::ShowView(Core::className(get_class()));
        }
    }
    //ProductModelClass::printando();    


    //var_dump(class_exists('\ProductModel'), class_exists('\includes\model\ProductModel')); 
    //class_exists('Fetch\\Server');
    //ProductModel::printando();
    //Product::printando();




?>