@extends('profiletemplate')

@section('bar', 'Other Profile')

@section('toptitle', 'Other `rofile')

@section('name')
    Hi, {{ $userdata['username'] }}
@endsection
