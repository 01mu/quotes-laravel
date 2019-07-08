<?php

namespace Quotes\Models;

use Illuminate\Database\Eloquent\Model;

class QuotesModel extends Model
{
    protected $table = 'quotes';

    public function quotesAll() {
        return QuotesModel::select('quote', 'author')
            ->limit(50)
            ->inRandomOrder()
            ->get();
    }

    public function quotesSearch($query, $page) {
        return QuotesModel::select('quote', 'author')
            ->where('quote', 'like', '%' . $query . '%')
            ->orderBy('quote_word_count', 'ASC')
            ->limit(50)
            ->skip($page * 50)
            ->get();
    }

    public function authorQuotes($author, $page) {
        return QuotesModel::select('quote')
            ->where('author', '=', $author)
            ->orderBy('quote_word_count', 'ASC')
            ->limit(50)
            ->skip($page * 50)
            ->get();
    }

    public function random() {
        return QuotesModel::select('author', 'quote')
            ->limit(1)
            ->inRandomOrder()
            ->get()[0];
    }
}
