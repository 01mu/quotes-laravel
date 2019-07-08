<?php

namespace Quotes\Http\Controllers;

use Quotes\Models\RelationsModel;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
    public function relations($author, $page) {
        $rm = new RelationsModel;

        echo json_encode($rm->relations($author, $page));
    }
}
