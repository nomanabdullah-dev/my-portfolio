@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-dismiss="alert"></button>
            <strong>Error!</strong>{{ $error }}
        </div>
    @endforeach
@endif

<div style="font-size:16px;color:green;">
    @if( Session::has( 'success' ))
        {{ Session::get( 'success' ) }}
    @elseif( Session::has( 'warning' ))
        {{ Session::get( 'warning' ) }}
    @endif
</div>
