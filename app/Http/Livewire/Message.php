<?php

namespace App\Http\Livewire;

use App\Enums\UserType;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Message extends Component
{
    public $message;
    public $selectedUser;

    public function sendMessage()
    {
        $message = $this->validate(['message' => 'required']);
        $admin = User::where('type', '=', UserType::ADMIN())->first();
        try {
            \App\Models\Message::create([
                'text' => $this->message,
                'from_id' => auth()->user()->id,
                'to_id' => $admin->id
            ]);
            $this->reset(['message']);
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong');
            return redirect()->back();
        }
    }

    public function render()
    {
        $this->selectedUser = User::where('type', '=', UserType::ADMIN())->first();
        $selectUser = $this->selectedUser;
        $messages = \App\Models\Message::where(static function (Builder $query) use ($selectUser) {
            $query->where('from_id', '=', auth()->user()->id);
            $query->where('to_id', '=', $selectUser->id); 
        })->orWhere(function (Builder $query) use ($selectUser) {
            $query->where('from_id', '=', $selectUser->id);
            $query->where('to_id', '=', auth()->user()->id);
        })->with('user')->get();
        return view('livewire.message', compact('selectUser', 'messages'));
    }
}
