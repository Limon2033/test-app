@extends('layouts.app')

<?php
use \Illuminate\Support\Facades\Session;
?>

@section('content')
    <div class="container-md">
        <form action="{{ route('profile.update', $profile->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="row justify-content-center">
                @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                <h2 class="mb-3 text-center">{{ __('Редактирование анкеты') }}</h2>
                <div class="row mb-3">
                    <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

                    <div class="col-md-6">
                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $profile->first_name  }}" required autocomplete="given_name">

                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Фамилия') }}</label>

                    <div class="col-md-6">
                        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ $profile->surname }}" required autocomplete="additional_name">

                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="patronymic" class="col-md-4 col-form-label text-md-end">{{ __('Отчество') }}</label>

                    <div class="col-md-6">
                        <input id="patronymic" type="text" class="form-control @error('patronymic') is-invalid @enderror" name="patronymic" value="{{ $profile->patronymic }}" required autocomplete="family_name">

                        @error('patronymic')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="birth_date" class="col-md-4 col-form-label text-md-end">{{ __('Дата рождения') }}</label>

                    <div class="col-md-6">
                        <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ $profile->birthDateForInput() }}" required>

                        @error('birth_date')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Возраст') }}</label>

                    <div class="col-md-6">
                        <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $profile->age }}" required>

                        @error('age')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('Город') }}</label>

                    <div class="col-md-6">
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $profile->city }}" required>

                        @error('city')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="education" class="col-md-4 col-form-label text-md-end">{{ __('Образование') }}</label>

                    <div class="col-md-6">
                        <input id="education" type="text" class="form-control @error('education') is-invalid @enderror" name="education" value="{{ $profile->education }}" required>

                        @error('education')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="specialization" class="col-md-4 col-form-label text-md-end">{{ __('Специализация') }}</label>

                    <div class="col-md-6">
                        <input id="specialization" type="text" class="form-control @error('specialization') is-invalid @enderror" name="specialization" value="{{ $profile->specialization }}" required>

                        @error('specialization')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="skills" class="col-md-4 col-form-label text-md-end">{{ __('Профессиональные навыки') }}</label>

                    <div class="col-md-6">
                        <textarea name="skills" id="skills" cols="30" rows="5" class="form-control @error('skills') is-invalid @enderror" required>{{ $profile->skills }}</textarea>

                        @error('skills')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Номер телефона') }}</label>

                    <div class="col-md-6">
                        <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $profile->phone }}" required>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Адрес') }}</label>

                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $profile->address }}" required>

                        @error('address')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a href="{{ route('profile.show', $profile->id) }}" class="btn btn-default border">{{ __('Назад') }}</a>
                        <button type="submit" class="btn btn-primary">{{ __('Сохранить') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
