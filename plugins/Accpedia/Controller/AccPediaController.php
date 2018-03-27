<?php

namespace Kanboard\Plugin\Accpedia\Controller;

use Kanboard\Controller\BaseController;
use Kanboard\Filter\TaskProjectFilter;
use Kanboard\Model\TaskModel;

/**
 * Tasks Gantt Controller
 *
 * @package  Kanboard\Controller
 * @author   Ardyanto
 * @property \Kanboard\Plugin\Gantt\Formatter\TaskGanttFormatter $taskGanttFormatter
 */
class AccPediaController extends BaseController
{
    /**
     * Show Gantt chart for one project
     */
    public function show()
    {	
        $this->response->html($this->helper->layout->app('Accpedia:task_gantt/show', array(
            'title' => 'Accpedia'
        )));
    }

    /**
     * Save new task start date and due date
     */
    public function save()
    {
        $this->getProject();
        $values = $this->request->getJson();

        $result = $this->taskModificationModel->update(array(
            'id' => $values['id'],
            'date_started' => strtotime($values['start']),
            'date_due' => strtotime($values['end']),
        ));

        if (! $result) {
            $this->response->json(array('message' => 'Unable to save task'), 400);
        } else {
            $this->response->json(array('message' => 'OK'), 201);
        }
    }
}
