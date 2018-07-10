<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project`.
 */
class m180709_194016_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'project_name' => $this->string(),
            'project_status' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project');
    }
}
