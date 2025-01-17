@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.assignment.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.assignments.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.assignment.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $assignment->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.assignment.fields.type_attribution') }}
                                    </th>
                                    <td>
                                        {{ $assignment->type_attribution }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.assignment.fields.asset') }}
                                    </th>
                                    <td>
                                        {{ $assignment->asset }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.assignment.fields.quantity') }}
                                    </th>
                                    <td>
                                        {{ $assignment->quantity }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.assignment.fields.user') }}
                                    </th>
                                    <td>
                                        {{ $assignment->user }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.assignment.fields.attribution') }}
                                    </th>
                                    <td>
                                        {{ $assignment->attribution->type_attribution ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.assignments.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection