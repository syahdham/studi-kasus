@extends('layouts.app')

@section('title', 'Edit Status Pengajuan')

@section('content')

<x-page-form title="Edit Status Pengajuan">
    <form id="form_id" action="{{ route('status.update', $status) }}" method="POST">
        @csrf
        @method('PUT')
        <x-form-input label="Nama" type="text" required="required" name="nama" value="{{ $status->nama }}"/>
    </form>
</x-page-form>

@endsection
