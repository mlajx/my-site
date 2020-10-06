<?php

namespace App\Sharp\Project;

use App\Models\Project;
use Code16\Sharp\EntityList\Commands\ReorderHandler;

class Reorder implements ReorderHandler
{
    public function reorder(array $ids)
    {
        Project::whereIn('id', $ids)->get()->each(function ($project) use ($ids) {
            $project->order = array_search($project->id, $ids) + 1;
            $project->save();
        });
    }
}
