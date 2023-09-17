<?php 

namespace Alura\Banco\Modelo;

/**
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
final class Endereco 
{
    use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __set(string $nomeAtributo, string $valor): void
    {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($valor);
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    private function alteraCidade(string $valor): void
    {
        $this->cidade = $valor;
    }
    
    private function alteraBairro(string $valor): void
    {
        $this->bairro = $valor;
    }

    private function alteraRua(string $valor): void
    {
        $this->rua = $valor;
    }

    private function alteraNumero(string $valor): void
    {
        $this->numero = $valor;
    }
}