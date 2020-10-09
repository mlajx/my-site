<?php

namespace App\Http\Controllers;

use Code16\Sharp\Http\LangController as HttpLangController;

class LangController extends HttpLangController
{
    public function index()
    {
        app()->setlocale('pt-br');
        return parent::index();
    }
}
