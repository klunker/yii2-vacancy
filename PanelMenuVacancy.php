<?php

namespace klunker\vacancy;
use Yii;
/**
 * This is just an example.
 */
class PanelMenuVacancy extends \yii\base\Widget
{
    public $module_id;
    
    public function init(){
        parent::init();
        $this->module_id = Module::getInstance()->getUniqueId();
    }
    
    public function run()
    {
        return '<div class="panel panel-primary">
            <div class="panel-heading">'.Yii::t('vacancy', 'Job').'</div>
            <div class="list-group">
                <a href="/'.$this->module_id.'/vacancy/create" class="list-group-item">'.Yii::t('vacancy','Add new job').'</a>
                <a href="/'.$this->module_id.'" class="list-group-item">'.Yii::t('vacancy','Job list').'</a>
            </div>
        </div>';
    }
}
