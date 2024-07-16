<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::paginate(5);
        return view('admin.admin-bookauthors', compact('authors'));
    }

    public function create(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|required',
            'phone' => 'required',
            'profile_pic' => 'required|mimes:jpg,jpeg,png|max:1024'
        ]);

        if($request->hasFile('profile_pic')) {
            $path = 'images/authors/';
            $file = $request->file('profile_pic');
            $fileName = $file->getClientOriginalName();
            $new_file_name = time().'_'.$fileName;

            $upload = $file->move(public_path($path), $new_file_name);
            // $upload = Storage::disk('public')->put($path.$new_file_name, (string) file_get_contents($file));
        }

        if($upload) {
            $author = new Author();
            $author->first_name = $request->first_name;
            $author->last_name = $request->last_name;
            $author->email = $request->email;
            $author->phone = $request->phone;
            $author->profile_pic = $path.$new_file_name;
            $saved = $author->save();

            if($saved) {
                return redirect()->route('admin.dashboard');
            } else {
                return response()->json(["Error occured"]);
            }
        }
    }

    public function update(Request $request, $id) {
        // dd($request, $id);
        $author = Author::find($id);
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        if($request->hasFile('profile_pic')) {
            $path = '/images/authors/';
            $file = $request->file('profile_pic');
            $old_picture = $author->getAttributes()['profile_pic'];
            $new_file_name = $file->getClientOriginalName();
            $new_pic_name = time().$new_file_name;
            if ($old_picture != null && File::exists(public_path($old_picture))) {
                File::delete(public_path($old_picture));
            }
            $upload = $file->move(public_path($path), $new_pic_name);
            if($upload) {
                $author->first_name = $request->first_name;
                $author->last_name = $request->last_name;
                $author->email = $request->email;
                $author->phone = $request->phone;
                $author->profile_pic = $path.$new_pic_name;
                $updated = $author->update();
            }
        } else {
            $author->first_name = $request->first_name;
            $author->last_name = $request->last_name;
            $author->email = $request->email;
            $author->phone = $request->phone;
            $updated = $author->update();
        }

        if ($updated) {
            return redirect()->route('admin.authors');
        } else {
            return response()->json(["Error occured"]);
        }
    }
}
