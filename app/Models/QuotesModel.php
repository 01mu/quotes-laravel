<?php

namespace Quotes\Models;

use Illuminate\Database\Eloquent\Model;

class QuotesModel extends Model
{
    protected $table = 'quotes';

    public function quotesAll() {
        return QuotesModel::select('id', 'quote', 'author')
            ->limit(50)
            ->inRandomOrder()
            ->get();
    }

    public function quotesSearch($query, $page) {
        return QuotesModel::select('id', 'quote', 'author')
            ->where('quote', 'like', '%' . $query . '%')
            ->limit(50)
            ->skip($page * 50)
            ->orderByRaw('CHAR_LENGTH(quote)')
            ->get();
    }

    public function authorQuotes($author, $page) {
        return QuotesModel::select('id', 'quote', 'author')
            ->where('author', '=', $author)
            ->limit(50)
            ->skip($page * 50)
            ->orderByRaw('CHAR_LENGTH(quote)')
            ->get();
    }

    public function random() {
        return QuotesModel::select('id', 'author', 'quote')
            ->limit(1)
            ->inRandomOrder()
            ->get()[0];
    }
}
