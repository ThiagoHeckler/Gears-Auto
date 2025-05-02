<?php

use yii\db\Migration;

class m250501_162323_pecas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pecas}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(255)->notNull(),
            'descricao' => $this->text(),
            'preco' => $this->decimal(10, 2)->notNull(),
            'quantidade_estoque' => $this->integer()->notNull()->defaultValue(0),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pecas}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250501_162323_pecas cannot be reverted.\n";

        return false;
    }
    */
}
