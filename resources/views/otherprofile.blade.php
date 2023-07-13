@extends('profiletemplate')

@section('bar', 'Other Profile')

@section('toptitle', 'Other Profile')

@section('name')
    {{ $userdata['username'] }}
@endsection
