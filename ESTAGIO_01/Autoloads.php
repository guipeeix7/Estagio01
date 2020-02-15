<?php
namespace ESTAGIO_01;
class Autoloads{

    static public function autoload($class){
        $prefix = 'ESTAGIO_01\\';
        $base_dir = __DIR__ . '\\';
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            return;
        }
        $relative_class = substr($class, $len);

        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
 
        if (file_exists($file)) {
            
            //echo "arquivo incluido<hr>";
            require $file;
        } 
        else {
            echo "Esta página nao pôde ser encontrada!";
            echo "$file";
            
        } 
    }
    public function defined(){
        echo "I found you baby (:' !";
    }
}


spl_autoload_register(__NAMESPACE__ .'\Autoloads::autoload');
