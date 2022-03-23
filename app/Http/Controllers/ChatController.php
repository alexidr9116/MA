<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Domain;
use App\Models\Message;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Auth;
use PDO;
use Throwable;

class ChatController extends MAController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {

        return view('chat');
    }

    public function store(Request $request)
    {
    }
    public function fetchMessages()
    {
        return Message::with('user')->get();
    }
    public function sendMessage(Request $request)
    {
        $user = Auth::user();

        $message = $user->messages()->create([
          'message' => $request->input('message')
        ]);

        broadcast(new MessageSent($user, $message))->toOthers();

        return response()->json(["success"=>true]);
    }
}
