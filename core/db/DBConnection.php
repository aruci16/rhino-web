<?php
/**
 * Created by PhpStorm.
 * User: aleks
 * Date: 12/24/15
 * Time: 10:54 PM
 */

class DBConnection
{
    //constants that specify which DB is being used
    private static $ALEKS_TEST = 1;
    private static $ALEKS_PRODUCTION = 2;
    private static $GRENT_TEST = 3;
    private static $GRENT_PRODUCTION = 4;

    private $DB_USER;
    private $DB_PASS;
    private $DB_NAME;
    private $DB_HOST;

    private $db;

    public function __construct()
    {
        $this->chooseDB(self::$ALEKS_TEST);

        $this->db = new PDO('mysql:host='.$this->DB_HOST.';dbname='.$this->DB_NAME.';charset=utf8',
            $this->DB_USER, $this->DB_PASS);
        $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }

    private function chooseDB($mode)
    {
        switch ($mode) {
            case self::$ALEKS_TEST:
                $this->DB_USER = "root";
                $this->DB_PASS = "root";
                $this->DB_NAME = "rhino";
                $this->DB_HOST = "localhost";
                break;
            case self::$ALEKS_PRODUCTION:
                $this->DB_USER = "aruci16";
                $this->DB_PASS = "ar622uci";
                $this->DB_NAME = "web18_aruci16";
                $this->DB_HOST = "stud-proj.epoka.edu.al";
                break;
            case self::$GRENT_TEST:
                $this->DB_USER = "";
                $this->DB_PASS = "";
                $this->DB_NAME = "";
                $this->DB_HOST = "";
                break;
            case self::$GRENT_PRODUCTION:
                $this->DB_USER = "";
                $this->DB_PASS = "";
                $this->DB_NAME = "";
                $this->DB_HOST = "";
                break;
            default:
                die("<h1 style='color: red;'>Could not connect to DB!</h1>");
        }
    }

    public function get_db()
    {
        return $this->db;
    }

    public function __destruct()
    {
        $this->db = null;
    }

    public function prepare($statement) {
        return $this->db->prepare($statement);
    }

}
