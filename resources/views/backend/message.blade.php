@if (session('success'))

    <div class="alert alert-success alert-outline-coloured alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="alert-icon">
            <i class="far fa-fw fa-bell"></i>
        </div>
        <div class="alert-message">
            <strong>Success! </strong>  {{ session('success') }}
        </div>
    </div>
@elseif(session('error'))
    <div class="alert alert-danger alert-outline-coloured alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="alert-icon">
            <i class="far fa-fw fa-bell"></i>
        </div>
        <div class="alert-message">
            <strong>Error! </strong>  {!! session('error')  !!}
        </div>
    </div>

@endif
