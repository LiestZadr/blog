@if(Session::has('success'))

    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading"><strong>Success : </strong>{{Session::get('success')}}</h4>
    </div>

@endif

@if(count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading"><strong>Errors : </strong></h4>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        
    </div>

@endif