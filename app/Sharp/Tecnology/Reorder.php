<?php

namespace App\Sharp\Tecnology;

use App\models\Tecnology;
use Code16\Sharp\EntityList\Commands\ReorderHandler;

class Reorder implements ReorderHandler
{
    public function reorder(array $ids)
    {
        Tecnology::whereIn('id', $ids)->get()->each(function ($tecnology) use ($ids) {
            $tecnology->order = array_search($tecnology->id, $ids) + 1;
            $tecnology->save();
        });
    }
}
