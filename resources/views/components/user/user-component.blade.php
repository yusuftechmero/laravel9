<div>
    <ul>
@foreach($user as $key => $value) 

    <li><strong>Name: </strong> {{ $value->name }} <strong>Email: </strong> {{ $value->email }}</li>

@endforeach
</ul>

</div>