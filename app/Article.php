<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'title',
        'body',
        'id'
    ];

    public $appends = [
        'excerpt'
    ];

    public function getExcerptAttribute(){
        return explode("\n\n", $this->body)[0];
    }
}
