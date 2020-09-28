<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%medical_record}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%patient}}`
 * - `{{%recipe}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m200925_105519_create_medical_record_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%medical_record}}', [
            'id' => $this->primaryKey(),
            'name' => $this->integer(),
            'complaint' => $this->text(),
            'action' => $this->text(),
            'diagnose' => $this->text(),
            'recipe' => $this->integer(),
            'is_deleted' => $this->boolean()->defaultValue(0),
            'created_by' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_by' => $this->integer(),
            'updated_at' => $this->dateTime(),
        ]);

        // creates index for column `name`
        $this->createIndex(
            '{{%idx-medical_record-name}}',
            '{{%medical_record}}',
            'name'
        );

        // add foreign key for table `{{%patient}}`
        $this->addForeignKey(
            '{{%fk-medical_record-name}}',
            '{{%medical_record}}',
            'name',
            '{{%patient}}',
            'id',
            'CASCADE'
        );

        // creates index for column `recipe`
        $this->createIndex(
            '{{%idx-medical_record-recipe}}',
            '{{%medical_record}}',
            'recipe'
        );

        // add foreign key for table `{{%recipe}}`
        $this->addForeignKey(
            '{{%fk-medical_record-recipe}}',
            '{{%medical_record}}',
            'recipe',
            '{{%recipe}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-medical_record-created_by}}',
            '{{%medical_record}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-medical_record-created_by}}',
            '{{%medical_record}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-medical_record-updated_by}}',
            '{{%medical_record}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-medical_record-updated_by}}',
            '{{%medical_record}}',
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
        // drops foreign key for table `{{%patient}}`
        $this->dropForeignKey(
            '{{%fk-medical_record-name}}',
            '{{%medical_record}}'
        );

        // drops index for column `name`
        $this->dropIndex(
            '{{%idx-medical_record-name}}',
            '{{%medical_record}}'
        );

        // drops foreign key for table `{{%recipe}}`
        $this->dropForeignKey(
            '{{%fk-medical_record-recipe}}',
            '{{%medical_record}}'
        );

        // drops index for column `recipe`
        $this->dropIndex(
            '{{%idx-medical_record-recipe}}',
            '{{%medical_record}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-medical_record-created_by}}',
            '{{%medical_record}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-medical_record-created_by}}',
            '{{%medical_record}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-medical_record-updated_by}}',
            '{{%medical_record}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-medical_record-updated_by}}',
            '{{%medical_record}}'
        );

        $this->dropTable('{{%medical_record}}');
    }
}
