<?php

require_once 'models/Usuario.php';

class UsuarioDaoMysql implements UsuarioDAO
{
    private $link;

    public function __construct( mysqli $drive ){
        $this->link = $drive;
    }

    public function adicionar( Usuario $u )
    {
        $array = [];

        $sql = 'INSERT INTO usuarios (nome, email) VALUES (?, ?)';

        $sql = mysqli_prepare($link, $sql);
        $sql->bind_param('ss', $u->getNome(), $u->getEmail() );
        $sql->execute();
        $ultimo_id = mysqli_insert_id($link);
        mysqli_close($link);

        $u->setId( $ultimo_id );

        $array = $u;

        return $array;

    }
    public function selecionar_todos()
    {
        $array = [];

        $sql = 'SELECT * FROM usuarios';
        $sql = mysqli_query( $this->link, $sql);

        if( $sql->num_rows > 0 ) {

            // Organiza a consulta para ser usado como array
            $data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
    
            // Para cada item é feito um loop
            foreach ( $data as $item ) {
                $u = new Usuario;
                $u->setId( $item['id'] );
                $u->setNome( $item['nome'] );
                $u->setEmail( $item['email'] );

                $array[] = $u;
            }
        }

        mysqli_close( $this->link );
        return $array;
    }
    public function selecionar_id( $id )
    {

    }
    public function atualizar( Usuario $u )
    {

    }
    public function deletar( Usuario $u )
    {

    }
}