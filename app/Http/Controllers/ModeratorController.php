<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ModeratorController extends Controller
{
    public function moderEdit()
    {
        $posts = $this->getFromDb();
        return view('moderator.edit', [
            'posts' => $posts,
        ]);
    }

    public function getFromDb()
    {
        $messages = Post::get();
        return $messages;
    }

    public function del($id)
    {
        Post::del($id);
        return redirect('moderator');
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $name = trim(htmlspecialchars($request->input('userName')));
            $message = trim(htmlspecialchars($request->input('message')));
            $this->update($id, $name, $message);
            return redirect('moderator');
        }
        $posts = Post::getOne($id);
        return view('moderator.editMessage', [
            'posts' => $posts,
        ]);
    }

    public function update($id, $name, $message)
    {
        Post::update($id, $name, $message);
    }
}