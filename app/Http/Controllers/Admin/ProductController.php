<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class ProductController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $products = Product::query()->with('categories')->orderBy('sort')->get();

        return view('admin.product.index', compact('products'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(CreateRequest $request): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $product = Product::query()->create([
            'name' => $request->name,
            'price' => $request->price,
            'sort' => $request->sort,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);
        $product->addMedia($request->image)->toMediaCollection(Product::IMAGE_COLLECTION_NAME);
        return redirect('/admin/products');

    }

    /**
     * @param $id
     * @return View
     */
    public function edit($id): View
    {
        $categories = Category::all();
        $product = Product::query()->where('id', $id)->with('categories')->first();
        $image = null;
        if ($product->getMedia('images')->first()) {
            $image = $product->getMedia('images')->first()->getUrl();
        }
        return view('admin.product.edit', compact('product', 'categories', 'image'));
    }

    /**
     * @param UpdateRequest $request
     * @param $id
     * @return Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function update(UpdateRequest $request, $id): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $product = Product::query()->find($id);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'sort' => $request->sort,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);
        $imageFile = $request->file('image');

        if ($imageFile) {
            $product = Product::query()->find($id);

            $product->getMedia(Product::IMAGE_COLLECTION_NAME)->each(function ($media) {
                $media->delete();
            });

            $product->addMedia($imageFile)->toMediaCollection(Product::IMAGE_COLLECTION_NAME);
        }
        return redirect('/admin/products');


    }

    /**
     * @param $id
     * @return View
     */
    public function show($id): View
    {
        $product = Product::query()->find($id);
        $image = null;
        if ($product->getMedia('images')->first()) {
            $image = $product->getMedia('images')->first()->getUrl();
        }
        return view('admin.product.show', compact('product', 'image'));
    }

    /**
     * @param $id
     * @return Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function destroy($id): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Product::destroy($id);
        return redirect('/admin/products');

    }

}
