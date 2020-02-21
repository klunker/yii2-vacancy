<?php

namespace klunker\vacancy\models;

use Yii;

/**
 * This is the model class for table "vacancy".
 *
 * @property int $id
 * @property string $title Заголовок страницы отображаемый в title
 * @property string $description Описание страницы для отображения в meta="description"
 * @property string|null $keywords
 * @property string $h1 Наименование вакансии
 * @property string $content Описание вакансии
 * @property string|null $skills Перечень навыков(разделитель ",")
 * @property float|null $salary_from Сумма ЗП от
 * @property float|null $salary_to Сумма ЗП до
 * @property string|null $date_create Время создания вакансии
 * @property string|null $publish_at Время публикации или 0 если не опубликовано
 */
class Vacancy extends \klunker\vacancy\Model
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'h1', 'content'], 'required'],
            [['content'], 'string'],
            [['salary_from', 'salary_to'], 'number'],
            [['date_create', 'publish_at'], 'safe'],
            [['title'], 'string', 'max' => 128],
            [['description', 'keywords', 'h1', 'skills'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Заголовок страницы отображаемый в title'),
            'description' => Yii::t('app', 'Описание страницы для отображения в meta=\"description\"'),
            'keywords' => Yii::t('app', 'Keywords'),
            'h1' => Yii::t('app', 'Наименование вакансии'),
            'content' => Yii::t('app', 'Описание вакансии'),
            'skills' => Yii::t('app', 'Перечень навыков(разделитель \",\")'),
            'salary_from' => Yii::t('app', 'Сумма ЗП от'),
            'salary_to' => Yii::t('app', 'Сумма ЗП до'),
            'date_create' => Yii::t('app', 'Время создания вакансии'),
            'publish_at' => Yii::t('app', 'Время публикации или 0 если не опубликовано'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return VacancyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VacancyQuery(get_called_class());
    }
}
