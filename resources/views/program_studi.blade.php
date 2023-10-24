<?php
use App\Models\programstudi;

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
@section('title','ProgramStudi')
@section('content')
    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">Program Studi</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
            </tr>
            <?php
                $programstudis = programstudi::all();
            ?>

            <tr>
            @foreach ($programstudis as $programstudi) 
                <tr>
                    <td>
                        {{ $programstudi->id }}
                    </td>
                    <td>
                        {{ $programstudi->nama}}
                    </td>
                    <td>
                        {{ $programstudi->deskripsi}}
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection
                        
