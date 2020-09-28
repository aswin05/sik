<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%detail}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%transaction}}`
 * - `{{%pricelist}}`
 */
class m200925_120419_create_detail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%detail}}', [
            'id' => $this->primaryKey(),
            'transaction' => $this->integer(),
            'service' => $this->integer(),
        ]);

        // creates index for column `transaction`
        $this->createIndex(
            '{{%idx-detail-transaction}}',
            '{{%detail}}',
            'transaction'
        );

        // add foreign key for table `{{%transaction}}`
        $this->addForeignKey(
            '{{%fk-detail-transaction}}',
            '{{%detail}}',
            'transaction',
            '{{%transaction}}',
            'id',
            'CASCADE'
        );

        // creates index for column `service`
        $this->createIndex(
            '{{%idx-detail-service}}',
            '{{%detail}}',
            'service'
        );

        // add foreign key for table `{{%pricelist}}`
        $this->addForeignKey(
            '{{%fk-detail-service}}',
            '{{%detail}}',
            'service',
            '{{%pricelist}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%transaction}}`
        $this->dropForeignKey(
            '{{%fk-detail-transaction}}',
            '{{%detail}}'
        );

        // drops index for column `transaction`
        $this->dropIndex(
            '{{%idx-detail-transaction}}',
            '{{%detail}}'
        );

        // drops foreign key for table `{{%pricelist}}`
        $this->dropForeignKey(
            '{{%fk-detail-service}}',
            '{{%detail}}'
        );

        // drops index for column `service`
        $this->dropIndex(
            '{{%idx-detail-service}}',
            '{{%detail}}'
        );

        $this->dropTable('{{%detail}}');
    }
}
