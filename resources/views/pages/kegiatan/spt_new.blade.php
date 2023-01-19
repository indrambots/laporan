<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
           body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 15mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
    }
    
    @page {
        size: F4;
        margin: 0;
    }
    @media print {
        .pagebreak { page-break-before: always; }
        html, body {
            width: 210mm;
            height: 330mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
 p { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 12pt; margin:0pt; }
 h2 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 14pt; }
 h1 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 18pt; }
 h4 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 11pt; }
 h5 { color: black; font-family:"Times New Roman", sans-serif; font-style: normal; font-weight: bold; text-decoration: underline; font-size: 14pt; line-height:0pt; }
 a { color: #00AEEE; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; }
 .s2 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: bold; text-decoration: underline; font-size: 14pt; }
 .s3 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: underline; font-size: 11pt; }
 .s4 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 11pt; }
 .s5 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 12pt; }
 .s6 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
 .s7 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; }
 .s8 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: underline; font-size: 11pt; }
 li {display: block; }
 h3 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration-line: underline; text-decoration-thickness: 2px;font-size: 12pt; }
 table, tbody {vertical-align: top; overflow: visible; }
 .s9 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; margin:0pt; }
</style>
</head>
<body>

    <div class="page">
    	<table style="overflow:visible;margin-bottom: -10px;">
    		<tr>
    			<td style="width:80pt"><img alt="image" height="112" src="{{asset('media/bg/logo_jatim.gif')}}" width="74"/></td>
    			<td style="text-align: center; line-height: 1px">
                        <h3 style="font-weight: bold; line-height:5pt;">PEMERINTAH PROVINSI JAWA TIMUR</h3>
                        <h1 style="line-height:5pt;">SATUAN POLISI PAMONG PRAJA</h1>
                        <p >Jl. Jagir Wonokromo No. 352 Telp. (031) 8412159 Fax. (031) 8412259 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        	<a href="mailto:satpolppjatim1950@gmail.com" style=' color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt;' target="_blank">
                Website – https://satpolpp.jatimprov.go.id, Email :
            </a>
            <a href="mailto:satpolppjatim1950@gmail.com" target="_blank">
                jks.satpolpp@jatimprov.go.id
            </a>
                        </p>
                        <h5 style="margin-top:20px;">S U R A B A Y A 60244</h5>
                    </td>
    		</tr>
    	</table>

        <p class="s3" style="ptext-indent: -2pt;line-height: 125%;text-align: center;">
            SURAT PERINTAH TUGAS</p>
            <p style="text-align: center;">
                Nomor : {{$keg->spt}}
            </p> <br>
        </p>
    	<table cellspacing="0" style="border-collapse:collapse; ">
            <tr style="height:43pt">
                <td style="width:61pt">
                    <p class="s4" style="padding-left: 2pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        D A S A R
                    </p>
                </td>
                <td style="width:18pt">
                    <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        :
                    </p>
                </td>
                <td style="width:24pt">
                    <p class="s6" style="padding-left: 4pt;padding-right: 5pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        1.
                    </p>
                </td>
                <td colspan="3" style="width:450pt">
                    <p class="s6" style="padding-left: 8pt;padding-right: 2pt;text-indent: 0pt;text-align: justify;">
                        Peraturan Daerah Provinsi Jawa Timur Nomor 14 Tahun 2022 tentang Anggaran Pendapatan dan Belanja Daerah Provinsi Jawa Timur Tahun Anggaran 2023;
                    </p>
                </td>
            </tr>
            <tr style="height:43pt">
                <td style="width:61pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:18pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:24pt">
                    <p class="s6" style="padding-left: 4pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">
                        2.
                    </p>
                </td>
                <td colspan="3" style="width:421pt">
                    <p class="s6" style="padding-left: 8pt;padding-right: 2pt;text-indent: 0pt;line-height: 14pt;text-align: justify;">
                        Peraturan Gubernur Jawa Timur Nomor  66 Tahun 2022 tentang Pedoman Kerja dan Pelaksanaan Tugas Pemerintah Provinsi Jawa Timur Tahun 2023;

                    </p>
                </td>
            </tr>
            <tr style="height:43pt">
                <td style="width:61pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:18pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:24pt">
                    <p class="s6" style="padding-left: 4pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">
                        3.
                    </p>
                </td>
                <td colspan="3" style="width:421pt">
                    <p class="s6" style="padding-left: 8pt;text-indent: 0pt;text-align: left;">
                        Peraturan Gubernur Jawa Timur Nomor 89 Tahun 2022 tentang Penjabaran Anggaran Pendapatan dan Belanja Daerah Provinsi Jawa Timur Tahun Anggaran 2023
                    </p>
                </td>
            </tr>
            <tr style="height:43pt">
                <td style="width:61pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:18pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:24pt">
                    <p class="s6" style="padding-top: 2pt;padding-left: 6pt;text-indent: 0pt;text-align: left;">
                        4.
                    </p>
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td colspan="3" style="width:421pt">
                    <p class="s6" style="padding-top: 2pt;padding-left: 8pt;padding-right: 2pt;text-indent: 0pt;text-align: justify;">
                        Dokumen Pelaksanaan Anggaran Satuan Polisi Pamong Praja Provinsi Jawa Timur Tahun Anggaran 2023 Nomor DPA/A.1/1.05.0.00.0.00.01.0000/001/2023
                    </p>
                </td>
            </tr>
            @if($keg->dasar_surat !== null)
            <tr style="height:35pt">
                <td style="width:61pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:18pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:24pt">
                    <p class="s6" style="padding-top: 2pt;padding-left: 6pt;text-indent: 0pt;text-align: left;">
                        5.
                    </p>
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td colspan="3" style="width:421pt">
                    <p class="s6" style="padding-top: 2pt;padding-left: 8pt;padding-right: 2pt;text-indent: 0pt;text-align: justify;">
                        {{$keg->dasar_surat}}
                    </p>
                </td>
            </tr>
            @endif
        </table>
        <br>
            <p class="s5" style="text-align: center;">
                M E M E R I N T A H K A N
            </p>
            @if(count($keg->personel) > 3)
    	<table cellspacing="0" style="border-collapse:collapse;">
            <tr style="height:20pt">
                <td style="width:61pt">
                    <p class="s4" style="padding-left: 2pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        KEPADA
                    </p>
                </td>
                <td style="width:18pt">
                    <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        :
                    </p>
                </td>
                <td colspan="3" >
                    <p class="s6" style="padding-left: 4pt;padding-right: 5pt;text-indent: 0pt;line-height: 14pt;">
                         Daftar nama-nama terlampir
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:61pt">
                    <p class="s4" style="padding-left: 2pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        UNTUK
                    </p>
                </td>
                <td style="width:18pt">
                    <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        :
                    </p>
                </td>
                <td style="width:24pt">
                    <p class="s6" style="padding-left: 4pt;padding-right: 5pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        1.
                    </p>
                </td>
                <td colspan="3" style="width:421pt">
                    <p class="s6" style="padding-left: 8pt;padding-right: 2pt;text-indent: 0pt;text-align: justify;">
                       {{$bentuk_kegiatan->format_spt}} {{$keg->judul_kegiatan}} pada Hari 
                       @if($keg->tanggal_mulai == $keg->tanggal_selesai)
                           {{$keg->hari($keg->tanggal_mulai)}} 
                           Tanggal {{$keg->tgl_indo($keg->tanggal_mulai)}} 
                       @else
                           {{$keg->hari($keg->tanggal_mulai)}} s/d  {{$keg->hari($keg->tanggal_selesai)}}
                           Tanggal {{$keg->tgl_indo_2($keg->tanggal_mulai,$keg->tanggal_selesai)}} 
                       @endif
                       di {{$keg->lokasi}}, Pukul {{date('H.i', strtotime($keg->jam_mulai))}} WIB;
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:61pt">
                    <p class="s4" style="padding-left: 2pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        <br>
                    </p>
                </td>
                <td style="width:18pt">
                    <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        <br>
                    </p>
                </td>
                <td style="width:24pt">
                    <p class="s6" style="padding-left: 4pt;padding-right: 5pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        2.
                    </p>
                </td>
                <td colspan="3" style="width:421pt">
                    <p class="s6" style="padding-left: 8pt;padding-right: 2pt;text-indent: 0pt;text-align: justify;">
                       APP di Kantor Satuan Polisi Pamong Praja Provinsi Jawa Timur Jl. Jagir Wonokromo No.352 Surabaya, Pukul : {{date('H.i', strtotime($keg->jam_app))}} WIB;
                    </p>
                </td>
            </tr>
            <tr >
                <td style="width:61pt">
                    <p class="s4" style="padding-left: 2pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        <br>
                    </p>
                </td>
                <td style="width:18pt">
                    <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        <br>
                    </p>
                </td>
                <td style="width:24pt">
                    <p class="s6" style="padding-left: 4pt;padding-right: 5pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        3.
                    </p>
                </td>
                <td colspan="3" style="width:421pt">
                    <p class="s6" style="padding-left: 8pt;padding-right: 2pt;text-indent: 0pt;text-align: justify;">
                      Dalam melaksanakan tugas Pakaian {{$keg->seragam}}
                    </p>
                </td>
            </tr>
            <tr >
                <td style="width:61pt">
                    <p class="s4" style="padding-left: 2pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        <br>
                    </p>
                </td>
                <td style="width:18pt">
                    <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        <br>
                    </p>
                </td>
                <td style="width:24pt">
                    <p class="s6" style="padding-left: 4pt;padding-right: 5pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        4.
                    </p>
                </td>
                <td colspan="3" style="width:421pt">
                    <p class="s6" style="padding-left: 8pt;padding-right: 2pt;text-indent: 0pt;text-align: justify;">
                       Melaporkan hasil Pelaksanaan Tugas tersebut kepada Kepala Satuan Polisi Pamong Praja Provinsi Jawa Timur.
                    </p>
                </td>
            </tr>
            <tr style="height:36pt">
                <td style="width:61pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:18pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td colspan="4" style="width:445pt">
                    <p class="s6" style="padding-top: 6pt;padding-left: 4pt;text-indent: 18pt;line-height: 14pt;text-align: left;">
                        Demikian Surat Perintah Tugas ini untuk dilaksanakan dengan sebaik- baiknya dengan penuh rasa tanggung jawab.
                    </p>
                </td>
            </tr>
        </table>
        @else
        <table cellspacing="0" style="border-collapse:collapse;">
            <tr style="height:51pt">
                <td style="width:48pt">
                    <p class="s4" style="padding-left: 2pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        Kepada
                    </p>
                </td>
                <td style="width:14pt">
                    <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        :
                    </p>
                </td>
                <td style="width:20pt">
                    <p class="s6" style="padding-left: 5pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        1.
                    </p>
                </td>
                <td style="width:120pt">
                    <p class="s6" style="padding-left: 10pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        Nama
                    </p>
                    <p class="s6" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">
                        Pangkat / Golongan NIP
                    </p>
                    <p class="s6" style="padding-left: 10pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        Jabatan
                    </p>
                </td>
                <td style="width:17pt">
                    <p class="s6" style="padding-left: 8pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        :
                    </p>
                    <p class="s6" style="padding-left: 8pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        :
                    </p>
                    <p class="s6" style="padding-left: 8pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        :
                    </p>
                    <p class="s6" style="padding-left: 8pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        :
                    </p>
                </td>
                <td style="width:273pt">
                    <p class="s6" style="padding-left: 5pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        {{$katim->nama}}
                    </p>
                    <p class="s6" style="padding-left: 5pt;padding-right: 125pt;text-indent: 0pt;text-align: left;">
                        {{$katim->pangkat}} {{$katim->konversi_nip($katim->nip)}}
                    </p>
                    <p class="s6" style="padding-left: 5pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        {{ucwords(strtolower($katim->pegawai->nama_jabatan))}}
                    </p>
                </td>
            </tr>
            @foreach($anggota as $a)
            <tr style="height:57pt">
                <td style="width:48pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:14pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:20pt">
                    <p class="s6" style="padding-left: 5pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        {{$loop->iteration + 1}}.
                    </p>
                </td>
                <td style="width:111pt">
                    <p class="s6" style="padding-left: 10pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        Nama
                    </p>
                    <p class="s6" style="padding-left: 10pt;text-indent: 0pt;text-align: left;">
                        Pangkat / Golongan NIP
                    </p>
                    <p class="s6" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Jabatan
                    </p>
                </td>
                <td style="width:17pt">
                    <p class="s6" style="padding-left: 8pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        :
                    </p>
                    <p class="s6" style="padding-left: 8pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        :
                    </p>
                    <p class="s6" style="padding-left: 8pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        :
                    </p>
                    <p class="s6" style="padding-left: 8pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        :
                    </p>
                </td>
                <td style="width:273pt">
                    <p class="s6" style="padding-left: 5pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        {{$a->nama}}
                    </p>
                    <p class="s6" style="padding-left: 5pt;padding-right: 125pt;text-indent: 0pt;text-align: left;">
                        {{$a->pangkat}} {{$a->konversi_nip($a->nip)}}
                    </p>
                    <p class="s6" style="padding-left: 5pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Pranata Komputer
                    </p>
                </td>
            </tr>
            @endforeach
            <tr>
                <td style="width:61pt">
                    <p class="s4" style="padding-left: 2pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        UNTUK
                    </p>
                </td>
                <td style="width:18pt">
                    <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        :
                    </p>
                </td>
                <td style="width:24pt">
                    <p class="s6" style="padding-left: 4pt;padding-right: 5pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        1.
                    </p>
                </td>
                <td colspan="3" style="width:421pt">
                    <p class="s6" style="padding-left: 8pt;padding-right: 2pt;text-indent: 0pt;text-align: justify;">
                       {{$bentuk_kegiatan->format_spt}} {{$keg->judul_kegiatan}} pada Hari 
                       @if($keg->tanggal_mulai == $keg->tanggal_selesai)
                           {{$keg->hari($keg->tanggal_mulai)}} 
                           Tanggal {{$keg->tgl_indo($keg->tanggal_mulai)}} 
                       @else
                       {{$keg->hari($keg->tanggal_mulai)}}
                           {{$keg->hari($keg->tanggal_mulai)}} s/d  {{$keg->hari($keg->tanggal_selesai)}}
                           Tanggal {{$keg->tgl_indo_2($keg->tanggal_mulai,$keg->tanggal_selesai)}} 
                       @endif
                       di {{$keg->lokasi}}, Pukul {{date('H.i', strtotime($keg->jam_mulai))}} WIB;
                    </p>
                </td>
            </tr>
            <tr >
                <td style="width:61pt">
                    <p class="s4" style="padding-left: 2pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                        <br>
                    </p>
                </td>
                <td style="width:18pt">
                    <p class="s5" style="padding-left: 1pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        <br>
                    </p>
                </td>
                <td style="width:24pt">
                    <p class="s6" style="padding-left: 4pt;padding-right: 5pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                        2.
                    </p>
                </td>
                <td colspan="3" style="width:421pt">
                    <p class="s6" style="padding-left: 8pt;padding-right: 2pt;text-indent: 0pt;text-align: justify;">
                       Melaporkan hasil Pelaksanaan Tugas tersebut kepada Kepala Satuan Polisi Pamong Praja Provinsi Jawa Timur.
                    </p>
                </td>
            </tr>
            <tr style="height:36pt">
                <td style="width:61pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td style="width:18pt">
                    <p style="text-indent: 0pt;text-align: left;">
                        <br/>
                    </p>
                </td>
                <td colspan="4" style="width:445pt">
                    <p class="s6" style="padding-top: 6pt;padding-left: 4pt;text-indent: 18pt;line-height: 14pt;text-align: left;">
                        Demikian Surat Perintah Tugas ini untuk dilaksanakan dengan sebaik- baiknya dengan penuh rasa tanggung jawab.
                    </p>
                </td>
            </tr>
        </table>
        @endif
        <br>
