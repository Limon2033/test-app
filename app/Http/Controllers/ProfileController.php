<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\FilterRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class ProfileController extends BaseController
{
    public function index(FilterRequest $request)
    {
        $data = $request->validated();
        $profiles = $this->service->index($data);
        return view('profile/index', compact('profiles', 'data'));
    }

    public function show(Profile $profile)
    {
        return view('profile/show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        $this->authorize('edit', $profile);
        return view('profile/edit', compact('profile'));
    }

    public function update(Profile $profile, UpdateRequest $request)
    {
        try {
            $this->authorize('update', $profile);

            DB::beginTransaction();
            $this->service->update($profile, $request);
            DB::commit();
            return redirect()->route('profile.show', $profile->id);

        } catch (\Exception $exception) {
            DB::rollBack();
            $request->session()->flash('error', $exception->getMessage());
            return redirect()->back();
        }
    }
}
