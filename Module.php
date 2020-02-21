<?php

namespace klunker\vacancy;

use Yii;

/**
 * vacancy module definition class
 */
class Module extends \yii\base\Module implements \yii\base\BootstrapInterface {

    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'klunker\vacancy\controllers';
    public $tableName = '{{%vacancy}}';

    public function bootstrap($app) {
        $app->getUrlManager()->addRules([
            $this->id => $this->id.'/vacancy/index',
        ],false);
    }
    /**
     * {@inheritdoc}
     */
    public function init() {
        parent::init();

        Yii::configure($this, require __DIR__ . '/config/main.php');
       
        if (Yii::$app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'klunker\vacancy\commands';
        }
        $this->registerTranslations();
        //echo \yii\helpers\VarDumper::dump($this);
    }
    
    public function registerTranslations()
    {
        Yii::$app->i18n->translations['vacancy'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@vendor/klunker/yii2-vacancy/messages',
        ];
 
    }
    /**
     * Translates a message to the specified language.
     *
     * @param string $message the message to be translated.
     * @param array $params the parameters that will be used to replace the corresponding placeholders in the message.
     * @param string $language the language code (e.g. `en-US`, `en`). If this is null, the current application language
     * will be used.
     * @return string
     */
    public static function t($message, $params = [], $language = null) {

        return Yii::t('vacancy', $message, $params, $language);
    }

}
