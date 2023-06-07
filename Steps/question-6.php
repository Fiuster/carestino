<?php
/**
 * La interface de usuarios contiene dos tipos de controles de entrada.
 * TextInput, acepta todos los tipos
 * NumericInput que solo acepta dígitos.
 * Implemente la clase TextInput que contenga:
 * - Un método add($text) que agrega el texto dado al actual valor
 * - Un método getValue() que devuelva el actual valor
 *
 * Implemente la clase NumericInput que contenga:
 * - Hereda de TextInput
 * - El método add ignorará todo parámetro $text que no sea numérico
 */

class TextInput
{
    public string $valor;

    public function __construct(){
        $this->valor = '';
    }

    public function add(string $text){
        $this->valor.=$text;
    }

    public function getValue(){
        return $this->valor;
    }

}

class NumericInput extends TextInput
{

    public function add(string $text){
        if(is_numeric($text))
            $this->valor.=$text;
    }
}


$a = new TextInput;
$a->add('Hola');
$a->add(' que tal.');
echo ($a->getValue());


$b = new NumericInput;
$b->add('Hola');
$b->add(' que tal.');

echo ($b->getValue());


$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('532');
echo $input->getValue(); //print 1532