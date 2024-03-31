@extends('layouts.admin')

@section('content')
<div class="w-full overflow-x-auto">
    <div class="px-4 py-3">
        <h1 class="text-2xl font-bold pt-3">Membayar Open Talks</h1>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="font-medium text-red-600">
                {{ __('Whoops! Something went wrong.') }}
            </div>

            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <!-- Successfully Massage -->
        @if(session()->has('success'))
                <div class="font-medium text-green-600">
                {{ session()->get('success') }}
                </div>
        @endif
    </div>
    @if(!empty($openTalk))
        <form method="POST" action="{{ route('user.openTalk.update',$openTalk['id']) }}" class="px-4 py-3" >
        @method('PUT')
    @else
        <form method="POST" action="{{ url('user/openTalk') }}" class="px-4 py-2" >
    @endif
        @csrf
            <!-- payment_photo -->
            <div class="my-2">
                <label for="payment_photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Foto Pembayaran</label>
                <input
                        value="@if(!empty($openTalk)){{$openTalk['payment_link']}}@else{{ old('payment_link') }}@endif"
                        type="url"
                        required
                        name="payment_link"
                        class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
            </div>
            <div class="my-2">
                <button type="submit" class="inline-block w-1/3 px-4 py-3.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-[#0B0960] to-[#64AEE5] hover:border-slate-700 hover:bg-slate-700 hover:text-white">Simpan</button>
            </div>
        </form>
</div>
@endsection
