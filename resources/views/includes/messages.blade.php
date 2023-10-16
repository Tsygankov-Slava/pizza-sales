@if($errors->any())
    <div class="alert alert-danger" style="width: 50%; margin: 0 auto 25px;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success" style="width: 50%; margin: 0 auto 25px;">
        {{ session('success') }}
    </div>
@endif

