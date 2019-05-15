<nav role="navigation">
    <div class="nav-wrapper container">
    <a id="logo-container" href="{{ route('home') }}" class="brand-logo">UpToFiles</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
        <ul class="right hide-on-med-and-down">
            <li> <a href="{{ route('create') }}" class="waves-effect waves-light btn blue">Uploader un fichier</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('create') }}" class="waves-effect waves-light btn blue">Uploader un fichier</a></li>
</ul>
