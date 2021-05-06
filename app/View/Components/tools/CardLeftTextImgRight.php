<?php

namespace App\View\Components\tools;

use Illuminate\View\Component;

class CardLeftTextImgRight extends Component
{
    public $title;
    public $text;



    public function __construct($title=null,$text=null)
    {
        $this->title=$title;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tools.card-left-text-img-right');
    }
}
