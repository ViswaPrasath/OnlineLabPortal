@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('error'))
    @if(Session::get('error'))
        <div class="alert alert-danger">
            <ul>
                <li>
                    {{ Session::get('message') }}
                </li>
            </ul>
        </div>
    @else
    <div class="alert alert-success">
        <ul>
            <li>
                {{ Session::get('message') }}
            </li>
        </ul>
    </div>
    @endif
@endif