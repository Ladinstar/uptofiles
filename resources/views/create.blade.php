@extends('.layouts.template')

@section('title','Envoyez votre fichier ici')

@section('content')
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">Choose any files and upload them</h5>
            </div>
        </div>
    </div>
    <div class="parallax">
        <img src="{{ asset('images/parallax.jpg') }}" alt="Unsplashed background img 2">
    </div>
</div>
<div class="container" style="padding:3em 0">
    <div class="row">
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" class="col s12">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <i class="fa fa-pencil prefix"></i>
                    <input id="name" name="name" type="text" class="validate" value="{{ old('name') ?? $file->name }}">
                    <label for="name">The name of the file</label>
                    {!! $errors->first('name', "<span class='helper-text amber lighten-5 red-text text-darken-4 left'>:message</span>") !!}
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="fa fa-sticky-note prefix"></i>
                    <textarea name="description" id="description" class="materialize-textarea">{{ old('description') ?? $file->description }}</textarea>
                    <label for="description">Description</label>
                    {!! $errors->first('description', "<span class='helper-text amber lighten-5 red-text text-darken-4 left'>:message</span>") !!}
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field col s12">
                    <div class="btn">
                        <span>Votre fichier ici</span>
                        <input type="file" name="file" id="file" value="{{ old('file') ?? $file->file }}">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                    {!! $errors->first('file', "<span class='helper-text amber lighten-5 red-text text-darken-4 left'>:message</span>") !!}
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button class="waves-effect waves-light btn btn-large pulse" type="submit"><i class="fa fa-upload left"></i>Envoyer</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
