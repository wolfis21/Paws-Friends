@if (session('success'))
    <div id="flashMessageSuccess" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('info'))
    <div id="flashMessageEdit" class="alert alert-primary">
        {{ session('info') }}
    </div>
@endif

@if(session('destroy'))
    <div id="flashMessageDestroy" class="alert alert-danger">
        {{ session('destroy') }}
    </div>
@endif