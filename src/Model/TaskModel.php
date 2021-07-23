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
        $query = $this->db->prepare('SELECT `id`, `task`, `completed` FROM `todo`;');
        $query->execute();
        return $query->fetchAll();
    }

    public function addTask(string $task): bool
    {
        $query = $this->db->prepare('INSERT INTO `todo` (task, completed) VALUES (:task, 0);');
        return $query->execute([':task'=>$task]);
    }

    public function updateTask(string $task): bool
    {
        $query = $this->db->prepare('UPDATE `todo` SET completed = 1  WHERE  task = :task;');
        return $query->execute([':task'=>$task]);
    }

}