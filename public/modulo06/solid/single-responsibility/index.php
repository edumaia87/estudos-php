<?php

/*class User
{
    public function getNome()
    {
    }
    public function setNome()
    {
    }
    public function add()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}*/


class User // Basicamente é uma classe ter apenas uma única responsabilidade
{
    public function getNome()
    {
    }
    public function setNome()
    {
    }
}

class DaoUser
{
    public function add(User $user)
    {
    }

    public function update(User $user)
    {
    }

    public function delete($id)
    {
    }
}
