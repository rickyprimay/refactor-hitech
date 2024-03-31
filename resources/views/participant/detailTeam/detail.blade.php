@extends('layouts.admin')

@section('content')
    <div class="w-full min-h-[300px] overflow-x-auto">
        <div class="px-6 py-3">
            <div class="mb-6">
                <label
                    class="block mb-2 text-xl font-bold text-gray-900 dark:text-white">{{ $participant->dtName_app }}</label>
                <label class="block mb-2 text-sm uppercase font-medium text-gray-900 dark:text-white">by
                    {{ $participant->dtName_team }} - {{ $participant->dtType }}</label>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">From
                    {{ $participant->dtInstitution }}</label>
            </div>
            <div class="mb-6">
                <div class="card flex flex-row my-4">
                    <div class="relative flex flex-col min-w-0 break-words shadow-xl rounded-2xl bg-clip-border mx-4">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap -mx-3">
                                <div class="max-w-full px-3 lg:flex-none">
                                    <div class="flex flex-col h-full">
                                        <h5 class="font-bold dark:text-white ">Data Project</h5>
                                        @if (!empty($participant->dtLink_project))
                                            <label class="block mb-12 text-md font-medium text-gray-900 dark:text-white"><b>Projek
                                                    : </b><a
                                                    href="{{ $participant->dtLink_project }}">{{ $participant->dtLink_project }}</a></label>
                                        @else
                                            <p class="mb-12 dark:text-white text-center">Your team has not uploaded their
                                                project yet</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex flex-col min-w-0 break-words shadow-xl rounded-2xl bg-clip-border mx-4">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap -mx-3">
                                <div class="max-w-full px-3 lg:flex-none">
                                    <div class="flex flex-col h-full">
                                        <h5 class="font-bold dark:text-white">Data Payment</h5>
                                        @if (!empty($participant->dtPayment_photo))
                                            <label class=" mb-12 block text-md font-medium text-gray-900 dark:text-white"><b>Pembayaran
                                                    : </b><a
                                                    href="{{ $participant->dtPayment_photo }}">{{ $participant->dtLink_project }}</a></label>
                                        @else
                                            <p class="mb-12 dark:text-white text-center">Your team has not uploaded their
                                                payment receipt yet</p>

                                        @endif

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Nama Anggota</label>
            </div>
            <div class="mb-6">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Anggota
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor Telefon
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $participant->pName }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $participant->pPhone }}
                                </td>
                                <td class="px-6 py-4 font-bold">
                                    Ketua
                                </td>
                            </tr>
                            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $participant->dtName_member1 }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $participant->dtPhone_member1 }}
                                </td>
                                <td class="px-6 py-4">
                                    Anggota
                                </td>
                            </tr>
                            @if (!empty($participant->dtName_member2))
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        @if (!empty($participant->dtName_member2))
                                            {{ $participant->dtName_member2 }}
                                        @endif
                                    </th>
                                    <td class="px-6 py-4">
                                        @if (!empty($participant->dtPhone_member2))
                                            {{ $participant->dtPhone_member2 }}
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        Anggota
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
