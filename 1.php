<?php
class Livro {
    // Propriedades privadas
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
}

$livro = new Livro("O Arqueiro", "Paulo Coelho");

echo "Título: " . $livro->getTitulo() . "<br>";
echo "Autor: " . $livro->getAutor();
?>
