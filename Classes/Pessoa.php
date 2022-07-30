<?php

namespace Classes;

class Pessoa
{
    protected string $nome;
    protected string $sexo;
    protected bool $acordado;

    /**
     * constructor
     *
     * @param string $nome
     * @param string $sexo
     * @param boolean $acordado
     */
    public function __construct(string $nome, string $sexo, bool $acordado)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->acordado = $acordado;
    }

    /**
     * function acordar
     *
     * @return void
     */
    public function acordar(): void
    {
        $this->acordado = true;
    }

    /**
     * function dormir
     *
     * @return void
     */
    public function dormir(): void
    {
        $this->acordado = false;
    }

    /**
     * function acordado
     *
     * @return string
     */
    public function acordado(): string
    {
        return $this->acordado ? 'sim' : 'não';
    }
}
