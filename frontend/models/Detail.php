<?php

namespace frontend\models;

use Yii;
use frontend\models\Pricelist;
use frontend\models\Transaction;
// use common\models\User;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%detail}}".
 *
 * @property int $id
 * @property int|null $transaction
 * @property int|null $service
 *
 * @property Pricelist $service0
 * @property Transaction $transaction0
 */
class Detail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%detail}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transaction', 'service', 'amount', 'total', 'price'], 'integer'],
            [['service'], 'exist', 'skipOnError' => true, 'targetClass' => Pricelist::className(), 'targetAttribute' => ['service' => 'id']],
            [['transaction'], 'exist', 'skipOnError' => true, 'targetClass' => Transaction::className(), 'targetAttribute' => ['transaction' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'transaction' => Yii::t('app', 'Transaction'),
            'service' => Yii::t('app', 'Service'),
            'price' => Yii::t('app', 'Price'),
            'amount' => Yii::t('app', 'Amount'),
            'total' => Yii::t('app', 'Total'),
        ];
    }

    /**
     * Gets query for [[Service0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getService0()
    {
        return $this->hasOne(Pricelist::className(), ['id' => 'service']);
    }

    /**
     * Gets query for [[Transaction0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaction0()
    {
        return $this->hasOne(Transaction::className(), ['id' => 'transaction']);
    }
    
    /**
     * Gets service for Table Detail.
     *
     * @return array\religion
     */
    public function getDataPriceLists()
    {
        $pricelists = PriceList::find()->where(['is_deleted' => 0])->all();
        $listData = ArrayHelper::map($pricelists,'id','fee','service');
        // $listData[] = ArrayHelper::map($pricelists,'id','fee');

        return $listData;
    }
    
    /**
     * Gets service for Table Detail.
     *
     * @return array\religion
     */
    public function setPriceData($id)
    {
        $priceData = PriceList::find($id)->all();
        $priceResult = ArrayHelper::map($priceData,'id','price');

        return $priceResult;
    }
}
