<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Technical Test | Adi Setiawan</title>
    <style>
       @media screen {
                    body {
                    margin-top: 2em;
                    margin-right: 2em;
                    margin-left: 4em;
                    margin-bottom: 2em;
                    background-color: #fff;
                    }

                    table{
                        width: 100%;
                        height: auto;
                    }

                    table tbody tr td{
                        font-size: 10px;
                    }

                    table tbody tr td.text-center{
                        font-size: 10px;
                        text-align: center;
                    }

                    table, th, td{
                    border-collapse:collapse;
                    border: 1px solid black;
                    }

                    table thead tr.tb-header{
                        background-color: #052e55;
                        color: #ffffff;
                        height: 60px;
                        text-align: center;
                    }

                    table.tabel-jadwal thead tr.tb-header th{
                        padding: 20px 0px;
                        font-family: Arial, Helvetica, sans-serif;
                        font-weight: bolder;
                        font-size: 16px;
                    }

                    table.tabel-jadwal thead tr.master-th{
                        background-color: #0B5394;
                        color: #ffffff;
                        font-size: 14px;
                        font-weight: bold;
                        font-family: Arial, Helvetica, sans-serif;
                    }

                    table.tabel-jadwal thead tr.master-th th{
                        font-size: 14px;
                    }

                    table.tabel-jadwal tbody tr.th-poli{
                        background-color: #C9DAF8;
                    }

                }

        /* print styles */
        @media print {
                 body {
                    margin-top: 2em;
                    margin-right: 2em;
                    margin-left: 4em;
                    margin-bottom: 2em;
                    background-color: #fff;
                    }

                    /* table{
                        width: 100%;
                        height: auto;
                    } */

                    table tbody td{
                        font-size: 12px;
                    }

                    table, th, td{
                    border-collapse:collapse;
                    border: 1px solid black;
                    }

                    table thead tr.tb-header{
                        background-color: #052e55;
                        color: #ffffff;
                        height: 60px;
                        text-align: center;
                    }

                    table.tabel-jadwal thead tr.tb-header th{
                        padding: 20px 0px;
                        font-family: Arial, Helvetica, sans-serif;
                        font-weight: bolder;
                        font-size: 16px;
                    }

                    table.tabel-jadwal thead tr.master-th{
                        background-color: #0B5394;
                        color: #ffffff;
                        font-size: larger;
                        font-weight: bold;
                        font-family: Arial, Helvetica, sans-serif;
                    }

                    table.tabel-jadwal thead tr.master-th th{
                        font-size: 14px;
                    }

                    table.tabel-jadwal tbody tr.th-poli{
                        background-color: #C9DAF8;
                    }

        }

    </style>
  </head>
  <body>
<div class="container">
        <table class="tabel-jadwal">
             {{-- <caption><h2>JADWAL DOKTER RS TRUSTMEDIKA SURABAYA</h2></caption> --}}
             <thead>
                <tr class="tb-header">
                 <th colspan="9">DATA JADWAL DOKTER RS TRUSTMEDIKA SURABAYA</th>
                </tr> 
                <tr class="master-th">
                    <th scope="col">No</th>
                    <th scope="col">Klinik</th>
                    <th scope="col">Senin</th>
                    <th scope="col">Selasa</th>
                    <th scope="col">Rabu</th>
                    <th scope="col">Kamis</th>
                    <th scope="col">Jumat</th>
                    <th scope="col">Sabtu</th>
                    <th scope="col">Minggu</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal as $item)
                <tr class="th-poli">
                    <th style="font-size: 12px;" class="text-center" scope="row">{{ $loop->iteration }}</th>
                    <td scope="row" colspan="8">{{ $item->master_unit->unit_nama }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td scope="row">{{ $item->master_dokter->pegawai_nama }}</td>
                    <td class="text-center" scope="row">{{ $item->senin }}</td>
                    <td class="text-center" scope="row">{{ $item->selasa }}</td>
                    <td class="text-center" scope="row">{{ $item->rabu }}</td>
                    <td class="text-center" scope="row">{{ $item->kamis }}</td>
                    <td class="text-center" scope="row">{{ $item->jumat }}</td>
                    <td class="text-center" scope="row">{{ $item->sabtu }}</td>
                    <td class="text-center" scope="row">{{ $item->minggu }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </body>
</html>
