<?php

namespace app\models ;


class Moto extends Vehiculo {
    public bool $sidecar;

    function __contruct(int $id,string $marca,string $modelo,int $anio,string $tipo,bool $sidecar){
        parent::__construct($id,$marca,$modelo,$anio,$tipo);
        $this->sidecar=$sidecar;

    }


}
        

?>