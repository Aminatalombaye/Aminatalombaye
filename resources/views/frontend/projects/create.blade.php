@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.project.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.projects.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.project.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.project.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="description">{{ trans('cruds.project.fields.description') }}</label>
                            <input class="form-control" type="text" name="description" id="description" value="{{ old('description', '') }}" required>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.project.fields.description_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="start_date">{{ trans('cruds.project.fields.start_date') }}</label>
                            <input class="form-control date" type="text" name="start_date" id="start_date" value="{{ old('start_date') }}" required>
                            @if($errors->has('start_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('start_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.project.fields.start_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="end_date">{{ trans('cruds.project.fields.end_date') }}</label>
                            <input class="form-control date" type="text" name="end_date" id="end_date" value="{{ old('end_date') }}" required>
                            @if($errors->has('end_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('end_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.project.fields.end_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="status">{{ trans('cruds.project.fields.status') }}</label>
                            <input class="form-control" type="text" name="status" id="status" value="{{ old('status', '') }}" required>
                            @if($errors->has('status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.project.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="infrastructures">{{ trans('cruds.project.fields.infrastructure') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="infrastructures[]" id="infrastructures" multiple>
                                @foreach($infrastructures as $id => $infrastructure)
                                    <option value="{{ $id }}" {{ in_array($id, old('infrastructures', [])) ? 'selected' : '' }}>{{ $infrastructure }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('infrastructures'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('infrastructures') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.project.fields.infrastructure_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.project.fields.chef_projet') }}</label>
                            <select class="form-control" name="chef_projet" id="chef_projet" required>
                                <option value disabled {{ old('chef_projet', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Project::CHEF_PROJET_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('chef_projet', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('chef_projet'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('chef_projet') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.project.fields.chef_projet_helper') }}</span>
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