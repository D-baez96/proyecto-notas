<?php
class connection
{
    public $bd;
    private $drive = "mysql";
    private $host = "localhost";
    private $namebd = "notas2023";
    private $user = "root";
    private $Password = "";

    public function __construct()
{
    try {
        $bd = new PDO("{$this-> drive}:host={$this-> host}; namebd={$this-> namebd}",$this->user, $this-> Password);

        $bd->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa";
        //return $bd;
        
    }catch(PDOException $e){
        echo "No se puede realizar la conexión".$e->getMessage();
    }
}
}




?>
