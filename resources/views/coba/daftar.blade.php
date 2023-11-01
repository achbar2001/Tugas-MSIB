 @php

 $no = 1;

 $s1 = ['nama' => 'ari', 'nilai'=> 85];
 $s2 = ['nama' => 'ali', 'nilai'=> 95];
 $s3 = ['nama' => 'aoi', 'nilai'=> 75];
 $s4 = ['nama' => 'arip', 'nilai'=> 65];
 $s5 = ['nama' => 'aji', 'nilai'=> 55];

 $header = ['No', 'Nama', 'Nilai', 'Keterangan'];
 $siswa = [$s1, $s2, $s3, $s4, $s5];
 @endphp

 <table border="1" align="center" cellpadding='10'>
     <thead>
         <tr>
             @foreach($header as $hdr)
             <th>{{$hdr}}</th>
             @endforeach
         </tr>
     </thead>
     <tbody>
         <tr>
             @foreach($siswa as $swa)
             @php
             $ket = ($swa['nilai'] >= 60) ? "Lulus" : 'Gagal';
             @endphp

             <td>{{$no++}}</td>
             <td>{{$swa['nama']}}</td>
             <td>{{$swa['nilai']}}</td>
             <td>{{$ket}}</td>
         </tr>
         @endforeach
     </tbody>
 </table>