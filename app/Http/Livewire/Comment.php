<?php

namespace App\Http\Livewire;

use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comment extends Component
{
    public $record,$comment,$content_id,$rate;
    public function mount($id){
        $this->record=Content::findOrFail($id);
        $this->content_id=$this->record->id;
    }
    public function render()
    {
        return view('livewire.comment');
    }
    public function store()
    {
        $this->validate([
            'rate'=>'required',
            'comment'=>'required|min:10',
        ]);
        \App\Models\Comment::create([
            'content_id'=>$this->content_id,
            'user_id'=>Auth::id(),
            'IP'=>$_SERVER['REMOTE_ADDR'],
            'rate'=>$this->rate,
            'comment'=>$this->comment,
        ]);
        session()->flash('message','Require Send Succesfully');
        $this->resetInput();
    }


}
