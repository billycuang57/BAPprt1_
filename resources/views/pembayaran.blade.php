<?php
use App\Models\pembayaran;

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
@section('title','Pembayaran')
@section('content')
    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">Pembayaran</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>Student_ID</th>
                <th>Amount</th>
                <th>Payment_date</th>
                <th>Payment_method</th>
            </tr>
            <?php
                $pembayarans = pembayaran::all();
            ?>

            <tr>
            @foreach ($pembayarans as $pembayaran) 
                <tr>
                    <td>
                        {{ $pembayaran->id }}
                    </td>
                    <td>
                        {{ $pembayaran->Student_id}}
                    </td>
                    <td>
                        {{ $pembayaran->Amount}}
                    </td>
                    <td>
                        {{ $pembayaran->Payment_date}}
                    </td>
                    <td>
                        {{ $pembayaran->Payment_method}}
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection
                        
