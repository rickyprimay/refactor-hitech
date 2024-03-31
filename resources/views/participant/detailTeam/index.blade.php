@extends('layouts.admin')

@section('content')
<div class="w-full overflow-x-auto">
    <div class="px-4 py-3">
        <h1 class="text-2xl font-bold pt-3">Data Lengkap Tim</h1>
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="inline-block w-full px-4 py-3.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-[#0B0960] to-[#64AEE5] hover:border-slate-700 hover:bg-slate-700 hover:text-white" type="button">Baca Ketentuan<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
        <!-- Ketentuan menu -->
        <div id="dropdown" class="overflow-y-auto px-8  py-3 z-10 hidden bg-white/90 divide-y divide-gray-100 rounded-lg shadow w-full dark:bg-gray-700">
        <ol class="text-sm space-y-1 list-decimal list-inside text-start text-gray-900 font-light dark:text-white">
            <li> Peserta mendaftar dengan cara menekan link Registrasi di bawah ini https://hitech.hmtiudinus.org/</li>
            <li> Isi form pendaftaran dengan baik</li>
            <li> Pada bagian link Drive,peserta dimohon untuk mengupload berkas-berkas kedalam satu folder dengan format penamaan :
                <span class="font-bold"> NamaTeam_NamaKetua_SoftwareFair ( contoh : Pantang Mundur_Budi_SoftwareFair )</span> untuk <span class="font-bold">Software Fair</span> dan <span class="font-bold">NamaTeam_NamaKetua_HardwareFair ( contoh : Pantang Mundur_Budi_HardwareFair )</span> yang diperlukan ke drive perwakilan tim, kemudian copy kan link drive tadi pada form tersebut dan jangan lupa untuk mengubah akses drive nya agar panitia juga dapat mengecek berkas yang ada.</li>
            <li>
                Untuk Berkas yang di Perlukan :
                <ul class="pl-5 mt-2 space-y-1 list-disc list-inside">
                    <li>Video Penjelasan serta cara kerja Aplikasi (format : 720p atau 1080p landscape durasi maksimal 5 menit) dikumpulkan dalam bentuk link youtube dan link disertakan pada form deskripsi software</li>
                    <li>Power Point Mengenai Software tersebut</li>
                    <li>Foto / screenshoot lengkap aplikasi
                        (format : jpg/png/gif ukuran 1080px X 1080px)</li>
                    <li>Logo tim (jika ada)
                        (format : jpg/png/gif ukuran 1080px X 1080px)</li>
                    <li>Logo instansi
                        (format : jpg/png/gif ukuran 1080px X 1080px)</li>
                    <li>Banner
                        (format : png ukuran 595px X 1263px potrait)</li>
                    <li>Foto anggota tim
                        (format : jpg/png/gif)</li>
                    <li>Scan Kartu Identitas / KTP / Kartu Pelajar / Kartu Tanda Mahasiswa (KTM)</li>
                    <li>Deskripsi software
                        berisi nama tim dan informasi anggota ,nama software /aplikasi,deskripsi software / aplikasi secara singkat, slogan produk, fitur, keunggulan (format : word atau pdf)
                        Untuk contoh file pemberkasan bisa diakses pada drive berikut Link contoh pemberkasannya : https://drive.google.com/drive/folders/1uxFC-9uEZQqtvMnKfFHzQ9K1p7GhZGR0?usp=sharing</li>
                    </li>
                </ul>
            </li>
            <li>Setelah mendaftar diharapkan developer dapat membayar biaya pendaftaran agar email dapat diverifikasi dan dapat digunakan untuk login kedalam sistem penilaian.</li>
            <li>Untuk info selanjutnya akan dihubungi via email / Whatsapp.</li>
        </ol>
        </div>
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
    @if(!empty($detailTeam))
        <form method="POST" action="{{ route('participant.detailTeam.update',$detailTeam['id']) }}" class="px-4 py-3" >
        @method('PUT')
    @else
        <form method="POST" action="{{ route('participant.detailTeam.store') }}" class="px-4 py-2" >
    @endif
        @csrf
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div class="my-2">
                <!-- type -->
                <div class="my-2">
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Pameran</label>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input @if(!empty($detailTeam) && $detailTeam['type']=="software") checked @endif type="radio" value="software" name="type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Software Fair</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input @if(!empty($detailTeam) && $detailTeam['type']=="hardware") checked @endif type="radio" value="hardware" name="type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hardware Fair</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- team name -->
                <div class="my-2">
                    <label for="name_team" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Tim</label>
                    <input
                            value="@if(!empty($detailTeam)){{$detailTeam['name_team']}}@else{{ old('name_team') }}@endif"
                            type="text"
                            required
                            name="name_team"
                            class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                </div>
                <!-- apps name -->
                <div class="my-2">
                    <label for="name_team" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Aplikasi/Projek</label>
                    <input
                            value="@if(!empty($detailTeam)){{$detailTeam['name_app']}}@else{{ old('name_app') }}@endif"
                            type="text"
                            required
                            name="name_app"
                            class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                </div>
                <!-- institution -->
                <div class="my-2">
                    <label  for="institution" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Institusi</label>
                    <input
                            value="@if(!empty($detailTeam)){{$detailTeam['institution']}}@else{{ old('institution') }}@endif"
                            type="text"
                            required
                            name="institution"
                            class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                </div>
                <!-- email -->
                <div class="my-2">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input
                            value="@if(!empty($detailTeam)){{$detailTeam['email']}}@else{{ old('email') }}@endif"
                            type="email"
                            required
                            name="email"
                            class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                </div>
            </div>
            <div class="my-2">
                <!-- name_member1 -->
                <div class="my-2">
                    <label for="name_member1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Anggota 1</label>
                    <input
                            value="@if(!empty($detailTeam)){{$detailTeam['name_member1']}}@else{{ old('name_member1') }}@endif"
                            type="text"
                            required
                            name="name_member1"
                            class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                </div>
                <!-- phone_member1 -->
                <div class="my-2">
                    <label for="phone_member1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telephone Anggota 1</label>
                    <input
                            value="@if(!empty($detailTeam)){{$detailTeam['phone_member1']}}@else{{ old('phone_member1') }}@endif"
                            type="text"
                            required
                            name="phone_member1"
                            class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                </div>
                <!-- name_member2 -->
                <div class="my-2">
                    <label for="name_member2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Anggota 2</label>
                    <input
                            value="@if(!empty($detailTeam)){{$detailTeam['name_member2']}}@else{{ old('name_member2') }}@endif"
                            type="text"
                            name="name_member2"
                            class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                </div>
                <!-- phone_member2 -->
                <div class="my-2">
                    <label for="phone_member2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telephone Anggota 2</label>
                    <input
                            value="@if(!empty($detailTeam)){{$detailTeam['phone_member2']}}@else{{ old('phone_member2') }}@endif"
                            type="text"
                            name="phone_member2"
                            class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                </div>
                <!-- button save -->
                <div class="my-2">
                    <button type="submit" class="inline-block w-full px-4 py-3.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-[#0B0960] to-[#64AEE5] hover:border-slate-700 hover:bg-slate-700 hover:text-white">Simpan</button>
                </div>
            </div>

        </div>
    </form>
</div>
@endsection
