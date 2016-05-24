@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Existe problemas con los datos de entrada.<br><br>
        <ul>
            
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif