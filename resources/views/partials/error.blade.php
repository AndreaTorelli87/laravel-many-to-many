@if ($errors->any())
    <div class="alert alert-danger text-center container fs-5 fw-bold py-1">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session("status"))
    <div class="alert alert-success text-center container display-4 fw-bold">
        {{ session("status") }}
    </div>
@endif
