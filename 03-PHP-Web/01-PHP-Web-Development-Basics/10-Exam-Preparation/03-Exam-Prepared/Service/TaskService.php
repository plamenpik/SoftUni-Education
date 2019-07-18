<?php
/**
 * Created by PhpStorm.
 * User: vesel
 * Date: 11/5/2018
 * Time: 9:36 PM
 */

namespace Service;


use Repository\TaskRepository;

class TaskService
{

    /**
     * @var TaskRepository
     */
    private $task_repository;

    /**
     * TaskService constructor.
     * @param TaskRepository $task_repository
     */
    public function __construct(TaskRepository $task_repository)
    {
        $this->task_repository = $task_repository;
    }


    public function getList(int $user_id){
        return $this->task_repository->getAll($user_id);
    }

    public function delete(int $task_id)
    {
        $this->task_repository->delete($task_id);
    }
}