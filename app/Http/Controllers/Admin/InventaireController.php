<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventaire;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InventaireController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('inventaire_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inventaires = Inventaire::with(['reference'])->get();

        return view('admin.inventaires.index', compact('inventaires'));
    }

    public function show(Inventaire $inventaire)
    {
        abort_if(Gate::denies('inventaire_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inventaire->load('reference');

        return view('admin.inventaires.show', compact('inventaire'));
    }
}
