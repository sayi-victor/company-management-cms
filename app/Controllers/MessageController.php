<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MessageModel as Message;

class MessageController extends BaseController
{

    /**
    * Diplay all messages view
    */
    public function index()
    {
        $msg = new Message;
        $msgs = $msg->findAll();

        return view('message/all', [
            'messages' => $msgs
        ]);
    }
    /**
    * Diplay send message view
    */
    public function sendView()
    {
        return view('contact');
    }

    /**
     * Attempt to save the message
     */
    public function sendAction()
    {
        if (! $this->request->is('post')) {
            return view('contact');
        }

        $msg = new Message;
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'message' => $this->request->getVar('message')
        ];

        $send = $msg->save($data);
        if ($send === true) {
            return redirect()->to('');
        } else {
            return view('contact', ['errors' => $msg->errors()]);
        }
    }

    /**
     * Display message view
     */
    public function view()
    {
        $msg = new Message;
        $message = $msg->find($this->request->getVar('id'));

        return view('message/view', [
            'message' => $message
        ]);
    }
    
    /**
     * Attempt to delete message
     */
    public function delete()
    {
        if (! $this->request->is('post')) {
            return view('contact');
        }

        $msg = new Message;
        $message = $msg->delete($this->request->getVar('id'));

        return redirect()->to('/messages');
    }
}
