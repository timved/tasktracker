<?php

use yii\db\Migration;

/**
 * Class m180709_195447_createColumn_project_id_task_table
 */
class m180709_195447_createColumn_project_id_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('task','project_id',$this->integer(6));
        $this->addForeignKey('fk_task_project', 'task','project_id','project','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('task','project_id');
        $this->dropForeignKey('fk_task_project', 'tags');

        echo "m180709_195447_createColumn_project_id_task_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180709_195447_createColumn_project_id_task_table cannot be reverted.\n";

        return false;
    }
    */
}
