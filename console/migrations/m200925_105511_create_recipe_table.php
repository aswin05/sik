<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%recipe}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m200925_105511_create_recipe_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%recipe}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
            'dose' => $this->text(),
            'is_deleted' => $this->boolean()->defaultValue(0),
            'created_by' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_by' => $this->integer(),
            'updated_at' => $this->dateTime(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-recipe-created_by}}',
            '{{%recipe}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-recipe-created_by}}',
            '{{%recipe}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-recipe-updated_by}}',
            '{{%recipe}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-recipe-updated_by}}',
            '{{%recipe}}',
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
            '{{%fk-recipe-created_by}}',
            '{{%recipe}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-recipe-created_by}}',
            '{{%recipe}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-recipe-updated_by}}',
            '{{%recipe}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-recipe-updated_by}}',
            '{{%recipe}}'
        );

        $this->dropTable('{{%recipe}}');
    }
}
