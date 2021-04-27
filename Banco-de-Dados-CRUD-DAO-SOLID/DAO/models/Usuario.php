<?php

class Usuario
{
    private $id;
    private $nome;
    private $email;

    // Get & Set ID
    public function getId() {
        return $this->id;
    }
    public function setId($i) {
        
        // Filtro sem espaços extras
        $this->id = trim($i);
    }

    // Get & Set NOME
    public function getNome() {
        return $this->nome;
    }
    public function setNome($i) {

        // Filtro sem espaços extras e cada primeira palavra maiusculas
        $this->nome = ucwords(trim($i));
    }

    // Get & Set EMAIL
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($i) {

        // Filtro sem espaços extras e todo email fica em minusculo
        $this->email = strtolower(trim($i));
    }

}

// Interface para integração

interface UsuarioDAO {

    // Funções PADRAO a ser seguido para implementação
    public function adicionar( Usuarios $u );
    public function selecionar_todos();
    public function selecionar_id( $id );
    public function atualizar( Usuarios $u );
    public function deletar( Usuarios $u );

}