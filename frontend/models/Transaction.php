<?php

namespace frontend\models;

use Yii;
use common\models\User;
use frontend\models\Patient;
use frontend\models\Detail;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%transaction}}".
 *
 * @property int $id
 * @property string|null $payment
 * @property int $total
 * @property int|null $cashier
 * @property int|null $patient
 *
 * @property Detail[] $details
 * @property User $cashier0
 * @property Patient $patient0
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%transaction}}';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'updatedAtAttribute' => false,
                'value' => new Expression('NOW()'),
            ],
            [
                'class' => BlameableBehavior::className(),
                'updatedByAttribute' => false,
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient'], 'required'],
            [['created_at'], 'safe'],
            [['total', 'patient', 'created_by'], 'integer'],
            [['payment'], 'string', 'max' => 255],
            [['patient'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['patient' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_at' => Yii::t('app', 'Crated At'),
            'payment' => Yii::t('app', 'Payment'),
            'total' => Yii::t('app', 'Total'),
            'created_by' => Yii::t('app', 'Created By'),
            'patient' => Yii::t('app', 'Patient'),
        ];
    }

    /**
     * Gets query for [[Details]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetails()
    {
        return $this->hasMany(Detail::className(), ['transaction' => 'id']);
    }

    /**
     * Gets query for [[Cashier0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * Gets query for [[Patient0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatient0()
    {
        return $this->hasOne(Patient::className(), ['id' => 'patient']);
    }
    
    /**
     * Gets type of payment for Table Transaction.
     *
     * @return array\religion
     */
    public function getPaymentType()
    {
        return [
            0 => 'Cash',
        ];
    }
    
    /**
     * Gets data patient for Table transaction.
     *
     * @return array\transaction
     */
    public function getDataPatients()
    {
        $patients = Patient::find()->where(['is_deleted' => 0])->all();
        $listData = ArrayHelper::map($patients,'id','name');

        return $listData;
    }
    
    /**
     * Gets data pricelist for Table transaction.
     *
     * @return array\transaction
     */
    public function getDataPriceLists()
    {
        $priceLists = PriceList::find()->where(['is_deleted' => 0])->all();
        $listData = ArrayHelper::map($priceLists,'id','name');

        return $listData;
    }
}
