<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pricelist}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m200925_120405_create_pricelist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pricelist}}', [
            'id' => $this->primaryKey(),
            'service' => $this->string()->notNull(),
            'fee' => $this->integer()->notNull(),
            'is_deleted' => $this->boolean()->defaultValue(0),
            'created_by' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_by' => $this->integer(),
            'updated_at' => $this->dateTime(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-pricelist-created_by}}',
            '{{%pricelist}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-pricelist-created_by}}',
            '{{%pricelist}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-pricelist-updated_by}}',
            '{{%pricelist}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-pricelist-updated_by}}',
            '{{%pricelist}}',
            'updated_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-pricelist-created_by}}',
            '{{%pricelist}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-pricelist-created_by}}',
            '{{%pricelist}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-pricelist-updated_by}}',
            '{{%pricelist}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-pricelist-updated_by}}',
            '{{%pricelist}}'
        );

        $this->dropTable('{{%pricelist}}');
    }
}
