<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Post
{
    static public function get()
    {
//        $messages = DB::select('SELECT * FROM `guestbook` limit 3');
        $messages = DB::table('guestbook')->paginate(3);
        return $messages;
    }

    static public function del($id)
    {
        DB::delete("delete from `guestbook` where id=$id ");
    }

    static public function getOne($id)
    {
        $messages = DB::select("SELECT * FROM `guestbook` where id=$id");
        return $messages;
    }

    static public function update($id, $name, $message)
    {
        date_default_timezone_set('Europe/Moscow');
        DB::update("UPDATE `guestbook` SET `name`='$name', `date`= NOW(), `message`='$message' WHERE id=$id");
    }

    static public function add($name, $message)
    {
        date_default_timezone_set('Europe/Moscow');
        DB::insert('insert into `guestbook` (name, date, message) values (?, ?, ?)', [$name, NOW(), $message]);
    }

    static public function count()
    {
        $count = DB::select('SELECT COUNT(message) as count FROM `guestbook`');
        return $count;
    }
}
