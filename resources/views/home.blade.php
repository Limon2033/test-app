@extends('layouts.app')

@section('content')
<div class="container-md">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="mb-3">{{ __('Анкеты ИТ-специалистов') }}</h2>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">{{ __('ФИО') }}</th>
                            <th scope="col">{{ __('Город') }}</th>
                            <th scope="col">{{ __('Специализация') }}</th>
                            <th scope="col">{{ __('Телефон') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($profiles as $profile)
                            <tr>
                                <td><a href="{{ route('profile') }}" target="_blank">{{ $profile->fio() }}</a></td>
                                <td>{{ $profile->city }}</td>
                                <td>{{ $profile->specialization }}</td>
                                <td>{{ $profile->phone }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
