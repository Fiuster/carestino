<?php
/**
 * Implementá el método unique_names.
 * Recibe por parámetro dos arrays y deberá devolver un único array que contenga los valores unificados.
 * El array que devuelve no debe tener duplicados.
 * Por ejemplo, al llamar a unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']).
 * Devolvera ['Ava', 'Emma', 'Olivia','Sophia']
 */

class Problem
{
    static function unique_names(array $array1, array $array2): array
    {
        //var_dump ( $array1);
        $resultado = array();
        foreach($array1 as $a){
            //var_dump($resultado);
            if(!in_array($a, $resultado))
                array_push($resultado, $a);
        }
        foreach($array2 as $b){
            if(!in_array($b, $resultado))
                array_push($resultado, $b);
        }
        
        return $resultado;
    }
}


$names = Problem::unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print // should print Ava, Emma, Olivia, Sophia
