<?php

namespace App\Http\Livewire;

use App\Enums\UserType;
use App\Models\User;
use Livewire\Component;

class Message extends Component
{
    public $message;

    public function mount()
    {

    }


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
        $admin = User::where('type', '=', UserType::ADMIN())->first();

        $ownMessages = \App\Models\Message::where('from_id', auth()->user()->id)
            ->where('to_id', '=', $admin->id)
            ->with('user')->get();
        $fromAdminMessages = \App\Models\Message::where('to_id', auth()->user()->id)
            ->where('from_id', '=', $admin->id)
            ->with('user')->get();
        return view('livewire.message', compact('admin', 'ownMessages', 'fromAdminMessages'));
    }
}
