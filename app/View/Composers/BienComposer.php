<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Bien;

class BienComposer
{
    public function compose(View $view)
    {
        $view->with('biens', Bien::all());
    }
}
