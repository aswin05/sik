<?php

namespace frontend\models;

use Yii;
use common\models\User;
use frontend\models\MedicalRecord;
use frontend\models\Transaction;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;


/**
 * This is the model class for table "{{%patient}}".
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string $birth_place
 * @property string $birth_date
 * @property string $address
 * @property string $status
 * @property string $religion
 * @property int|null $is_deleted
 * @property int|null $created_by
 * @property string|null $created_at
 * @property int|null $updated_by
 * @property string|null $updated_at
 * @property int|null $mr
 *
 * @property MedicalRecord[] $medicalRecords
 * @property User $createdBy
 * @property MedicalRecord $mr0
 * @property User $updatedBy
 * @property Transaction[] $transactions
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%patient}}';
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
            [['name', 'birth_place', 'birth_date', 'address', 'status', 'religion'], 'required'],
            [['birth_date', 'created_at', 'updated_at'], 'safe'],
            [['is_deleted', 'created_by', 'updated_by', 'mr'], 'integer'],
            [['name', 'email', 'birth_place', 'address', 'status', 'religion'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['mr'], 'exist', 'skipOnError' => true, 'targetClass' => MedicalRecord::className(), 'targetAttribute' => ['mr' => 'id']],
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
            'email' => Yii::t('app', 'Email'),
            'birth_place' => Yii::t('app', 'Birth Place'),
            'birth_date' => Yii::t('app', 'Birth Date'),
            'address' => Yii::t('app', 'Address'),
            'status' => Yii::t('app', 'Status'),
            'religion' => Yii::t('app', 'Religion'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'mr' => Yii::t('app', 'Mr'),
        ];
    }

    /**
     * Gets query for [[MedicalRecords]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecord::className(), ['name' => 'id']);
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
     * Gets query for [[Mr0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMr0()
    {
        return $this->hasOne(MedicalRecord::className(), ['id' => 'mr']);
    }

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
     * Gets query for [[Transactions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions()
    {
        return $this->hasMany(Transaction::className(), ['patient' => 'id']);
    }

    /**
     * Gets religion for Table Patient.
     *
     * @return array\religion
     */
    public function getReligion()
    {
        return [
            0 => 'Islam',
            1 => 'Kristen',
            2 => 'Katolik',
            3 => 'Hindu',
            4 => 'Budha',
            5 => 'Kong Hu Chu'
        ];
    }
    
    /**
     * Gets religion for Table Patient.
     *
     * @return array\religion
     */
    public function getStatus()
    {
        return [
            0 => 'Kawin',
            1 => 'Belum Kawin',
        ];
    }
    
}
