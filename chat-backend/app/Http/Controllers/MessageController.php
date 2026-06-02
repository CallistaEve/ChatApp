<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'sender_id' => 'required|exists:users,id',
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        $message = Message::create([
            'sender_id' => $request->sender_id,
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $message
        ]);
    }

    public function getMessages($user1, $user2)
    {
        $messages = Message::where(function ($query) use ($user1, $user2) {
            $query->where('sender_id', $user1)
                ->where('receiver_id', $user2);
        })
            ->orWhere(function ($query) use ($user1, $user2) {
                $query->where('sender_id', $user2)
                    ->where('receiver_id', $user1);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $messages
        ]);
    }
}