<table cellspacing="0" style="border-collapse:collapse;margin-left:35.075pt">
    <tbody>
        <tr style="height:13pt">
            <td style="width:64pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:64pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:64pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:97pt">
                <p class="s5" style="padding-left: 10pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                    Dikeluarkan di
                </p>
            </td>
            <td style="width:168pt">
                <p class="s5" style="padding-left: 7pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                    : Surabaya
                </p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td style="width:64pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:64pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:64pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:97pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s5" style="padding-left: 20pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                    pada tanggal
                </p>
            </td>
            <td style="width:168pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p class="s5" style="padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                    : {{$keg->tgl_indo(date('Y-m-d', strtotime($keg->created_at)))}}
                </p>
            </td>
        </tr>
        <tr style="height:10pt">
            <td style="width:64pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:64pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:64pt;border-bottom-style:solid;border-bottom-width:1pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:97pt;border-top-style:solid;border-top-width:1pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:168pt;border-top-style:solid;border-top-width:1pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
        </tr>
        <tr style="height:26pt">
            <td colspan="3" style="width:192pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s7" style="padding-left: 15pt;text-indent: -10pt;line-height: 13pt;text-align: left;">
                    Konsep Naskah Dinas ini diajukan untuk mendapatkan tanda tangan eletronik
                </p>
            </td>
            <td colspan="2" style="width:265pt;border-left-style:solid;border-left-width:1pt">
                <p class="s4" style="padding-left: 75pt;text-indent: -50pt;line-height: 13pt;text-align: left;">
                    KEPALA SATUAN POLISI PAMONG PRAJA PROVINSI JAWA TIMUR
                </p>
            </td>
        </tr>
        <tr style="height:5pt">
            <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s7" style="padding-left: 17pt;text-indent: 0pt;text-align: left;">
                    Es. IV
                </p>
            </td>
            <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s7" style="padding-left: 18pt;text-indent: 0pt;text-align: left;">
                    Es. III
                </p>
            </td>
            <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s7" style="padding-left: 13pt;text-indent: 0pt;text-align: left;">
                    KASAT
                </p>
            </td>
            <td colspan="2" style="width:265pt;border-left-style:solid;border-left-width:1pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
        </tr>
        <tr style="height:10pt">
            <td style="width:64pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt;border-bottom:1.25pt solid black;" >
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:64pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt;border-bottom:1.25pt solid black;" >
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td style="width:64pt;border-left-style:solid;border-left-width:1pt;border-right-style:solid;border-right-width:1pt;border-bottom:1.25pt solid black;" >
                <p style="text-indent: 0pt;text-align: left;">
                    <br/>
                </p>
            </td>
            <td colspan="2" style="width:265pt;border-left-style:solid;border-left-width:1pt">
                <p style="text-indent: 0pt;text-align: left;">
                    <br/> <br/>
                </p>
                <p class="s8" style="padding-left: 10pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                    M. HADI WAWAN GUNTORO, S.STP., M.Si., CIPA
                </p>
                <p class="s4" style="padding-left: 66pt;padding-right: 49pt;text-indent: 14pt;line-height: 13pt;text-align: left;">
                    Pembina Utama Muda NIP. 19770323 199511 1 001
                </p>
            </td>
        </tr>
    </tbody>
