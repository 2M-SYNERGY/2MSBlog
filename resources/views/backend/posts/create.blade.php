@extends('layouts.admin.app')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-10 mt-5">
      <div class="card">
        <div class="card-header">Ajouter un post</div>

        <div class="card-body">
          <form method="POST" action="{{ route('admin.post.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
              <label for="title" class="col-md-4 col-form-label text-md-right">Titre du post</label>

              <div class="col-md-8">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                  name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                @error('title')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">Image du post</label>

                <div class="col-md-8">
                  <input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
                    name="image"  required  autofocus>

                  @error('image')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="category_id" class="col-md-4 col-form-label text-md-right">Titre du post</label>

                <div class="col-md-8">
                  <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    <option disabled selected>Sélectionner une catégorie</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>

                  @error('category_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">Description du post</label>

                <div class="col-md-8">
                  <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror" id="description"></textarea>
                  @error('description')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="content" class="col-md-4 col-form-label text-md-right">Description du post</label>

                <div class="col-md-8">
                  <textarea name="content" rows="10" class="form-control @error('content') is-invalid @enderror" id="content"></textarea>
                  @error('description')
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
@section('script')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function () {
          // Summernote
          $('#content').summernote({
            height: 400
          })

        })
      </script>
@endsection
