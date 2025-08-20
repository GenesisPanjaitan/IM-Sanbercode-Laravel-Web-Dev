@extends('layouts.master')

@section('title')
    REGISTER
@endsection

@section('content')
    <form action="/welcome" method="post">
        @csrf
        <label>First Name:</label><br>
        <input type="text" name="first_name"><br><br>
        <label>Last Name:</label><br>
        <input type="text" name="last_name"><br><br>
        <label>Gender:</label><br>
        <input type="radio" name="gender"> Male<br>
        <input type="radio" name="gender"> Female<br>
        <input type="radio" name="gender"> Other<br><br>
        <label>Nationality:</label><br>
        <select name="nationality">
            <option value="">Indonesian</option>
            <option value="">Malaysian</option>
            <option value="">Singaporean</option>
            <option value="">Australian</option>
        </select><br><br>
        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language"> Bahasa Indonesia<br>
        <input type="checkbox" name="language"> English<br>
        <input type="checkbox" name="language"> Other<br><br>
        <label>Bio:</label><br>
        <textarea rows="10" cols="30"></textarea><br><br>
        <input type="submit" value="Sign Up">
    </form>
@endsection