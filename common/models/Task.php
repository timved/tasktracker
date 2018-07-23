<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property string $name
 * @property string $date
 * @property string $description
 * @property int $user_id
 * @property int $project_id
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property User $user
 * @property Project $project
 */
class Task extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'date', 'status'], 'required'],
            [['date', 'created_at', 'updated_at'], 'safe'],
            [['description'], 'string'],
            [['user_id'], 'integer'],
            [['name', 'status'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'date' => 'Дата выполнения',
            'description' => 'Описание',
            'user_id' => 'Пользователь',
            'status' => 'Статус',
            'project_id' => 'Проект',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата изменения',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    public static function getByCurrentMonth($userId, $month)

    {
        return static::find()
            ->where(['month(date)' => $month])
            ->andWhere(['year(date)' => date('Y')])
            ->andWhere(['user_id' => $userId])->all();
    }

    /* public function fields()
     {
         parent::fields(); // TODO: Change the autogenerated stub
         return [
             'id',
             'name',
             'date',
             'description',
             'status',
             'created_at',
 //            'user' => function (){
 //            return $this->user;
 //            }
         ];
     }*/

    public function extraFields()
    {
        parent::extraFields(); // TODO: Change the autogenerated stub
        return ['user'];
    }

}
