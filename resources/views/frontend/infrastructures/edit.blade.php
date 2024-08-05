@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.infrastructure.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.infrastructures.update", [$infrastructure->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.infrastructure.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $infrastructure->name) }}" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.infrastructure.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="description">{{ trans('cruds.infrastructure.fields.description') }}</label>
                            <input class="form-control" type="text" name="description" id="description" value="{{ old('description', $infrastructure->description) }}" required>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.infrastructure.fields.description_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="status">{{ trans('cruds.infrastructure.fields.status') }}</label>
                            <input class="form-control" type="text" name="status" id="status" value="{{ old('status', $infrastructure->status) }}" required>
                            @if($errors->has('status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.infrastructure.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="location">{{ trans('cruds.infrastructure.fields.location') }}</label>
                            <input class="form-control" type="text" name="location" id="location" value="{{ old('location', $infrastructure->location) }}">
                            @if($errors->has('location'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('location') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.infrastructure.fields.location_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="construction_date">{{ trans('cruds.infrastructure.fields.construction_date') }}</label>
                            <input class="form-control date" type="text" name="construction_date" id="construction_date" value="{{ old('construction_date', $infrastructure->construction_date) }}" required>
                            @if($errors->has('construction_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('construction_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.infrastructure.fields.construction_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="depreciation_plan">{{ trans('cruds.infrastructure.fields.depreciation_plan') }}</label>
                            <input class="form-control" type="text" name="depreciation_plan" id="depreciation_plan" value="{{ old('depreciation_plan', $infrastructure->depreciation_plan) }}">
                            @if($errors->has('depreciation_plan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('depreciation_plan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.infrastructure.fields.depreciation_plan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="type">{{ trans('cruds.infrastructure.fields.type') }}</label>
                            <input class="form-control" type="text" name="type" id="type" value="{{ old('type', $infrastructure->type) }}">
                            @if($errors->has('type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.infrastructure.fields.type_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection