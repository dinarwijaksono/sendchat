@extends('layout/secondary')

@section('article')
<h1 class="text-lg text-center"><?= auth()->user()->username ?></h1>
<h1 class="text-center"><?= auth()->user()->email ?></h1>

<hr class="my-4">

<a href="" class="text-blue-500">
    <p class="text-center">Edit profile</p>
</a>

<form action="/Auth/logout" method="post">
    @csrf
    <button class="text-center block mx-auto text-red-500" type="submit">Logout</button>
</form>
@endsection