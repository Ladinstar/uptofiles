@extends('.layouts.template')

@section('title',$file->name)

@section('content')
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                {{-- <h5 class="header col s12 light">Choose the file you like and download it</h5> --}}
            </div>
        </div>
    </div>
    <div class="parallax">
        <img src="{{ asset('images/extension/'.$file->extension->icon_bg) }}" alt="{{ $file->extension->name }}">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ $file->name }}</span>
                    <p>{{ $file->description ?? "Ce fichier n'a pas de description." }}</p>
                    <br>
                    <p><b>Taille : {{ (int)($file->length/1024) }} Ko</b></p>
                </div>
                <div class="card-action">
                    <a href="{{ route('download',$file) }}" class="waves-effect waves-light btn btn-large pulse">Télécharger le fichier <i class="fa fa-download white-text"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
