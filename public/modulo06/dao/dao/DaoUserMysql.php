<?php

require 'models/User.php';

class DaoUserMysql implements DaoUser
{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function add(User $user)
    {
        $sql = $this->pdo->prepare("INSERT INTO user (name, email) VALUES (:name, :email)");
        $sql->bindValue(':name', $user->getName());
        $sql->bindValue(':email', $user->getEmail());
        $sql->execute();

        $user->setId($this->pdo->lastInsertId());
        return $user;
    }

    public function findAll(): array
    {
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM user");
        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();

            foreach ($data as $item) {
                $user = new User();
                $user->setId($item['id']);
                $user->setName($item['name']);
                $user->setEmail($item['email']);

                $array[] = $user;
            }
        }

        return $array;
    }

    public function findByEmail($email)
    {
        $sql = $this->pdo->prepare("SELECT * FROM user WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();

            $user = new User();
            $user->setId($data['id']);
            $user->setName($data['name']);
            $user->setEmail($data['email']);

            return $user;
        } else {
            return false;
        }
    }

    public function findById($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM user WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();

            $user = new User();
            $user->setId($data['id']);
            $user->setName($data['name']);
            $user->setEmail($data['email']);

            return $user;
        } else {
            return false;
        }
    }

    public function update(User $user)
    {
        $sql = $this->pdo->prepare("UPDATE user SET name = :name, email = :email WHERE id = :id");
        $sql->bindValue(':name', $user->getName());
        $sql->bindValue(':email', $user->getEmail());
        $sql->bindValue(':id', $user->getId());
        $sql->execute();

        return true;
    }

    public function delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM user WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
}
