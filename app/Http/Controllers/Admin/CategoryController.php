<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Console\Application;
use Illuminate\Contracts\View\View;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class CategoryController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.category.create');
    }

    /**
     * @param CreateRequest $request
     * @return Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function store(CreateRequest $request): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Category::query()->create(
            [
                'name' => $request->name
            ]
        );
        return redirect('/admin/categories');
    }

    /**
     * @param UpdateRequest $request
     * @param $id
     * @return Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function update(UpdateRequest $request, $id): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Category::query()->where('id', $id)->update(
            ['name' => $request->name],
        );
        return redirect('/admin/categories');
    }

    /**
     * @param $id
     * @return View
     */
    public function edit($id): View
    {
        $category = Category::query()->find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * @param $id
     * @return Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function destroy($id): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Category::destroy($id);
        return redirect('/admin/categories');

    }
}
