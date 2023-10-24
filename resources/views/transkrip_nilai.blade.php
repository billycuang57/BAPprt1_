<?php
use App\Models\transkripakademik;

?>
@extends('layouts.app2')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        th {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
        td {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
    </style>
@section('title','TranskripAkademik')
@section('content')
    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">Transkrip Akademik</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Kode_MataKuliah</th>
                <th>Kode_Term</th>
                <th>Nilai</th>
                <th>SKS</th>
                <th>GPA</th>
            </tr>
            <?php
                $transkripakademiks = transkripakademik::all();
            ?>

            <tr>
            @foreach ($transkripakademiks as $transkripakademik) 
                <tr>
                    <td>
                        {{ $transkripakademik->id }}
                    </td>
                    <td>
                        {{ $transkripakademik->studentID}}
                    </td>
                    <td>
                        {{ $transkripakademik->Kode_matakuliah}}
                    </td>
                    <td>
                        {{ $transkripakademik->Kode_term}}
                    </td>
                    <td>
                        {{ $transkripakademik->nilai}}
                    </td>
                    <td>
                        {{ $transkripakademik->sks}}
                    </td>
                    <td>
                        {{ $transkripakademik->gpa}}
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection
                        
