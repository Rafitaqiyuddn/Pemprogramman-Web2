@php
    $nama = "Budi";
    $nilai = 40;
@endphp

@if ($nilai >= 60)
    @php
    $ket = "lulus";
    @endphp
@else
    @php
    $ket = "tidak lulus";
    @endphp
@endif

siswa yg bernama {{ $nama }}
<br> Dengan Nilai {{ $nilai }}
<br> Dinyatakan {{ $ket }}
