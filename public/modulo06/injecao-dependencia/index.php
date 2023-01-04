<?php

interface MatematicaBasica
{
    public function somar($x, $y);
}

class Basico1 implements MatematicaBasica
{
    public function somar($x, $y)
    {
        return $x + $y;
    }
}

class Basico2 implements MatematicaBasica
{
    public function somar($x, $y)
    {
        $res = $x;
        for ($i=0; $i < $y; $i++) {
            $res++;
        }

        return $res;
    }
}

class Matematica
{
    private MatematicaBasica $basico;

    public function __construct(MatematicaBasica $basico)
    {
        $this->basico = $basico;
    }

    public function somar($x, $y)
    {
        return $this->basico->somar($x, $y);
    }
}

// $basico = new Basico1();
// $mat = new Matematica($basico);
$mat = new Matematica(new Basico1()); // outra forma de fazer

echo $mat->somar(10, 20);


interface DatabaseInterface
{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class MysqlEngine implements DatabaseInterface
{
    public function create()
    {
    }

    public function read()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}

class OracleEngine implements DatabaseInterface
{
    public function create()
    {
    }

    public function read()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}

class Database
{
    private DatabaseInterface $engine;
    public function __construct(DatabaseInterface $eng)
    {
        $this->engine = $eng;
    }

    public function findAll()
    {
        return $this->engine->read();
    }
}

$db = new Database(new MysqlEngine());
$db->findAll();
