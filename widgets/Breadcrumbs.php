<?php
use kouosl\platformer\Module;

namespace kouosl\theme\widgets;

class Breadcrumbs extends \yii\widgets\Breadcrumbs
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->homeLink = ['label'=>\kouosl\platformer\Module::t('platformer','Home'), 'url' => '/platformer'];
    }
}