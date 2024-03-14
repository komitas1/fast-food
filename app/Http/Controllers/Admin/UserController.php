<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * @param $id
     * @return View
     */
    public function edit($id): View
    {
        $user = User::query()->find($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * @param UpdateRequest $request
     * @param $id
     * @return Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function update(UpdateRequest $request, $id): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        User::query()->where('id', $id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,

            ]
        );
        return redirect('/admin/users');
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id): View
    {
        $user = User::query()->find($id);
        return view('admin.user.show', compact('user'));
    }

    /**
     * @param $id
     * @return Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function destroy($id): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        User::destroy($id);
        return redirect('/admin/users');
    }
}
