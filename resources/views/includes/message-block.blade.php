@if($errors->any())
<div class="row">
    <div class="col-6">
        <ul>
            @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

@if(Session::has('message'))
<div class="row">
    <div class="col-6">
        <ul>
            <li class="alert alert-success">{{Session::get('message')}}</li>
        </ul>
    </div>
</div>
@endif