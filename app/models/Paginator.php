<?php

namespace App\Models;

use Illuminate\Pagination\LengthAwarePaginator;

class Paginator extends LengthAwarePaginator
{

    public function url($page)
    {
        if ($page <= 0) {
            $page = 1;
        }
        return $this->pageName . $page . $this->buildFragment();
    }
}
