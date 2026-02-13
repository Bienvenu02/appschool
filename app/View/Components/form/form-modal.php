<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form_modal extends Component
{
    
    public function __construct()
    {
        
    }

   
    public function render(): View|Closure|string
    {
        return view('components.form.form-modal');
    }
}
