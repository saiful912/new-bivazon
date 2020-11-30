<?php

namespace App\Http\Livewire;

use App\Enums\UserType;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class AdminMessage extends Component
{
    public $message;
    public $messages = [];
    public $fromMessages = [];
    public $selectedUser;

    public function selectUser($id)
    {
        $this->selectedUser = User::withCount('messages')->find($id);
        $selectUser = $this->selectedUser;
        $this->messages = \App\Models\Message::where(static function (Builder $query) use ($selectUser) {
            $query->where('from_id', '=', auth()->user()->id);
            $query->where('to_id', '=', $selectUser->id);

        })->orWhere(function (Builder $query) use ($selectUser) {
            $query->where('from_id', '=', $selectUser->id);
            $query->where('to_id', '=', auth()->user()->id);
        })->with('user')->get();


        $this->fromMessages = \App\Models\Message::where('to_id', '=', auth()->user()->id)
            ->where('from_id', '=', $this->selectedUser->id)
            ->with('user')->get();
    }

    public function sendMessage()
    {
        $message = $this->validate(['message' => 'required']);
        $admin = User::where('type', '=', UserType::ADMIN())->first();
        try {
            \App\Models\Message::create([
                'text' => $this->message,
                'from_id' => auth()->user()->id,
                'to_id' => $this->selectedUser->id
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
        $users = User::where('type', '=', UserType::MERCHANT())->get();
        return view('livewire.admin-message', compact('admin', 'users'));
    }
}
