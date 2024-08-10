<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return $categories = Category::take(5)->orderBy('id','desc')->get();
        $categories = Category::paginate(10);
        return view('admin.category.manage', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:categories',
            'status' => 'required|string',
        ]);
        Category::create([
            'user_id' => auth()->id(),
            'name' => $request->input('name'),
            'slug' => strtolower(str_replace(' ', '-', $request->input('name'))),
            'status' => $request->input('status'),
        ]);
        session()->flash('success', 'Category insert successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return view('admin.category.view', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        if ($category) return view('admin.category.edit', compact('category'));
        else return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|unique:categories,id,' . $id,
            'status' => 'required|string',
        ]);
        try{
            $category = Category::find($id);
            $category->user_id = auth()->id();
            $category->name = $request->name;
            $category->slug = strtolower(str_replace(' ', '-', $request->name));
            $category->status = $request->status;
            $category->update();
            session()->flash('type', 'success');
            session()->flash('success', 'Category update successfully.');
            return redirect()->back();
        }catch(Exception $exception){
            session()->flash('type', 'danger');
            session()->flash('success', 'Category Update Field!');
            return redirect()->back();
        }

        session()->flash('success', 'Category update successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = Category::find($id);
        $cat->delete();
        session()->flash('type', 'success');
        session()->flash('message', 'Category Delete Successfully.');
        return redirect()->back();
    }
}
