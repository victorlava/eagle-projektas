@extends('layouts.auth')

@section('content')

<div class="container">

    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <form action="{{ route('projects.store')}}" method="post">
              @csrf

              <div class="form-group">
                 <label for="title">Title</label>
                 <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" value="{{ old('title') }}">

                 @if($errors->has('title'))
                 <div class="invalid-feedback">
                   {{ $errors->first('title') }}
                 </div>
                 @endif
              </div>
              <div class="form-group row">
                 <div class="col-md-4">
                   <label for="title">Year</label>
                   <input type="text" name="year" placeholder="Year" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" id="year" value="{{ old('year') }}">

                    @if($errors->has('year'))
                    <div class="invalid-feedback">
                      {{ $errors->first('year') }}
                    </div>
                    @endif
                 </div>
                 <div class="col-md-4">
                    <label for="title">Client</label>
                   <input type="text" name="client" placeholder="Client" class="form-control{{ $errors->has('client') ? ' is-invalid' : '' }}" id="client" value="{{ old('client') }}">

                   @if($errors->has('client'))
                   <div class="invalid-feedback">
                     {{ $errors->first('client') }}
                   </div>
                   @endif
                 </div>
                 <div class="col-md-4">
                    <label for="title">Kategorija</label>
                   <input type="text" name="kategorija" placeholder="Kategorija" class="form-control{{ $errors->has('kategorija') ? ' is-invalid' : '' }}" id="kategorija" value="{{ old('kategorija') }}">

                   @if($errors->has('kategorija'))
                   <div class="invalid-feedback">
                     {{ $errors->first('kategorija') }}
                   </div>
                   @endif
                 </div>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                 <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description" rows="10">{{ old('description') }}</textarea>

                 @if($errors->has('description'))
                 <div class="invalid-feedback">
                   {{ $errors->first('description') }}
                 </div>
                 @endif
              </div>
              <div class="form-group">
                 <label for="image">Image</label>
                 <input class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="image" value="{{ old('image_url') }}">

                 @if($errors->has('image'))
                 <div class="invalid-feedback">
                   {{ $errors->first('image') }}
                 </div>
                 @endif
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" name="button">Išsaugoti</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
