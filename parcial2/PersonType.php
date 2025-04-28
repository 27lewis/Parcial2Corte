<?php

abstract class PersonType {
    abstract public function imprimirFormulario();
}

class Bebe extends PersonType {
    public function imprimirFormulario() {
        echo "<div class='container'>";
        echo "<h2>Bebé</h2>";
        echo "<img src='img/bebe.jpg' alt='BEBe' class='imagen'>";
        echo "<p>No se solicita información para bebés.</p>";
        echo "</div>";
    }
}


class Nino extends PersonType {
    public function imprimirFormulario() {
        echo "<div class='container'>";
        echo "<h2>Niño</h2>";
        echo "<img src='img/niño.avif' alt='Niño' class='imagen'>";
        echo "<form>
                Escuela Primaria: <input type='text' name='escuela'><br><br>
              </form>";
        echo "</div>";
    }
}


class Adolescente extends PersonType {
    public function imprimirFormulario() {
        echo "<div class='container'>";
        echo "<h2>Adolescente</h2>";
        echo "<img src='img/adolescentes.jpg' alt='Adolescente' class='imagen'>";
        echo "<form>
                Escuela Primaria: <input type='text' name='escuela'><br><br>
                Bachillerato: <input type='text' name='bachillerato'><br><br>
              </form>";
        echo "</div>";
    }
}


class Adulto extends PersonType {
    public function imprimirFormulario() {
        echo "<div class='container'>";
        echo "<h2>Adulto</h2>";
        echo "<img src='img/adulto.jpg' alt='Adulto' class='imagen'>";
        echo "<form>
                Escuela Primaria: <input type='text' name='escuela'><br><br>
                Bachillerato: <input type='text' name='bachillerato'><br><br>
                Universidad: <input type='text' name='universidad'><br><br>
              </form>";
        echo "</div>";
    }
}
?>
