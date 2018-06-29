<?php

use yii\db\Migration;

/**
 * Class m180627_163931_create_user_role_id_column
 */
class m180627_163931_create_user_role_id_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user','role_id',$this->integer(6));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user','role_id');
        echo "m180627_163931_create_user_role_id_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180627_163931_create_user_role_id_column cannot be reverted.\n";

        return false;
    }
    */
}
