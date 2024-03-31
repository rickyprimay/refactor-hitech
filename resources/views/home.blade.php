@extends('layouts.admin')

@section('content')
<div class="w-full overflow-x-auto">
    <!-- Jumbotron -->
    <div
    class="rounded-lg  p-6 text-neutral-700 shadow-lg  dark:text-white dark:shadow-black/30">
    <h2 class="mb-5 text-3xl font-semibold dark:text-white">Hi-Technology !</h2>
    <p>
        Selamat Datang di Hi-Technology jangan lupa untuk mengikuti Open Talks
    </p>
    <img class="object-contain max-h-[700px] w-full" src="{{url('img/OpenTalks.webp')}}">
    </div>
    <!-- Jumbotron -->
</div>
@endsection
