@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.assignment.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.assignments.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="type_attribution">{{ trans('cruds.assignment.fields.type_attribution') }}</label>
                            <input class="form-control" type="text" name="type_attribution" id="type_attribution" value="{{ old('type_attribution', '') }}">
                            @if($errors->has('type_attribution'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('type_attribution') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assignment.fields.type_attribution_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="asset">{{ trans('cruds.assignment.fields.asset') }}</label>
                            <input class="form-control" type="text" name="asset" id="asset" value="{{ old('asset', '') }}">
                            @if($errors->has('asset'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('asset') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assignment.fields.asset_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="quantity">{{ trans('cruds.assignment.fields.quantity') }}</label>
                            <input class="form-control" type="text" name="quantity" id="quantity" value="{{ old('quantity', '') }}">
                            @if($errors->has('quantity'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('quantity') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assignment.fields.quantity_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="user">{{ trans('cruds.assignment.fields.user') }}</label>
                            <input class="form-control" type="text" name="user" id="user" value="{{ old('user', '') }}">
                            @if($errors->has('user'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assignment.fields.user_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="attribution_id">{{ trans('cruds.assignment.fields.attribution') }}</label>
                            <select class="form-control select2" name="attribution_id" id="attribution_id">
                                @foreach($attributions as $id => $entry)
                                    <option value="{{ $id }}" {{ old('attribution_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('attribution'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('attribution') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.assignment.fields.attribution_helper') }}</span>
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