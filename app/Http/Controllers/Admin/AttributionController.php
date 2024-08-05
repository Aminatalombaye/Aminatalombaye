<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribution;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AttributionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('attribution_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attributions = Attribution::all();

        return view('admin.attributions.index', compact('attributions'));
    }

    public function show(Attribution $attribution)
    {
        abort_if(Gate::denies('attribution_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.attributions.show', compact('attribution'));
    }
}
