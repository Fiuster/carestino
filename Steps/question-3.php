<?php
/**
 * Implemente groupByOwners:
 * Qué acepte un array asociativo que contiene el nombre del archivo y el propietario
 * Qué devuelva un array asociativo que contenga un array de nombre de archivo para cada propietario en cualquier orden.
 * Por ejemplo. Para
$files = [
"Input.txt" => "Randy",
"Code.py" => "Stan",
"Output.txt" => "Randy"
];

 * Devolverá:
$files = [
"Randy" => [“Input.txt”, "Output.txt"],
"Stan" => [“Code.py”]
];

 */

class Problem
{
    public static function groupByOwners(array $files) : array
    {
        //var_dump ($files);
        $r = array();

        //armo las claves

        foreach($files as $a=>$key){
            //echo 'clave ='.$a.'  valor='.$files[$a].'   ---  ';
            if(!array_key_exists($files[$a], $r)){
                //print_r($r);
                $r[$files[$a]]=array();
                array_push($r[$files[$a]], $a);
                //echo 'no esta en lista, creo item y agrego.';
            }
            else{
                array_push($r[$files[$a]], $a);
               // echo 'sí está en lista, agrego';

            } 


        }
        return $r;

    }
}

$files = [
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
];
var_dump(Problem::groupByOwners($files));
