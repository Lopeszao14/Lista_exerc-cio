<?php
// Classe base 'Animal'
class Animal {
    // Propriedades privadas
    private $nome;
    private $idade;

    // Método construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Métodos para acessar as propriedades
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function setIdade($novaIdade) {
        $this->idade = $novaIdade;
    }
}

// Classe derivada 'Cachorro' que herda de 'Animal'
class Cachorro extends Animal {
    // Sobrescrevendo o método getIdade
    public function getIdade() {
        // Chama o método getIdade da classe pai e modifica a saída
        return parent::getIdade() . " anos (idade do cachorro)";
    }
}

// Criando um objeto da classe Cachorro
$cachorro = new Cachorro("Rex", 5);

// Exibindo as propriedades do cachorro
echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Idade: " . $cachorro->getIdade();
?>
