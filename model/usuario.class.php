<?php

class Usuario
{
    private $codeUser;
    private $nome;
    private $email;
    private $senha;
    private $idade;
    private $telefone;
    private $mensagem;

    public function __construct()
    {
    }

    public function __destruct()
    {
    }



    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }


    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }


    public function getCodeUser()
    {
        return $this->codeUser;
    }

    public function setCodeUser($codeUser)
    {
        $this->codeUser = $codeUser;
    }

    public function getMensagem()
    {
        return $this->mensagem;
    }


    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }

    function __toString()
    {
        return nl2br(
            "<h3>Código: $this->codUser</h3>
                      <h4>Nome: $this->nome</h4>
                      <p>Email: $this->email</p>
                      <p>Senha: $this->senha</p>
                      <p>Idade: $this->idade </p>
                      <p>Telefone: $this->telefone</p>
                      <p>Mensagem: $this->mensagem</p>"
        );
    }
}
