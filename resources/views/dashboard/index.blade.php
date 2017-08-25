@extends('layouts.dashboard')

@section('body.class', 'site-menubar-fold site-menubar-keep')

@section('content')
    <passport-clients></passport-clients>
    <passport-authorized-clients></passport-authorized-clients>
    <passport-personal-access-tokens></passport-personal-access-tokens>
@stop