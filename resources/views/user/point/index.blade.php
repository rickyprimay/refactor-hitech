@extends('layouts.admin')

@section('content')
<div class="w-full overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50/50 dark:bg-gray-700/50 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Ketua
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Tim
                </th>
                <th scope="col" class="px-6 py-3">
                    Tahap
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($participant as $p)
            <tr class="bg-white border-b dark:bg-gray-800/50 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $p->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $p->name_team }}
                </td>
                <td class="px-6 py-4">
                    {{ $p->name }}
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-3">
        {{ $participant->links('vendor.pagination.tailwind') }}
    </div>
</div>
@endsection
