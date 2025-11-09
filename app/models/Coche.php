<?php

namespace app\models ;

class Coche extends Vehiculo {
    protected int $puertas;

    function __construct(int $id,string $marca,string $modelo,int $anio,int $puertas)
    {
        parent::__construct($id,$marca,$modelo,$anio,'coche');
        $this->puertas = $puertas;
    }
        public function mostrarInfo(): string {
        return parent::mostrarInfo() . " - Puertas: {$this->puertas}";
    }
    
}
?>