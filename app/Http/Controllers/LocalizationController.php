<?php

namespace App\Http\Controllers;

use App\Models\Localization;
use App\Http\Requests\StoreLocalizationRequest;
use App\Http\Requests\UpdateLocalizationRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{

    public function setLang($locale)
    {
        App::setLocale($locale);
        Session::put("locale", $locale);
        return redirect()->back();
    }



    public function create()
    {
        //
    }


    public function store(StoreLocalizationRequest $request)
    {
        //
    }


    public function show(Localization $localization)
    {
        //
    }


    public function edit(Localization $localization)
    {
        //
    }


    public function update(UpdateLocalizationRequest $request, Localization $localization)
    {
        //
    }


    public function destroy(Localization $localization)
    {
        //
    }
}
