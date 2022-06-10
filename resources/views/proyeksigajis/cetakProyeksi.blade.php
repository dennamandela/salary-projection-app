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
        <title>CETAK DATA PROYEKSI GAJI</title>
</head>

<body>
    <div class="form-group">
        <p align="center" style="font-size: 24px;"><b>Laporan Proyeksi Gaji
            <br>
            {{$cetakProyeksi->namaunit}}
            <br>
            Tahun {{$cetakProyeksi->tahun}}</b></p>
        <table class="static" align="center" style="width: 50%; font-size: 18px;">
                        <thead>
                        <tr>
                            <td align="left">Gaji Pokok</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->gapok)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Keluarga</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->tkel)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Jabatan</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->tjab)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Fungsional</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->tfung)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Umum</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->tumum)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Beras</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->tberas)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tunj. Pph</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->tpph)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Pembulatan</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->pembulatan)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">BPJS</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->bpjs)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">JKK</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->jkk)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">JKM</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->jkm)</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td align="left">Tapera</td>
                            <td align="center"> : </td>
                            <td align="right">@money($cetakProyeksi->tapera)</td>
                        </tr>
                        </thead>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>