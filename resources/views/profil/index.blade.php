@extends('layouts.main')

@section('content')
<section class="flex justify-center items-center" id="beranda" style="min-height: 50vh">
    <div class="text-center text-white mt-4" >
        <h2 class="text-5xl font-bold uppercase">Profil MSI Kabupaten Wonogiri</h1>
            <div class="divider divider-warning"></div>
    </div>
</section>

<section id="profil">
    <div class="flex items-center justify-center min-h-screen mx-12">
        <div class="">

            <h1 class="text-4xl font-bold pt-8 uppercase border-b-4 border-orange-500 mb-4">Tentang Yayasan Mentari Sehat Indonesia</h1>
            {{-- <div class="divider divider-warning"></div> --}}
            <div class="bg-slate-200 p-2">
                <p class="text-black">
                    Mentari Sehat Indonesia berdiri pada tanggal 22 Juli 2020 di Kota Semarang. Yayasan pendirian ini diprakarsai oleh Prof. Dr. Masrukhi, M.Pd (Rektor UNIMUS), Dr. Supriyanto, M.Pd., Hj. Siti Taqiyah, BA., Noor Diansyah, SKM., dan Chairul Basar, SE.             </p>
                <p class="mt-2 text-black">
                    Di bidang kesehatan, Yayasan Mentari Sehat berperan untuk menggerakkan masyarakat dalam upaya mewujudkan kemandirian dalam mengatasi masalah-masalah penyakit yang menular di masyarakat seperti TBC. Jejaring yayasan Mentari Sehat Indonesia sudah ada dan eksis di 34 kabupaten kota se-Jawa Tengah dan salah satunya adalah Yayasan Mentari Sehat Indonesia Cabang Kabupaten Demak yang berdiri tepatnya tanggal 13 November 2020             </p>
                <p class="mt-2 text-black">
                    Kantor Cabang Yayasan Mentari Sehat Indonesia ini juga memiliki kantor administratif masing-masing sehingga kedudukan, wilayah kerja, dan jejaring juga telah terbentuk dan terjalin program komunikasi dengan baik. 
                </p>
        </div>
        </div>
    </div>
</section>

@endsection