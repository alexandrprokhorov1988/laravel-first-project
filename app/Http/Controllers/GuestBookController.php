<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    public function showAll(Request $request)
    {
        if (!empty($request->userName) && !empty($request->message)) {
            $request->flash();
            $name = trim(htmlspecialchars($request->input('userName')));
            $message = trim(htmlspecialchars($request->input('message')));
            $this->add($name, $message);
            return redirect('all');
        }
        $posts = $this->getFromDb();
        $count = $this->countMessages();
        return view('guestBook.showAll', [
            'session' => $request->old('message'),
            'posts' => $posts,
            'count' => $count,
        ]);
    }

    public function add($name, $message)
    {
        Post::add($name, $message);
        return redirect('all');
    }

    public function getFromDb()
    {
        $messages = Post::get();
        return $messages;
    }

    public function countMessages()
    {
        $count = Post::count();
        return $this->convertArrayToString($count);
    }

    public function convertArrayToString($arr)
    {
        $convertToArray = json_encode($arr[0]);
        $a = json_decode($convertToArray, true)['count'];
        return $a;
    }
}