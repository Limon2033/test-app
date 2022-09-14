@extends('layouts.app')

<?php
use \Illuminate\Support\Facades\Session;
?>

@section('content')
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-3" >
                <h2 class="mb-3">{{ __('Анкета ИТ-специалиста') }}</h2>
                <h4><strong>{{ __('Имя') }}:</strong> {{ $profile->first_name }}</h4>
                <h4><strong>{{ __('Фамилия') }}:</strong> {{ $profile->surname }}</h4>
                <h4><strong>{{ __('Отчество') }}:</strong> {{ $profile->patronymic }}</h4>
                <h4><strong>{{ __('Дата рождения') }}:</strong> {{ $profile->birth_date }}</h4>
                <h4><strong>{{ __('Возраст') }}:</strong> {{ $profile->age }}</h4>
                <h4><strong>{{ __('Город') }}:</strong> {{ $profile->city }}</h4>
                <h4><strong>{{ __('Образование') }}:</strong> {{ $profile->education }}</h4>
                <h4><strong>{{ __('Специализация') }}:</strong> {{ $profile->specialization }}</h4>
                <h4><strong>{{ __('Профессиональные навыки') }}:</strong></h4>
                <h5>
                    @foreach(explode("\n", $profile->skills) as $skill)
                        {{ $skill }}<br>
                    @endforeach
                </h5>
                <h4><strong>{{ __('Номер телефона') }}:</strong> {{ $profile->phone }}</h4>
                <h4><strong>{{ __('Адрес') }}:</strong> {{ $profile->address }}</h4>
                <a href="{{ route('profile.index') }}" class="btn btn-default border mt-4">{{ __('К списку анкет') }}</a>
                @can('edit', $profile)
                    <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-primary mt-4">{{ __('Редактировать') }}</a>
                @endcan
                @if (Session::has('success'))
                    <div class="alert alert-success mt-4">{{ Session::get('success') }}</div>
                @endif
            </div>
        </div>
    </div>
@endsection
