@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.inventaire.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.inventaires.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="reference_id">{{ trans('cruds.inventaire.fields.reference') }}</label>
                <select class="form-control select2 {{ $errors->has('reference') ? 'is-invalid' : '' }}" name="reference_id" id="reference_id">
                    @foreach($references as $id => $entry)
                        <option value="{{ $id }}" {{ old('reference_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('reference'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reference') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inventaire.fields.reference_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="in">{{ trans('cruds.inventaire.fields.in') }}</label>
                <input class="form-control {{ $errors->has('in') ? 'is-invalid' : '' }}" type="text" name="in" id="in" value="{{ old('in', '') }}">
                @if($errors->has('in'))
                    <div class="invalid-feedback">
                        {{ $errors->first('in') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inventaire.fields.in_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="out">{{ trans('cruds.inventaire.fields.out') }}</label>
                <input class="form-control {{ $errors->has('out') ? 'is-invalid' : '' }}" type="text" name="out" id="out" value="{{ old('out', '') }}">
                @if($errors->has('out'))
                    <div class="invalid-feedback">
                        {{ $errors->first('out') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inventaire.fields.out_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="balance">{{ trans('cruds.inventaire.fields.balance') }}</label>
                <input class="form-control {{ $errors->has('balance') ? 'is-invalid' : '' }}" type="text" name="balance" id="balance" value="{{ old('balance', '') }}">
                @if($errors->has('balance'))
                    <div class="invalid-feedback">
                        {{ $errors->first('balance') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inventaire.fields.balance_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection