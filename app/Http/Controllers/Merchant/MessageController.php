<?php

namespace App\Http\Controllers\Merchant;

use App\Enums\UserType;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function showMessageForm()
    {

        return view('merchant.message.index');
    }
}
