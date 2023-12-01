<?php
class M{
    public function inprimir(){
        echo "hola ";
    }
    public function inprimir2(){
        echo "pendejo ";
        
    }
    


}
class MiClase {
    private $propiedadPrivada;

    public function __construct($valor) {
        $this->propiedadPrivada = $valor;
    }

    private function metodoPrivado() {
        return "Este es un método privado";
    }

    public function obtenerPropiedadPrivada() {
        return $this->propiedadPrivada;
    }

    public function llamarMetodoPrivado() {
        return $this->metodoPrivado();
    }
}

// Crear una instancia de la clase
$objeto = new MiClase("Hola, soy privado");

// Acceder a un método público que interactúa con la propiedad privada
echo $objeto->obtenerPropiedadPrivada(); // Salida: Hola, soy privado

// Intentar acceder directamente a la propiedad privada arrojará un error
// echo $objeto->propiedadPrivada; // Esto generará un error

// Intentar llamar al método privado también arrojará un error
// echo $objeto->metodoPrivado(); // Esto generará un error

// Pero podemos llamar al método privado desde un método público
echo $objeto->llamarMetodoPrivado(); 

$m=new M();
$m->inprimir2();
echo "no";
?>