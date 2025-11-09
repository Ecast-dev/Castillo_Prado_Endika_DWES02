<?php

namespace app\models ;

class Vehiculo{
    
    public int $id;
    public string $marca;
    public string $modelo;
    public int $anio;
    public string $tipo;
    
    function __construct(int $id,string $marca,string $modelo,int $anio,string $tipo) {
        $this->$id = $id;
        $this->$marca = $marca;
        $this->$modelo = $modelo;
        $this->$anio = $anio;
        $this->$tipo = $tipo;
        
    }
    
}

?>