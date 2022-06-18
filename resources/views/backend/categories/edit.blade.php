@extends('layouts.admin.app')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8 mt-5">
      <div class="card">
        <div class="card-header">Modifier une catégorie</div>

        <div class="card-body">
          <form method="POST" action="{{ route('admin.category.update', $category->slug) }}">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">Nom de la catégorie</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                  name="name" value="{{ $category->name }}" required autocomplete="name" autofocus>

                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Enregistrer
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