</table>
                <img alt="image" height="55" src="{{asset('media/bg/Image_003.jpg')}}" width="700" style="position:absolute; bottom: 20px;" />
        {{-- <p style="padding-top: 4pt;padding-left: 322pt;text-indent: 0pt;text-align: left;">
            Dikeluarkan di : Surabaya<br>
            <b style="border-bottom:2px solid black">
                Pada tanggal : 8 Juni 2022
            </b>
        </p> <br>
        <p style="padding-top: 4pt;padding-left: 250pt;text-indent: 0pt;text-align: center;">
            KEPALA SATUAN POLISI PAMONG PRAJA PROVINSI JAWA TIMUR
        </p><br><br>
        <h3 style="margin-bottom: -0.1px; padding-top: 3pt;padding-left: 225pt;text-indent: 0pt;text-align: center;">
            M. HADI WAWAN GUNTORO, S.STP., M.Si., CIPA
        </h3>
        <p style="padding-left: 250pt;text-indent: 0pt;text-align: center;">
            Pembina Utama Muda
        </p>
        <p style="padding-left: 250pt;text-indent: 0pt;text-align: center;">
            NIP. 19770323 199511 1 001
        </p>
        <p style="text-indent: 0pt;text-align: left;">
            <br/>
        </p>
        <p style="padding-top:0pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
            <span>
                <img alt="image" height="55" src="{{asset('media/bg/image_003.jpg')}}" width="700"/>
            </span>
        </p> --}}
    </div>
    @if(count($keg->personel) > 3)
    <div class="pagebreak"></div>
    <div class="page" style="position:relative;">

        <p class="s9" style="padding-top: 3pt;padding-left: 297pt;text-indent: -56pt;text-align: justify;">
            Lampiran : Surat Perintah Tugas Kepala Satuan Polisi Pamong  Praja  Provinsi  Jawa  Timur Tanggal &nbsp;&nbsp;: {{$keg->tgl_indo(date('Y-m-d', strtotime($keg->created_at)))}}
        </p>
        <p class="s9" style="padding-left: 297pt;text-indent: 0pt;text-align: justify; ">
            Nomor     :  {{$keg->spt}}
        </p>
        <div style="
    float: right;
    border-top: 2px solid black;
    width: 285px;
    align-items: right;
