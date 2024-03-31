@extends('layouts.admin')

@section('content')
<div class="w-full overflow-x-auto">
    <div class="px-4 py-3">
        <h1 class="text-2xl font-bold pt-3">Data Lengkap Projek</h1>
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
    @if(empty($detailPayment['link_project']))
        <div class="px-4 py-2" >
                <p class="text-red-600 text-center font-bold text-md" >Isi terlebih dahulu project</p>
        </div>

    @elseif(empty($detailPayment['approved_project']))
        <div class="px-4 py-2" >
                <p class="text-orange-600 text-center font-bold text-md" >Tunggu admin untuk mengecek datamu atau kontak <a class="text-black dark:text-white" href="https://wa.me/+6285157573144">admin</a></p>
        </div>
    @else
        <form method="POST" action="{{ route('participant.detailPayment.update',$detailPayment['id']) }}" class="px-4 py-3" >
        @method('PUT')
        @csrf
            <!-- payment_photo -->
            <div class="my-2">
                <label for="payment_photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Foto Pembayaran</label>
                <input
                        value="@if(!empty($detailPayment)){{$detailPayment['payment_photo']}}@else{{ old('payment_photo') }}@endif"
                        type="url"
                        required
                        name="payment_photo"
                        class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
            </div>
            <div class="my-2">
                <button type="submit" class="inline-block w-1/3 px-4 py-3.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-[#0B0960] to-[#64AEE5] hover:border-slate-700 hover:bg-slate-700 hover:text-white">Simpan</button>
            </div>
        </form>
    @endif

</div>
@endsection
