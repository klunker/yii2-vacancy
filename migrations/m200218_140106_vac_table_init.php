<?php

use yii\db\Migration;

/**
 * Class m200218_140106_vac_table_init
 */
class m200218_140106_vac_table_init extends Migration {

    /**
     *
     * @var string Table name 
     */
    private $_tableName;

    public function init() {
        parent::init();
        $this->_tableName = Yii::$app->getModule('vacancy')->tableName;
    }

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable($this->_tableName, [
            'id' => $this->primaryKey(),
            'title' => $this->string(128)->notNull()->comment('Заголовок страницы отображаемый в title'),
            'description' => $this->string(255)->notNull()->comment('Описание страницы для отображения в meta="description"'),
            'keywords' => $this->string(255),
            'h1' => $this->string(255)->notNull()->comment('Наименование вакансии'),
            'content' => $this->text()->notNull()->comment('Описание вакансии'),
            'skills' => $this->string(255)->comment('Перечень навыков(разделитель ",")'),
            'salary_from' => $this->double()->comment('Сумма ЗП от'),
            'salary_to' => $this->double()->comment('Сумма ЗП до'),
            'date_create' => $this->dateTime()->defaultExpression('NOW()')->comment('Время создания вакансии'),
            'publish_at' => $this->dateTime()->defaultValue('0')->comment('Время публикации или 0 если не опубликовано'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        echo "m200218_140106_vac_table_init cannot be reverted.\n";
        $this->dropTable($this->_tableName);
        return false;
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m200218_140106_vac_table_init cannot be reverted.\n";

      return false;
      }
     */
}
