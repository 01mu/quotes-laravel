<?php

namespace Quotes\Http\Controllers;

use Quotes\Models\QuotesModel;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function quotesAll() {
        $qm = new QuotesModel;

        echo json_encode($qm->quotesAll());
    }

    public function quotesSearch($query, $page) {
        $qm = new QuotesModel;

        echo json_encode($qm->quotesSearch($query, $page));
    }

    public function random() {
        $qm = new QuotesModel;

        echo json_encode($qm->random());
    }
}
