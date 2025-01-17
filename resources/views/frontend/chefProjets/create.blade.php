@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.chefProjet.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.chef-projets.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="nom">{{ trans('cruds.chefProjet.fields.nom') }}</label>
                            <input class="form-control" type="text" name="nom" id="nom" value="{{ old('nom', '') }}">
                            @if($errors->has('nom'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nom') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.chefProjet.fields.nom_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="prenom">{{ trans('cruds.chefProjet.fields.prenom') }}</label>
                            <input class="form-control" type="text" name="prenom" id="prenom" value="{{ old('prenom', '') }}">
                            @if($errors->has('prenom'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('prenom') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.chefProjet.fields.prenom_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="adresse">{{ trans('cruds.chefProjet.fields.adresse') }}</label>
                            <input class="form-control" type="text" name="adresse" id="adresse" value="{{ old('adresse', '') }}">
                            @if($errors->has('adresse'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('adresse') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.chefProjet.fields.adresse_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="e_mail">{{ trans('cruds.chefProjet.fields.e_mail') }}</label>
                            <input class="form-control" type="text" name="e_mail" id="e_mail" value="{{ old('e_mail', '') }}">
                            @if($errors->has('e_mail'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('e_mail') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.chefProjet.fields.e_mail_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="telephone">{{ trans('cruds.chefProjet.fields.telephone') }}</label>
                            <input class="form-control" type="text" name="telephone" id="telephone" value="{{ old('telephone', '') }}">
                            @if($errors->has('telephone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('telephone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.chefProjet.fields.telephone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="projets">{{ trans('cruds.chefProjet.fields.projet') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="projets[]" id="projets" multiple>
                                @foreach($projets as $id => $projet)
                                    <option value="{{ $id }}" {{ in_array($id, old('projets', [])) ? 'selected' : '' }}>{{ $projet }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('projets'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('projets') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.chefProjet.fields.projet_helper') }}</span>
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