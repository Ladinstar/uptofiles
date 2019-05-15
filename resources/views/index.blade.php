@extends('.layouts.template')

@section('title','Téléchargez les fichiers que vous voulez gratuitement')

@section('content')
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">Choose the file you like and download it</h5>
            </div>
        </div>
    </div>
    <div class="parallax">
        <img src="{{ asset('images/parallax.jpg') }}">
    </div>
</div>
<div class="container">
    <ul class="collection">
        @forelse ($files as $file)
        <li class="collection-item avatar">
            <img src="images/extension/{{ $file->extension->icon }}" alt="$file->extension->name" class="circle">
            <span class="title"><b>{{ $file->name }}</b></span>
            <p>{{ $file->description }} <br>
            </p>
            <a href="{{ route('show', $file) }}" class="secondary-content"><i class="fa fa-download red-text"></i></a>
        </li>
        @empty
        <li class="collection-header"><h4>Il n'y a aucun fichier dans la base de données</h4></li>
        @endforelse
    </ul>
</div>
@endsection
