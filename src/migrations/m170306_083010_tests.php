<?php

use yii\db\Migration;

class m170306_083010_tests extends Migration
{

    public function safeUp()
    {
		$tableOptions = null;
		//Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

		//Создание таблицы IP пользователей
		$this->createTable('{{%tests}}', [
			'id' => $this->primaryKey(),
			'ip' => $this->string(15)->notNull(),
			'comment' => $this->string(255),
		], $tableOptions);

    }

    public function safeDown()
    {
			$this->dropTable('{{%tests}}');
    }
}
