@extends('layouts.admin')

@section('content')
<div class="w-full overflow-x-auto">
    <div class="p-7 text-center">
        <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Selamat datang di Hi-Technology</h1>
        <h1 class="mb-4 text-start text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-3xl dark:text-white">Ketentuan</h1>
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
</div>
@endsection
