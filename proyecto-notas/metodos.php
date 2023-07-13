<?php
include_once('conexion.php');

class Consulta extends connection
{
    public function __construct()
    {
        $this->bd=parent::__construct();
    }

    public function getMaterias()
    {
        $row=null;
        $statement = $this->bd->prepare("SELECT * FROM materias");
        $statement -> execute();
        while ($result = $statement->fetch())
        {
            $row[]=$result;
        }
        return $row;

    }
    public function getDocente()
    {
        $sql = "SELECT * FROM docente";
        $result = $this->bd->query($sql);
        if($result -> rowCount()>0)
        {
            while ($row = $result->fetch())
            {
                $vec[]=$row;
            }
        }
        return $vec;
    }
}
?>