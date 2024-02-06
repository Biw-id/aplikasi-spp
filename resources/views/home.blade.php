@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <p>This is your application dashboard.</p>
                    @canany(['create-role', 'edit-role', 'delete-role'])
                        <a class="btn btn-primary" href="{{ route('roles.index') }}">
                            <i class="bi bi-person-fill-gear"></i> Atur Roles</a>
                    @endcanany
                    @canany(['create-user', 'edit-user', 'delete-user'])
                        <a class="btn btn-success" href="{{ route('users.index') }}">
                            <i class="bi bi-people"></i> Atur Users</a>
                    @endcanany
                    @canany(['create-product', 'edit-product', 'delete-product'])
                        <a class="btn btn-warning" href="{{ route('products.index') }}">
                            <i class="bi bi-bag"></i> Atur Products</a>
                    @endcanany
                    @canany(['create-bantuan', 'edit-bantuan', 'delete-bantuan'])
                        <a class="btn btn-warning" href="{{ route('bantuans.index') }}">
                            <i class="bi bi-chat"></i> Atur Bantuan</a>
                    @endcanany
                    <a class="btn btn-warning" href="{{ route('kategoris.index') }}">
                        <i class="bi bi-chat"></i> Atur kategori</a>
                    <a class="btn btn-warning" href="{{ route('userinfos.index') }}">
                        <i class="bi bi-chat"></i> Atur info user</a>
                    <a class="btn btn-warning" href="{{ route('orderdetails.index') }}">
                        <i class="bi bi-chat"></i> Atur order detail</a>
                    <a class="btn btn-warning" href="{{ route('paymentdetails.index') }}">
                        <i class="bi bi-chat"></i> Atur payment detail</a>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
