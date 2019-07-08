<?php

namespace Quotes\Models;

use Illuminate\Database\Eloquent\Model;

class AuthorsModel extends Model
{
    protected $table = 'authors';

    public function authorSearch($author, $page) {
        return AuthorsModel::select('author')
            ->where('author', 'like', '%' . $author . '%')
            ->where('quotes_total', '>', 0)
            ->orderBy('quotes_total', 'DESC')
            ->limit(50)
            ->skip(50 * $page)
            ->get();
    }
}
