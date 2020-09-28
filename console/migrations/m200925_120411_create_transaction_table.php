<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%patient}}`
 */
class m200925_120411_create_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction}}', [
            'id' => $this->primaryKey(),
            'date' => $this->dateTime()->notNull(),
            'payment' => $this->string()->defaultValue("cash"),
            'total' => $this->integer()->notNull(),
            'cashier' => $this->integer(),
            'patient' => $this->integer(),
        ]);

        // creates index for column `cashier`
        $this->createIndex(
            '{{%idx-transaction-cashier}}',
            '{{%transaction}}',
            'cashier'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-transaction-cashier}}',
            '{{%transaction}}',
            'cashier',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `patient`
        $this->createIndex(
            '{{%idx-transaction-patient}}',
            '{{%transaction}}',
            'patient'
        );

        // add foreign key for table `{{%patient}}`
        $this->addForeignKey(
            '{{%fk-transaction-patient}}',
            '{{%transaction}}',
            'patient',
            '{{%patient}}',
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
            '{{%fk-transaction-cashier}}',
            '{{%transaction}}'
        );

        // drops index for column `cashier`
        $this->dropIndex(
            '{{%idx-transaction-cashier}}',
            '{{%transaction}}'
        );

        // drops foreign key for table `{{%patient}}`
        $this->dropForeignKey(
            '{{%fk-transaction-patient}}',
            '{{%transaction}}'
        );

        // drops index for column `patient`
        $this->dropIndex(
            '{{%idx-transaction-patient}}',
            '{{%transaction}}'
        );

        $this->dropTable('{{%transaction}}');
    }
}
