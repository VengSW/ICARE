@extends('layouts.nav')

@section('content')
<h2 class="header">{{ __('Recognition Started Page') }}</h2>
<form action="submit" method="post">
    @csrf
    <center>
    <table>
        <input type="hidden" name="recordid" >
        <input type="hidden" name="userid" value="1000">
        <tr>
            <td><input type="date" name="date" placeholder="date" ></td>
        </tr>
        <tr>
            <td><label for="img">Select image:</label></td>
        </tr>
        <tr>
            <td><input type="text" id="img" name="image"></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
        </tr>
    </table>
    </center> 
</form>
@endsection
