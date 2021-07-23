<?php


namespace App\Model;


class TaskModel
{
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getAllTasks(): array
    {
        $query = $this->db->prepare('SELECT `task`, `completed` FROM `todo`;');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, CarEntity::class);
        return $query->fetchAll();
    }
}