@php
$nama = "Budi";
$nilai = 59.99;
@endphp

@if ($nilai >= 60) @php $ket = "lulus"; @endphp
@else @php $ket = "Gagal"; @endphp
@endif

Siswa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}