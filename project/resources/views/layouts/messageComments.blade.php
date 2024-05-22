@if (session('successComment'))
    <div id="flashCommentsSuccess" class="alert alert-success">
        {{ session('successComment') }}
    </div>
@endif
@if (session('denagateComment'))
    <div id="flashCommentsDenegate" class="alert alert-danger">
        {{ session('denagateComment') }}
    </div>
@endif