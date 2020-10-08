<?php

namespace App\Models;

use App\Traits\Ordered;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Social extends Model
{
    use HasFactory, Ordered;

    public function icon()
    {
        return $this->morphOne(Media::class, "model")->where("model_key", "icon");
    }

    public function getBladeIconAttribute()
    {
        if ($this->icon) {
            $contents = Storage::get($this->icon->file_name);
            return $contents;
        }
    }

    public function getDefaultAttributesFor($attribute)
    {
        return in_array($attribute, ["icon"])
            ? ["model_key" => $attribute]
            : [];
    }
}
