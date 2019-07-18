<?php
/**
 * Created by PhpStorm.
 * User: vesel
 * Date: 11/5/2018
 * Time: 9:35 PM
 */

namespace Http;


use Core\Template;
use Service\TaskService;
use Service\UserService;

class TaskHttp extends HttpAbstract
{

    /**
     * @var Template
     */
    private $template;

    /**
     * @var TaskService
     */
    private $task_service;

    private $user_service;

    /**
     * TaskHttp constructor.
     * @param Template $template
     * @param TaskService $task_service
     * @param UserService $user_service
     */
    public function __construct(Template $template,TaskService $task_service, UserService $user_service)
    {
        $this->template = $template;
        $this->task_service = $task_service;
        $this->user_service = $user_service;
    }

    public function dashboard(){
        $user = $this->user_service->get_current();
        if(!$user){
            $this->redirect('login.php');
        }

        $data = $this->task_service->getList($user->getUserId());
        $this->template->render('tasks/index',$data);
    }

    public function delete(array $data)
    {
        if(!isset($data['task_id'])){
            throw new \Exception('No task id');
        }
        $this->task_service->delete($data['task_id']);
        $this->redirect('dashboard.php');
    }

}