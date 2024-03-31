@extends('layouts.admin')

@section('content')
<div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
        <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">No.</th>
                <th class="px-4 py-3">Gambar</th>
                <th class="px-4 py-3">Nama</th>
                <th class="px-4 py-3">Harga</th>
                <th class="px-4 py-3">Deskripsi</th>
                <th class="px-4 py-3">Pembuat</th>
                <th class="px-4 py-3">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

        </tbody>
    </table>
</div>
@endsection
