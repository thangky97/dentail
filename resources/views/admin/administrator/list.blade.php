@extends('templates.admin.masterAdmin')

@section('title', 'Danh sách quản trị viên')

@section('css')
@endsection

@section('content')
    @livewire('admin.administrator.administrator-list')
@endsection