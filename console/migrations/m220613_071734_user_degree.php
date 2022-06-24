<?php

use yii\db\Migration;

/**
 * Class m220613_071734_user_degree
 */
class m220613_071734_user_degree extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%user_degree}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'degree' => "ENUM('Bachelor', 'Master', 'Doctor', 'Professional')",
        ], $tableOptions);

        $this->createIndex(
            'idx-degree-user_id',
            'user_degree',
            'user_id'
        );

        $this->addForeignKey(
            'fk-degree-user_id',
            'user_degree',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        echo "m220613_071734_user_degree cannot be reverted.\n";
        $this->dropForeignKey(
            'fk-degree-user_id',
            'user_degree'
        );
        $this->dropIndex(
            'idx-degree-user_id',
            'user_degree'
        );
        $this->dropTable('{{%user_degree}}');
        return true;
    }

}
