<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Repositories\MenusRepositiry;
use Illuminate\Http\Request;
use App\Http\Controllers\SiteController;
use Mail;

class ContactsController extends SiteController
{
    public function __construct()
    {
        parent::__construct(new MenusRepositiry(new Menu()));
        $this->template = env('THEME') . '.contacts';
        $this->bar = 'left';
    }

    public function index(Request $request)
    {

        if ($request->isMethod('post')) {

            $messages = [
                'required' => 'Полу :attribute Обязательно к заполнению',
                'email' => 'Полу :attribute должно содеражать правлеьны email ',
            ];

            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'text' => 'required',
            ],$messages);
            $data = $request->all();
            try {
                $result = Mail::send(env('THEME') . '.email', ['data' => $data], function ($m) use ($data) {
                    $mail_admin = env('MAIL_ADMIN');
                    $m->from($data['email'], $data['name']);
                    $m->to($mail_admin, 'Mr. Admin')->subject('Question');
                });
            }catch (\Exception $e){
                dd($e->getMessage());
            }
            if($result){
                return redirect()->route('contacts')->with('status','Email is send');
            }else {
                return redirect()->route('contacts')->with('status','Email not send');
            }
        }

        $this->title = ' Контакты';
        $content = view((env('THEME') . '.contact_content'))->render();
        $this->vars = array_add($this->vars, 'content', $content);
        $this->contentLeftBar = view((env('THEME') . '.contact_bar'))->render();

        return $this->renderOutput();
    }

}
