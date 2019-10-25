<?php

namespace App\Http\Controllers;

use App\Events\MessageSentEvent;
use App\Helpers;
use App\Models\Message;
use App\Services\Utils\LogService;
use App\Services\Utils\ResponseService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function _construct()
    {
    }

    public function index()
    {
        return view('pages.chat');
    }

    public function mine()
    {
        $conversation = [];
        if (($messages = Message::whereUserId(\Auth::user()->id)->orWhere('target_id', \Auth::user()->id)->get()) !== null) {
            foreach ($messages as $message) {
                $target = $message->getAttributeValue('target_id');
                $source = $message->getAttributeValue('user_id');
                $index = base64_encode(min((int)$target, $source) . "-" . max($target, $source));
//                LogService::debug("MESSAGEID : " . $message->id . "TARGETID " . $message->target_id . "USERID :: " . \Auth::user()->id);
                if (isset($conversation[$index])) {
//                    $conversation[$index]['person'] = $message->target_id === \Auth::user()->id ? $message->source() : $message->target();
                    $conversation[$index]['messages'][] = $message;
                } else {
//                    $conversation[$index]['person'] = $message->target_id === \Auth::user()->id ? $message->source() : $message->target();
                    $conversation[$index] = array(
                        'id'       => $index,
                        'person'   => $message->target_id === \Auth::user()->id ? $message->source() : $message->target(),
                        "messages" => [$message]
                    );
                }
            }
        }

        usort($conversation, function ($a, $b) {
            $lastA = $a && isset($a['messages']) ? $a['messages'][count($a['messages']) - 1] : null;
            $lastB = $b && isset($b['messages']) ? $b['messages'][count($b['messages']) - 1] : null;
            return Carbon::parse($lastA->created_at) < Carbon::parse($lastB->created_at) ? 1 : -1;
        });

        return ResponseService::success(['messages' => $messages, 'conversations' => $conversation]);
    }

    public function fetch()
    {
        return \App\Models\Message::with('user')->get();
    }

    public function send()
    {
        $data = Helpers::getRequestData(\request());
        $index = explode('-', base64_decode($tmp = $data->index));
        $message = \Auth::user()->messages()->create([
            'message'   => $data->message,
            'target_id' => ((int)$index[0]) === \Auth::user()->id ? $index[1] : $index[0]
        ]);
//        broadcast(new MessageSentEvent($user, $message));
        return ResponseService::success(['message' => $message]);
    }
}
