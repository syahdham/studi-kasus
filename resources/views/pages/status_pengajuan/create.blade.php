@extends('layouts.app')

@section('title', 'Status Pengajuan')

@section('content')

    <x-page-form title="Status Pengajuan">
        <form id="form_id" action="{{ route('status.store') }}" method="POST">
            @csrf
            <x-form-input label="Nama" type="text" required="required" name="nama"/>
        </form>
    </x-page-form>

@endsection
