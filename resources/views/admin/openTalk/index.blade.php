@extends('layouts.admin')

@section('content')
    <div class="w-full overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 datatable id='datatable-search'">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50/50 dark:bg-gray-700/50 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ticket Number
                    </th>
                    <th scope="col" class="px-4 py-3">
                        User ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Payment Link
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Approved Payment
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created At
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Updated At
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($participant as $p)
                    <tr class=" border-b  dark:border-gray-700">
                        <th scope="row" class="px-3 py-4">
                            <div class="relative">
                                @if ($p->dtType = 'software')
                                    Software Fair
                                @elseif ($p->dtType = 'hardware')
                                    Hardware Fair
                                @endif
                            </div>
                        </th>
                        <td class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $p->name }}
                        </td>
                        <td class="px-3 py-4">
                            {{ $p->name_team }}
                        </td>
                        <td class="px-3 py-4">
                            <div class="relative">
                                @if(empty($p->payment_photo))
                                    <span class="text-red-800">
                                        Belum Mengisi pembayaran
                                    </span>
                                @elseif(empty($p->approved_payment))
                                    <span class="text-yellow-800">
                                        Pembayaran belum disetujui <br>
                                        <a href="{{ $p->payment_photo }}">{{ $p->payment_photo }}</a>
                                    </span>
                                    @else
                                    <span class="text-green-800">
                                        Pembayaran telah disetujui <br>
                                        <a href="{{ $p->payment_photo }}">{{ $p->payment_photo }}</a>
                                    </span>
                                @endif
                            </div>
                        </td>
                        <td class="px-3 py-4">
                            <div class="relative">
                                @if (empty($p->link_project))
                                    <span class="text-red-600">
                                        Belum Mengisi project
                                    </span>
                                @elseif(empty($p->approved_project))
                                    <span class="text-yellow-600">
                                        Link Projek belum di setujui <br>
                                        <a href="{{ $p->link_project }}">{{ $p->link_project }}</a>
                                    </span>
                                @else
                                    <span class="text-greeen-600">
                                        Link telah setujui <br>
                                        <a href="{{ $p->link_project }}">{{ $p->link_project }}</a>
                                    </span>
                                    @endif
                            </div>
                        </td>
                        <td class="px-3 py-4">
                            @if (!empty($p->link_project))

                            @elseif(!empty($p->payment_photo))
                                <form action="{{ route('admin.participantData.approvePayment') }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        class="inline-block px-3 py-2 mr-3 font-bold text-center text-white align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md">Setujui
                                        Pembayaran</button>
                                </form>
                            @endif
                            <a href="{{ url('admin/participantData/' . $p->id) }}"
                                class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400">
                                <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"
                                    aria-hidden="true"></i>
                            </a>
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
