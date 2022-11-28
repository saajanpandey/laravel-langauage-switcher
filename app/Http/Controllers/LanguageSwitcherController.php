<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LanguageSwitcherController extends Controller
{
    public function switch($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
