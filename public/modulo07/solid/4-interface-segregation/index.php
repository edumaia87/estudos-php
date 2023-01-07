<?php


// Em uma interface eu preciso ter apenas os métodos essênciais que as classes que o implementam precisam ter
/*interface Aves
{
    public function setLocalizacao($latitude, $longitude);
    public function setAltitude($altitude); //Nem todas as aves voam então não pode ser um método obrigatório
    public function renderizar();
}*/

interface Aves
{
    public function setLocalizacao($latitude, $longitude);
    public function renderizar();
}

interface AvesQueVoam extends Aves
{
    public function setAltitude($altitude);
}

class Papagaio implements AvesQueVoam
{
    public function setLocalizacao($latitude, $longitude)
    {
    }
    public function setAltitude($altitude)
    {
    }
    public function renderizar()
    {
    }
}

class Pinguim implements Aves
{
    public function setLocalizacao($latitude, $longitude)
    {
    }
    /*public function setAltitude($altitude) Pinguim é uma ave que não voa, ou seja, esse método é irrelevante aqui.
    {
    }
    */
    public function renderizar()
    {
    }
}

function sasgaysga(Aves $ave) //Aqui posso receber uma classe pinguim.
{
}

function sasgays(AvesQueVoam $ave) //Aqui só posso receber classes de aves que voam.
{
}
