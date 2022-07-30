<?php

namespace Classes;

class Funcionario extends Pessoa
{
    protected int $registro;
    public string $alimentado = '';
    private string $cargo;
    public static array $cargos = [
        'gerente' => 25200,
        'vendedor' => 5200,
        'atendente' => 4500,
    ];

    /**
     * constructor
     *
     * @param string $nome
     * @param string $sexo
     * @param boolean $acordado
     * @param int $registro
     */
    public function __construct(
        string $nome,
        string $sexo,
        bool $acordado,
        int $registro,
        string $cargo
    ) {
        parent::__construct($nome, $sexo, $acordado);
        $this->registro = $registro;
        $this->cargo = $cargo;
    }

    /**
     * function setRegistro
     *
     * @param int $registro
     * @return void
     */
    public function setRegistro(int $registro): void
    {
        $this->registro = $registro;
    }

    /**
     * function getRegistro
     *
     * @return int
     */
    public function getRegistro(): int
    {
        return $this->registro;
    }

    /**
     * function cargo
     *
     * @return string
     */
    public function cargo(): string
    {
        return $this->cargo;
    }

    /**
     * function dormir
     *
     * @return void
     */
    public function dormir(): void
    {
        echo "Bons sonhos {$this->nome}" . PHP_EOL;
        $this->acordado = false;
    }

    /**
     * function salarioPorCargo
     *
     * @param string $nomeDoCargo
     * @return ?float
     */
    public static function salarioPorCargo(string $nomeDoCargo): ?float
    {
        return static::$cargos[$nomeDoCargo] ?? null;
    }

    /**
     * function getSalario
     * @return ?float
     */
    public function getSalario(): ?float
    {
        return static::salarioPorCargo($this->cargo);
    }

    /**
     * function promover
     *
     * @param string $cargo
     * @return void
     */
    public function promover(string $cargo): void
    {
        echo "Promovendo a: {$cargo}\n";

        if (! (static::$cargos[$cargo] ?? null)) {
            echo "Cargo inexistente\n";
            return;
        }

        if (static::$cargos[$this->cargo] > static::$cargos[$cargo]) {
            echo "Isso não é uma promoção. Novo salário inferior ao atual\n";
            return;
        }

        $this->cargo = $cargo;
    }
}
