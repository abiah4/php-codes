<?php
//log
class Logger {
    public static $logCount = 0;
    public static function log($message){
        self::$logCount++;
        echo "log message" . self::$logCount . ":" . $message . "\n";
    }
}

Logger::log("this is the first log.");
Logger::log("this is the second log.");
Logger::log("this is the third log.");
echo "Total log count: " . Logger::$logCount . "\n";

//math
class Math{
    public static function add($a, $b){
        return $a + $b;
    }
    public static function subtract($a, $b){
        return $a - $b;
    }
    public static function multiply($a, $b){
        return $a * $b;
    }
}

$addResult = Math::add(4,5);
$subtractResult = Math::subtract(23,4);
$multiplyResult = Math::multiply(3,2);

echo "\n";
echo "Addition:" . $addResult . "\n";
echo "Subtraction:" . $subtractResult . "\n";
echo "Multiplication:" . $multiplyResult . "\n";

?>