<?php

namespace App\Services;

use App\Http\Filters\ProfileFilter;
use App\Http\Requests\Profile\FilterRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Models\Profile;

class ProfileService
{
    public function index(array $data)
    {
        $filter = app()->make(ProfileFilter::class, ['queryParams' => array_filter($data)]);
        return Profile::filter($filter)->paginate(10);
    }

    public function update(Profile $profile, UpdateRequest $request): void
    {
        $data = $request->validated();
        $profile->update($data);
        $request->session()->flash('success', __('Анкета успешно отредактирована'));
    }
}
