<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            table.static{
                position: relative;
                /* left: 3% */
                border: 1px solid;
            }
        </style>
        <title>CETAK DATA PROYEKSI GAJI PAK</title>
</head>

<body>
    <div class="form-group">
        <p align="center" style="font-size: 24px;"><b>Laporan Proyeksi Gaji Pak
            <br>
            {{$cetakProyeksiPak->namaunit}}
            <br>
            Tahun {{$cetakProyeksiPak->tahun}}</b></p>
        <table class="static" align="center" style="width: 50%; font-size: 18px;">
                        <thead>
                        <tr>
                            <td align="left">Gaji Pokok</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->gapok)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Keluarga</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->tkel)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Jabatan</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->tjab)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Fungsional</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->tfung)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Umum</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->tumum)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Beras</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->tberas)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Pph</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->tpph)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Pembulatan</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->pembulatan)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">BPJS</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->bpjs)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">JKK</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->jkk)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">JKM</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->jkm)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tapera</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksiPak->tapera)</td>
                        </tr>
                        </thead>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>