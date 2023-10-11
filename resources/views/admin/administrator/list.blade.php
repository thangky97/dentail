@extends('templates.admin.masterAdmin')

@section('title', 'Danh sách người dùng')

@section('css')
@endsection

@section('content')
{{-- Nhảy sang live controller --}}
    {{-- @livewire('admin.administrator.list-admin')   --}}
    @livewire('admin.administrator.list-administrator')
@endsection