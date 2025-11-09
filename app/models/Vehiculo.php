<?php

namespace app\models ;

class Vehiculo{
    
    protected int $id;
    protected string $marca;
    protected string $modelo;
    protected int $anio;
    protected string $tipo;
    
    //constructor de vehiculo
    function __construct(int $id,string $marca,string $modelo,int $anio,string $tipo) {
        $this->$id = $id;
        $this->$marca = $marca;
        $this->$modelo = $modelo;
        $this->$anio = $anio;
        $this->$tipo = $tipo;
        
    }

    //entiendo que luego me valdra, voy a hacer una funcion publica apra mostrar los datos del vehiculo
    public function mostrarInfo(): string {
        return "{$this->marca} {$this->modelo} ({$this->anio})";
    }    
}

?>