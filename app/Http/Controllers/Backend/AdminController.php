<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\Horoscope;
use App\Models\Backend\News;
use App\Models\Backend\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminController extends BackendController
{
    public function index()
    {

        return view($this->backendPath . 'index', $this->data);
    }

    public function add_user()
    {
        $this->data('title', $this->setTitle('add-user'));
        return view($this->backendPath . 'add_user', $this->data);
    }

    public function add_user_action(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|min:5|max:30',
                'username' => 'required|min:5|max:30',
                'email' => 'required|min:5|max:30',
                'password' => 'required|min:5|max:30',
                'image' => 'required'

            ]);
            $data['name'] = $request->name;
            $data['username'] = $request->username;
            $data['email'] = $request->email;
            $data['password'] = $request->password;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/user');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            if (User::create($data)) {
                Session::flash('success', 'User has been added');
                return redirect()->back();
            }

        }


    }

    public function add_horo()
    {
        $this->data('title', $this->setTitle('Add-Horoscope'));
        return view($this->backendPath . 'add_horo', $this->data);
    }

    public function save_horo(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'description' => 'required|min:5',
                'title' => 'required'

            ]);
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }

            if (Horoscope::create($data)) {
                Session::flash('success', 'Your Horoscope has been posted');
                return redirect()->back();
            }
        }
    }

    public function show_horo()
    {
        $horodata = Horoscope::orderby('id', 'desc')->paginate(6);
        $this->data('horodata', $horodata);
        $this->data('title', $this->setTitle('Show_horoscope'));
        return view($this->backendPath . 'show_horo', $this->data);
    }

    public function delete_horo_file($id)
    {
        $findData = Horoscope::findorfail($id);
        $fileName = $findData->Image;
        $deletePath = public_path('images/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function delete_horo(Request $request)
    {
        $id = $request->id;
        $data = Horoscope::findorfail($id);
        if ($this->delete_horo_file($id) && $data->delete()) {
            Session::flash('success', 'Horoscope has been deleted');
            return redirect()->back();
        }
    }

    public function edit_horo(Request $request)
    {
        if ($request->isMethod('get')) {
            $id = $request->id;
            $horo = Horoscope::findorfail($id);
            $this->data('horo', $horo);
            $this->data('title', $this->setTitle('Edit-Horo'));

            return view($this->backendPath . 'edit_horo', $this->data);
        }
    }


    public function edit_horo_action(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'description' => 'required|min:5',
                'title' => 'required'
            ]);
            $id = $request->id;
            $data['title'] = $request->title;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $data['description'] = $request->description;
            $update = Horoscope::findorfail($id);
            if ($this->delete_horo_file($id) && $update->update($data)) {
                Session::flash('success', 'Horoscope Updated');
                return redirect()->route('show-horo');

            }

        }
    }


    public function add_privilege()
    {
        $this->data('title', $this->setTitle('Add-Privilege'));
        return view($this->backendPath . 'add_privilege', $this->data);
    }

    public function add_news()
    {
        $this->data('title', $this->setTitle('News'));
        return view($this->backendPath . 'add_news', $this->data);
    }

    public function add_news_action(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'title' => 'required|min:5|max:25',
                'description' => 'required|min:10|max:200'
            ]);

            $data['title'] = $request->title;
            $data['description'] = $request->description;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/News');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }

            if (News::create($data)) {
                Session::flash('success', 'Your News has Been Added');
                return redirect()->back();

            }
        }
    }

    public function show_news(Request $request)
    {
        if ($request->isMethod('get')) {

            $news = News::orderby('id', 'desc')->get();
            $this->data('news', $news);
            $this->data('title', $this->setTitle('manage-news'));
            return view($this->backendPath . 'show_news', $this->data);
        }
    }

    public function add_slides()
    {
        $this->data('title', $this->setTitle('News & Updates'));
        return view($this->backendPath . 'add_slides', $this->data);
    }

}
