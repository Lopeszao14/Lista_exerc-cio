<?php
class Livro {
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

    public function setTitulo($novoTitulo) {
        $this->titulo = $novoTitulo;
    }

    public function setAutor($novoAutor) {
        $this->autor = $novoAutor;
    }
}


$livro = new Livro("O Arqueiro", "Paulo Coelho");


echo "Título: " . $livro->getTitulo() . "<br>";
echo "Autor: " . $livro->getAutor() . "<br>";


$livro->setTitulo("Brida");
$livro->setAutor("Paulo Coelho");


echo "Novo Título: " . $livro->getTitulo() . "<br>";
echo "Novo Autor: " . $livro->getAutor();
?>
