<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;


/**
 * @method static LengthAwarePaginator paginate(int $i=15)
 */

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'id'];

    public function getSnippetAttribute(){
        $paragraphs = explode("\n\n", $this->body);
        return $paragraphs[0];
    }

    public function getDisplayBodyAttribute(){
        return nl2br($this->body);
    }
}
