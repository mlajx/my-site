<?php

namespace App\Models;

use Code16\Sharp\Form\Eloquent\Uploads\SharpUploadModel;
use Illuminate\Support\Facades\Storage;

class Media extends SharpUploadModel
{
    protected $table = "medias";
}
