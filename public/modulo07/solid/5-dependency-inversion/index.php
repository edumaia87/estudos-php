<?php

interface DBConnection
{
    public function connect();
}

class MySQLConnection implements DBConnection
{
    public function connect()
    {
    }
}
class PostgressConnection implements DBConnection
{
    public function connect()
    {
    }
}

/*class DaoUser
{
    private $database;

    public function __construct()
    {
        $this->database = new MySQLConnection(); Dessa forma ta errado porque minha classe ta dependendo
        da instanciação de outra classe pra funcionar.
    }
}

class DaoUser
{
    private $database;

    public function __construct(MySQLConnection $sql) Ainda ta errado pois se eu precisar mudar o banco
    de dados por exemplo eu teria que modificar o parâmetro.
    {
        $this->database = $sql;
    }
}
*/

class DaoUser
{
    private $database;

    public function __construct(DBConnection $sql)
    {
        $this->database = $sql;
    }
}

$dao_user = new DaoUser(new MySQLConnection());
$dao_user2 = new DaoUser(new PostgressConnection());