"></div>
        <h4 style="padding-top: 9pt;padding-left: 0pt;text-indent: 0pt;text-align: center;">
            Daftar Nama {{$bentuk_kegiatan->format_spt}} {{$keg->judul_kegiatan}}
        </h4>
        <p style="text-indent: 0pt;text-align: left;">
            <br/>
        </p>
        <table cellspacing="0" style="border-collapse:collapse;margin-left:21.675pt">
            <tr style="height:26pt">
                <td bgcolor="#BDBDBD" style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s8" style="padding-top: 6pt;text-indent: 0pt;text-align: center;">
                        NO.
                    </p>
                </td>
                <td bgcolor="#BDBDBD" style="width:120pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s8" style="padding-top: 6pt;text-indent: 0pt;text-align: center;">
                        NAMA
                    </p>
                </td>
                <td bgcolor="#BDBDBD" style="width:135pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s8" style="padding-top: 6pt;padding-left: 5pt;padding-right: 4pt;text-indent: 0pt;text-align: center;">
                        NIP/PTT-PK
                    </p>
                </td>
                <td bgcolor="#BDBDBD" style="width:85pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s8" style="padding-left: 2pt;padding-right: 2pt;text-indent: 0pt;line-height: 13pt;text-align: center;">
                        GOL
                    </p>
                    <p class="s8" style="padding-left: 2pt;padding-right: 2pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                        /PANGKAT
                    </p>
                </td>
                <td bgcolor="#BDBDBD" style="width:85pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s8" style="padding-top: 6pt;padding-left: 2pt;padding-right: 2pt;text-indent: 0pt;text-align: center;">
                        KET
                    </p>
                </td>
            </tr>
            <tr style="height:26pt">
                <td style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s9" style="padding-top: 6pt;padding-right: 8pt;text-indent: 0pt;text-align: right;">
                      1.
                    </p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s9" style="padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        {{$katim->nama}}
                    </p>
                </td>
                <td style="width:135pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s9" style="padding-top: 6pt;padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">
                        {{$katim->konversi_nip($katim->nip)}}
                    </p>
                </td>
                <td style="width:85pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s9" style="padding-top: 7pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">
                        {{$katim->pangkat}}
                    </p>
                </td>
                <td style="width:85pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s9" style="padding-top: 10pt;padding-left: 4pt;padding-right: 2pt;text-indent: 0pt;text-align: center;">
                        {{$katim->ket}}
                    </p>
                </td>
            </tr>
            @foreach($anggota as $p)
            <tr style="height:26pt">
                <td style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s9" style="padding-top: 6pt;padding-right: 8pt;text-indent: 0pt;text-align: right;">
                      {{$loop->iteration+1}}.
                    </p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s9" style="padding-left: 7pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        {{$p->nama}}
                    </p>
                </td>
                <td style="width:135pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s9" style="padding-top: 6pt;padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: center;">
                        {{$p->konversi_nip($p->nip)}}
                    </p>
                </td>
                <td style="width:85pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s9" style="padding-top: 7pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">
                        {{$p->pangkat}}
                    </p>
                </td>
                <td style="width:85pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s9" style="padding-top: 10pt;padding-left: 4pt;padding-right: 2pt;text-indent: 0pt;text-align: center;">
                        {{$p->ket}}
                    </p>
                </td>
            </tr>
            @endforeach
        </table>

        <img alt="image" height="55" src="{{asset('media/bg/Image_003.jpg')}}" width="700" style="position:absolute; bottom: -620px;" />
    </div>
    @endif

<script type="text/javascript">

    window.print();

</script>
</body>
</html>