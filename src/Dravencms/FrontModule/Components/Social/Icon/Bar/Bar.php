<?php

namespace Dravencms\FrontModule\Components\Social\Icon;

use Dravencms\Components\BaseControl;
use Salamek\Cms\ICmsActionOption;

class Bar extends BaseControl
{
    /** @var ICmsActionOption */
    private $cmsActionOption = null;

    public function __construct(ICmsActionOption $cmsActionOption = null)
    {
        parent::__construct();
        $this->cmsActionOption = $cmsActionOption;
    }
    
    public function render()
    {
        $template = $this->template;
        $template->setFile(__DIR__ . '/bar.latte');
        $template->render();
    }
}
