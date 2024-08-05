<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyInfrastructureRequest;
use App\Http\Requests\StoreInfrastructureRequest;
use App\Http\Requests\UpdateInfrastructureRequest;
use App\Models\Infrastructure;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InfrastructureController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('infrastructure_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $infrastructures = Infrastructure::all();

        return view('frontend.infrastructures.index', compact('infrastructures'));
    }

    public function create()
    {
        abort_if(Gate::denies('infrastructure_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.infrastructures.create');
    }

    public function store(StoreInfrastructureRequest $request)
    {
        $infrastructure = Infrastructure::create($request->all());

        return redirect()->route('frontend.infrastructures.index');
    }

    public function edit(Infrastructure $infrastructure)
    {
        abort_if(Gate::denies('infrastructure_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.infrastructures.edit', compact('infrastructure'));
    }

    public function update(UpdateInfrastructureRequest $request, Infrastructure $infrastructure)
    {
        $infrastructure->update($request->all());

        return redirect()->route('frontend.infrastructures.index');
    }

    public function show(Infrastructure $infrastructure)
    {
        abort_if(Gate::denies('infrastructure_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.infrastructures.show', compact('infrastructure'));
    }

    public function destroy(Infrastructure $infrastructure)
    {
        abort_if(Gate::denies('infrastructure_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $infrastructure->delete();

        return back();
    }

    public function massDestroy(MassDestroyInfrastructureRequest $request)
    {
        $infrastructures = Infrastructure::find(request('ids'));

        foreach ($infrastructures as $infrastructure) {
            $infrastructure->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
