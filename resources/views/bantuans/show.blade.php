@extends('layouts.app')

@section('content')

	{{ $bantuan->id }}<br/>
    {{ $bantuan->nama}}<br/>
    {{ $bantuan->email}}<br/>
    {{ $bantuan->nohp}}<br/>
    {{ $bantuan->pesan}}

@stop
