<?php

namespace App\Sharp\Experience;

use App\Models\Experience;
use Code16\Sharp\EntityList\Commands\ReorderHandler;

class Reorder implements ReorderHandler
{
    public function reorder(array $ids): void
    {
        Experience::whereIn('id', $ids)->get()->each(function ($experience) use ($ids) {
            $experience->order = array_search($experience->id, $ids) + 1;
            $experience->save();
        });
    }
}
