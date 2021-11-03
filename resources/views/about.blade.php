<center>
<h1>test page</h1>

<h2>This is using Auth: </h2>{{ Auth::user()->name }}

<br>

<h2>This is using session key:</h2>{{ session()->get('key') }}

<br>

<h2>This is using compact:</h2>
@foreach($data2 as $row)
    {{ $row->UserID}}
    {{ $row->email}}
    {{ $row->created_at}}
@endforeach
</center>