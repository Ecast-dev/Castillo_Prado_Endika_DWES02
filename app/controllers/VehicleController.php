<?php

namespace app\controllers;

use app\models\Vehiculo;
use app\models\vehiculos_bbdd;
use app\models\Coche;
use app\models\Moto;


class VehicleController {
    
    public function store($vehiculoData): ?Vehiculo{
        
        return null;       
    }

    /*
    Objetivo: conseguir el objeto con un id determiando
    Imput: id que se busca
    Output: objeto buscado
    */
    public function getById($id): ?Vehiculo
    {
        //cargo aqui el array the objetos que consegui antes,busco el que me interesa por la id
        {
        $vehiculos = $this->leerVehiculos();
        foreach ($vehiculos as $v) {
            if ($v->id === $id) {
                return $v;
            }
        }
        return null;
    
        }
    }
    /* 
    objetivo: leer los datos de la bbdd
    imput: nada
    output: array
    */

    private function leerVehiculos():array{ 

        //ruta de la base de datos
        $file = __DIR__ . '/../app/models/vehiculos_bbdd.php';

        // Veo que dentro de la BBDD se define el array como una cte global,con ayuda, he conseguido saber como hacer que 
        //esa contante la pueda meter en una variable que luego puedo devolver

        require $file;
        $vehiculos = constant('VEHICULOS');

        //hago un array que llenare de objetos,dependiendo del tipo sera con un consturctor u otro
        $resultado = [];
        foreach ($vehiculos as $v) {
            if (($v['tipo'] ?? null) === 'coche') {
                $resultado[] = new Coche(
                    (int)$v['id'],
                    (string)$v['marca'],
                    (string)$v['modelo'],
                    (int)$v['anio'],
                    (int)$v['puertas']
                );
            } elseif (($v['tipo'] ?? null) === 'moto') {
                $resultado[] = new Moto(
                    (int)$v['id'],
                    (string)$v['marca'],
                    (string)$v['modelo'],
                    (int)$v['anio'],
                    (bool)($v['tieneSidecar'] ?? false)
                );
            }
        }
        return $resultado;
        
    }

}



