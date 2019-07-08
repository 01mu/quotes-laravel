<?php

namespace Quotes\Http\Controllers;

use Quotes\Models\QuotesModel;
use Quotes\Models\AuthorsModel;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function authorSearch($author, $page) {
        $am = new AuthorsModel;

        echo json_encode($am->authorSearch($author, $page));
    }

    public function authorQuotes($author, $page) {
        $qm = new QuotesModel;

        echo json_encode($qm->authorQuotes($author, $page));
    }
}
