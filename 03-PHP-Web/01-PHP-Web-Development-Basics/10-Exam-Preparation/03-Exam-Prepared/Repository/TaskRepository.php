<?php
/**
 * Created by PhpStorm.
 * User: vesel
 * Date: 11/5/2018
 * Time: 7:41 PM
 */

namespace Repository;


use Database\PDODatabase;
use DTO\TaskDTO;

class TaskRepository
{
    /**
     * @var PDODatabase
     */
    private $db;

    /**
     * UserRepository constructor.
     * @param PDODatabase $db
     */
    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }

    public function insert(TaskDTO $task):int{
        $stm = $this->db->query('INSERT INTO tasks 
          (TITLE,DESCRIPTION,LOCATION,USER_ID,CATEGORY_ID,STARTED_ON,DUE_DATE)
            VALUE(:title,:description,:location,:user_id,:category_id,:started_on,:due_date');

        $stm->execute($task->getParams());
        return $this->db->lastInsertId();
    }

    public function update(TaskDTO $task): void{
        $stm = $this->db->query('UPDATE tasks 
          SET TITLE = :title,DESCRIPTION = :description,LOCATION = :location,USER_ID = :user_id,CATEGORY_ID = :category_id,STARTED_ON = :started_on,DUE_DATE = :due_date
          WHERE TASK_ID = :task_id');

        $stm->execute($task->getParams());
    }

    public function delete(int $task_id){
        $stm = $this->db->query('DELETE FROM tasks WHERE TASK_ID = :task_id');
        $stm->execute(['task_id'=>$task_id]);
    }

    /**
     * @param int $user_id
     * @return \Generator|TaskDTO[]
     */
    public function getAll(int $user_id) : \Generator{
        $stm = $this->db->query(
            'SELECT TASK_ID,TITLE,DESCRIPTION,LOCATION,USER_ID,CATEGORY_ID,STARTED_ON,DUE_DATE, USERNAME, CAT.NAME CATEGORY_NAME
                    FROM tasks
                   INNER JOIN users USING (USER_ID)
                   INNER JOIN categories CAT USING (CATEGORY_ID) 
                   WHERE USER_ID = :user_id');

        $result = $stm->execute(['user_id'=>$user_id]);
        foreach ($result->fetch(TaskDTO::class) as $item){
            yield $item;
        }
    }
}