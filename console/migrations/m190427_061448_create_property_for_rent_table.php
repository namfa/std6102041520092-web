<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_for_rent}}`.
 */
class m190427_061448_create_property_for_rent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_for_rent}}', [
            'id' => $this->primaryKey(),
            'owner_no' => $this->string(5)->notNull()->unique(),
            'first_name' => $this->string(300)->notNull(),
            'last_name' => $this->string(300)->notNull(),
            'address' => $this->string(),
            'telephone' => $this->integer(),
            'user_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_for_rent}}');
    }
}
