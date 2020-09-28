<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%patient}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m200925_100739_create_patient_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%patient}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string(),
            'birth_place' => $this->string()->notNull(),
            'birth_date' => $this->date()->notNull(),
            'address' => $this->string()->notNull(),
            'status' => $this->string()->notNull(),
            'religion' => $this->string()->notNull(),
            'is_deleted' => $this->boolean()->defaultValue(0),
            'created_by' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_by' => $this->integer(),
            'updated_at' => $this->dateTime(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-patient-created_by}}',
            '{{%patient}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-patient-created_by}}',
            '{{%patient}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-patient-updated_by}}',
            '{{%patient}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-patient-updated_by}}',
            '{{%patient}}',
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
            '{{%fk-patient-created_by}}',
            '{{%patient}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-patient-created_by}}',
            '{{%patient}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-patient-updated_by}}',
            '{{%patient}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-patient-updated_by}}',
            '{{%patient}}'
        );

        $this->dropTable('{{%patient}}');
    }
}
