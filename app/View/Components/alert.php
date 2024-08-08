<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class alert extends Component
{
    public $type;
    protected $types = [
        'success',
        'info',
        'danger'
    ];
    public function __construct(string $type='info')
    {
        $this->type = $type;
    }
   public function validType(){
    return in_array($this->type,$this->types)?$this->type:'danger';
   }
    public function link($text, $target= '#')  {
        return new HtmlString('<a href="'.$target.'" class="alert-link">'.$text.'</a>.');
    }
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
