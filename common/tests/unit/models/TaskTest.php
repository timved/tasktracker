<?php
namespace common\tests\models;

use common\fixtures\TaskFixture;
use common\models\Task;

class TaskTest extends \Codeception\Test\Unit
{
    /**
     * @var \common\tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $this->tester->haveFixtures([
            'task' => [
                'class' => TaskFixture::className(),
                'dataFile' => codecept_data_dir() . 'tasks.php'
            ],
        ]);
    }

    protected function _after()
    {
    }

    // tests
    /**
     * Тест для добавления задания
     */
    public function testCreate()
    {
        $task = new Task();
        $task->name = 'task';
        $task->date = '2018-07-20';
        $task->description = 'tasktestdes';
        $task->user_id = '1';
        $task->status = '4';
        $task->user->id = '1'; // смущает вот это, создание через таск, айдишник юзера
        expect_that($task->save());
    }
    /**
     * Форма должна выдать ошибку, если пытаюсь отправить пустую форму
     */
    public function testCreateEmptyFormSubmit()
    {
        $task = new Task();
        expect_not($task->validate());
        expect_not($task->save());
    }
    /**
     * Возможность удалить задание
     */
    public function testDelete()
    {
        $task = Task::findOne(1);
        expect_that($task !==  null);
        expect_that($task->delete());
    }
    /**
     * Возможность изменить задание
     */
    public function testUpdate()
    {
        $task = Task::findOne(['name' => 'test.task1.name']);
        expect_that($task !== null);
        $task->name = 'new.test.task1.name';
        $task->user->id = '1'; // смущает вот это, создание через таск, айдишник юзера
        expect_that($task->save());
        $updatedTask = Task::findOne(['name' => 'new.test.task1.name']);
        expect_that($updatedTask !== null);
    }
}