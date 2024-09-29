<?php
/**
 * @param string $className
 */
spl_autoload_register(function ($className) {

    $file = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    

    if (file_exists($file)) {
        require_once $file;
    } else {
        echo "Файл для класу {$className} не знайдений за шляхом: {$file}<br>";
    }
    spl_autoload_register(function ($className) {
        $file = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
        echo "Шукаю файл: $file<br>";
        if (file_exists($file)) {
            require_once $file;
        } else {
            echo "Файл не знайдений: $file<br>";
        }
    });
    
});
?>
