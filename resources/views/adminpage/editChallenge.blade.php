{{--    Page ini harusnya sama kayak add plan.
        Bedanya, ini edit plan yg udah ada. Data dari plan yg dipilih
        Kalau add semua masih null dan perlu input.
        Tapi, kalau ga kepake dihapus aja.
--}}

@extends('master')

@section('title', 'Edit Challenge - Admin Page')

@section('body')
    <div>
        {{-- Page Body Section --}}
    </div>
@include('adminpage.adminNavbar', ['active' => 'adminpage.listChallenges'])
@endsection
