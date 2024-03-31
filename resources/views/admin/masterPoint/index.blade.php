@extends('layouts.admin')

@section('content')
<div class="w-full overflow-x-auto py-2">
    <p class="mb-5 text-gray-700 dark:text-white">
        Master Point
        <a href="{{ route('admin.masterPoint.create') }}" class="text-right text-white mb-10 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</a>
    </p>
    <!-- Successfully Massage -->
    @if(session()->has('success'))
        <div class="font-medium text-green-600">
            {{ session()->get('success') }}
        </div>
    @endif
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50/50 dark:bg-gray-700/50 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Ketua
                </th>
                <th scope="col" class="px-6 py-3">
                    Point
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($masterPoint as $mp)
            <tr class="bg-white border-b dark:bg-gray-800/50 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{ $mp->pName }}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $mp->mpName }}
                </td>
                <td class="px-6 py-4">
                    {{ $mp->mpPoint }}
                </td>

                <td class="px-6 py-4">
                    <a href="{{ route('admin.masterPoint.edit',$mp->mpId) }}" class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"> Edit </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-3">
        {{ $masterPoint->links('vendor.pagination.tailwind') }}
    </div>
</div>
@endsection
