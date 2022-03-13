<?php 

class DB {

    private static $db = null;

    public static function getConn()
    {
        if(self::$db == null){
            try {
                self::$db = new PDO('mysql:dbname=testrobot;charset=utf8;host=localhost', 'root', '');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        return self::$db;
    }

}

?>