<?php

namespace App\Http\Controllers;

use App\Helpers\Upload;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 8 : 0;
        $categories = Category::latest()->paginate(8);
        return view('backend.layouts.Category.index', compact('categories','sl'));
    }


    public function create()
    {
        return view('backend.layouts.Category.create');
    }


    public function view($id)
    {
        $category = Category::find($id);
        return view('backend.layouts.Category.view', compact('category'));
    }


    public function store(StoreCategoryRequest $request)
    {

        // try {
        //     $data= $request->all();
        //     if($request->image){
        //         $imageName = '';
        //         // upload image
        //         $imageName = Upload::uploadImage($request->image, 'images/categories');
        //         $data["image"]=$imageName;
        //     }
        //     Category::create($data);
        //     toastr()->success('Category has been created successfully!', 'Congrats');
        //     return redirect()->route('category_details_index');
        // } catch (Exception $e) {
        //     toastr()->error('Something went wrong!', 'Alert');
        // }
        try{
            $data = $request->all();
            Category::create($data);
            toastr()->success('Category has been created successfully!', 'Congrats');
             return redirect()->route('category_details_index');
        }catch(Exception $e){
            toastr()->error('Something went wrong!', 'Alert');
        }
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.layouts.Category.edit', compact('category'));
    }


    public function update(UpdateCategoryRequest $request, $id)
    {
        // try {
        //     $category = Category::findOrFail($id);
        //     $imageName = '';
        //     $deleteOldImage = 'images/categories/' . $category->image;

        //     if ($image = $request->file('image')) {
        //         if (file_exists($deleteOldImage)) {
        //             File::delete($deleteOldImage);
        //         } else {
        //             $imageName = $category->image;
        //         }
        //         //update image
        //         $imageName = Upload::uploadImage($request->image, 'images/categories');
        //     }

        //     $category->update([
        //         'name' => $request->name,
        //         'description' => $request->description,
        //         'image' => $imageName,


        //     ]);
        //     toastr()->success('Category has been updated successfully!', 'Congrats');
        //     return redirect()->route('category_details_index');
        // } catch (Exception $e) {
        //     toastr()->error('Something went wrong!', 'Alert');
        // }
        try{

            $data = $request->except('_token');
            Category::where('id', $id)->update($data);
            toastr()->success('Category has been updated successfully!', 'Congrats');
            return redirect()->route('category_details_index');

        }catch(Exception $e){
            toastr()->error('Something went wrong!', 'Alert');
        }
    }


    public function delete($id)
    {
        $category =Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
