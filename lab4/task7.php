<?php

class FileManager {
    public static $dir = "text";

    public static function writeToFile($fileName, $content) {
        $filePath = self::$dir . '/' . $fileName;
        file_put_contents($filePath, $content, FILE_APPEND);
        echo "Дані дописано у файл: $filePath\n";
        echo "<br>";
    }

    public static function readFromFile($fileName) {
        $filePath = self::$dir . '/' . $fileName;
        if (file_exists($filePath)) {
            $content = file_get_contents($filePath);
            echo "Вміст файлу $filePath:\n$content\n";
            echo "<br>";
        } else {
            echo "Файл не знайдено: $filePath\n";
            echo "<br>";
        }
    }


    public static function clearFile($fileName) {
        $filePath = self::$dir . '/' . $fileName;
        if (file_exists($filePath)) {
            file_put_contents($filePath, '');
            echo "Вміст файлу $filePath очищено.\n";
            echo "<br>";
        } else {
            echo "Файл не знайдено: $filePath\n";
        }
    }
}

if (!is_dir(FileManager::$dir)) {
    mkdir(FileManager::$dir);
}
file_put_contents(FileManager::$dir . '/file1.txt', '');
file_put_contents(FileManager::$dir . '/file2.txt', '');
file_put_contents(FileManager::$dir . '/file3.txt', '');

FileManager::writeToFile('file1.txt', "Привіт, файл 1!\n");
FileManager::readFromFile('file1.txt');
FileManager::clearFile('file1.txt');
FileManager::readFromFile('file1.txt');
?>
