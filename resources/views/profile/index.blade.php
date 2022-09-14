@extends('layouts.app')

@section('content')
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="mb-3">{{ __('Анкеты ИТ-специалистов') }}</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="GET" action="{{ route('profile.index') }}">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="first_name"
                                           class="col-form-label"><strong>{{ __('Имя') }}</strong></label>
                                    <input id="first_name" type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name" value="{{ $data['first_name'] ?? '' }}"
                                           placeholder="{{ __('Имя') }}">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="surname"
                                           class="col-form-label"><strong>{{ __('Фамилия') }}</strong></label>
                                    <input id="surname" type="text"
                                           class="form-control @error('surname') is-invalid @enderror" name="surname"
                                           value="{{ $data['surname'] ?? '' }}" placeholder="{{ __('Фамилия') }}">
                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="city" class="col-form-label"><strong>{{ __('Город') }}</strong></label>
                                    <input id="city" type="text"
                                           class="form-control @error('city') is-invalid @enderror" name="city"
                                           value="{{ $data['city'] ?? '' }}" placeholder="{{ __('Город') }}">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="specialization"
                                           class="col-form-label"><strong>{{ __('Специализация') }}</strong></label>
                                    <input id="specialization" type="text"
                                           class="form-control @error('specialization') is-invalid @enderror"
                                           name="specialization" value="{{ $data['specialization'] ?? '' }}"
                                           placeholder="{{ __('Специализация') }}">
                                    @error('specialization')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-1 mt-3">
                                    <button type="submit" class="btn btn-primary">{{ __('Поиск') }}</button>
                                </div>
                                <div class="col-md-1 mt-3">
                                    <a href="{{ route('profile.index') }}"
                                       class="btn btn-default border">{{ __('Очистить') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                    <td><a href="{{ route('profile.show', $profile->id) }}">{{ $profile->fio() }}</a></td>
                                    <td>{{ $profile->city }}</td>
                                    <td>{{ $profile->specialization }}</td>
                                    <td>{{ $profile->phone }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $profiles->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
