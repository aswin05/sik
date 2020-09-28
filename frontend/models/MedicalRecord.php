<?php

namespace frontend\models;

use Yii;
use common\models\User;
use frontend\models\Patient;
// use frontend\models\Recipe;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%medical_record}}".
 *
 * @property int $id
 * @property int|null $name
 * @property string|null $complaint
 * @property string|null $action
 * @property string|null $diagnose
 * @property int|null $recipe
 * @property int|null $is_deleted
 * @property int|null $created_by
 * @property string|null $created_at
 * @property int|null $updated_by
 * @property string|null $updated_at
 *
 * @property User $createdBy
 * @property Patient $name0
 * @property Recipe $recipe0
 * @property User $updatedBy
 * @property Patient[] $patients
 */
class MedicalRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%medical_record}}';
    }
    
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'value' => new Expression('NOW()'),
            ],
            BlameableBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'is_deleted', 'created_by', 'updated_by'], 'integer'],
            [['complaint', 'action', 'diagnose', 'recipe'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['name'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['name' => 'id']],
            // [['recipe'], 'exist', 'skipOnError' => true, 'targetClass' => Recipe::className(), 'targetAttribute' => ['recipe' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'complaint' => Yii::t('app', 'Complaint'),
            'action' => Yii::t('app', 'Action'),
            'diagnose' => Yii::t('app', 'Diagnose'),
            'recipe' => Yii::t('app', 'Recipe'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * Gets query for [[Name0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getName0()
    {
        return $this->hasOne(Patient::className(), ['id' => 'name']);
    }

    /**
     * Gets query for [[Recipe0]].
     *
     * @return \yii\db\ActiveQuery
     */
    // public function getRecipe0()
    // {
    //     return $this->hasOne(Recipe::className(), ['id' => 'recipe']);
    // }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }

    /**
     * Gets query for [[Patients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['mr' => 'id']);
    }

    
    /**
     * Gets religion for Table Patient.
     *
     * @return array\religion
     */
    public function getDataPatients()
    {
        $patients = Patient::find()->where(['is_deleted' => 0])->all();
        $listData = ArrayHelper::map($patients,'id','name');

        return $listData;
    }
}
