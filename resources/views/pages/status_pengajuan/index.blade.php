@extends('layouts.app')

@section('title', 'Status Pengajuan')

@section('content')

    <x-page-index
        title="Status Pengajuan"
        :dataTable="$dataTable"
        buttonLabel="Tambah Status"
        routeCreate="status.create"
    />

@endsection
