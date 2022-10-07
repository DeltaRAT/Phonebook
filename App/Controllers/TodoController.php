<?php
namespace App\Controllers;

class TodoController {

    public function list(){
        #db
        $data = [
            'tasks' => ['First Task', 'Second Task', 'Third Task', 'Fourth Task', '...'],
            'title' => 'لیست تسک ها'
        ];
        view('todo.list',$data);
    }
    public function add(){

    }
    public function remove(){

    }
}
