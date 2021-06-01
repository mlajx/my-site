<?php

namespace App\Sharp\Social;

use App\Models\Social;
use Code16\Sharp\EntityList\Commands\ReorderHandler;

class Reorder implements ReorderHandler
{
    public function reorder(array $ids): void
    {
        Social::whereIn('id', $ids)->get()->each(function ($social) use ($ids) {
            $social->order = array_search($social->id, $ids) + 1;
            $social->save();
        });
    }
}
