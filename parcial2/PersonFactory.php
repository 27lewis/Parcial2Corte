<?php
require_once 'PersonType.php';

class PersonFactory {
    public static function crearPersona($edad) {
        if ($edad < 6) {
            return new Bebe();
        } elseif ($edad >= 6 && $edad <= 11) {
            return new Nino();
        } elseif ($edad >= 12 && $edad <= 17) {
            return new Adolescente();
        } else {
            return new Adulto();
        }
    }
}
?>
