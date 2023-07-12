<?php
class connection
{
    public $bd;
    private $drive = "mysql";
    private $host = "localhost";
    private $dbname = "notas2023";
    private $user = "root";
    private $Password = "";

    public function __construct()
{
    try {
        $this-> bd = new PDO("{$this-> drive}:host={$this-> host}; dbname={$this-> dbname}",$this->user, $this-> Password);

        $this-> bd->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this-> bd;
        
    }catch(PDOException $e){
        echo "No se puede realizar la conexión".$e->getMessage();
    }
}
}




?>
