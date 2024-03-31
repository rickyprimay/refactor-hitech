@extends('layouts.admin')

@section('content')
<div class="w-full overflow-x-auto py-5 px-2">
    <form action="{{ url('admin/masterPoint')}}" method="post">
    @csrf
    <div class="mb-6">
        <label for="Nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
        <input type="text" name="name" id="nama" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
    </div>
    <div class="mb-6">
        <label for="point" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poin</label>
        <input type="number" name="point" id="point" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
    </div>
    <div class="mb-6">
    <label for="team_select" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Tim</label>
        <select id="team_select" name="participant_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a team</option>
            @foreach ($participant as $p)
            <option value="{{$p->id}}">{{$p->name_team}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Tambah</button>
    </form>
</div>
@endsection
