@extends('profiletemplate')

@section('bar', 'Other Profile')

@section('toptitle', 'Other Profile')

@section('name')
    Hi, {{ $userdata['username'] }}
@endsection
