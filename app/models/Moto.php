<?php

namespace app\models ;


class Moto extends Vehiculo {
    protected bool $sidecar;

    function __contruct(int $id,string $marca,string $modelo,int $anio,bool $sidecar){
        parent::__construct($id,$marca,$modelo,$anio,'moto');
        $this->sidecar=$sidecar;

    }
    public function mostrarInfo(): string {
        $boolsidecar = $this->sidecar ? "con sidecar" : "sin sidecar";
        return parent::mostrarInfo() . " - {$boolsidecar}";
    }    


}
        

?>