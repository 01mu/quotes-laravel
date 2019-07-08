<?php

namespace Quotes\Models;

use Illuminate\Database\Eloquent\Model;

class RelationsModel extends Model
{
    protected $table = 'relations';

    public function relations($author, $page) {
        return RelationsModel::select('relation')
            ->where('author', '=', $author)
            ->orderBy('relation', 'ASC')
            ->limit(50)
            ->skip(50 * $page)
            ->get();
    }
}
