<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%patient}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%medical_record}}`
 */
class m200925_105527_add_mr_column_to_patient_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%patient}}', 'mr', $this->integer());

        // creates index for column `mr`
        $this->createIndex(
            '{{%idx-patient-mr}}',
            '{{%patient}}',
            'mr'
        );

        // add foreign key for table `{{%medical_record}}`
        $this->addForeignKey(
            '{{%fk-patient-mr}}',
            '{{%patient}}',
            'mr',
            '{{%medical_record}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%medical_record}}`
        $this->dropForeignKey(
            '{{%fk-patient-mr}}',
            '{{%patient}}'
        );

        // drops index for column `mr`
        $this->dropIndex(
            '{{%idx-patient-mr}}',
            '{{%patient}}'
        );

        $this->dropColumn('{{%patient}}', 'mr');
    }
}
