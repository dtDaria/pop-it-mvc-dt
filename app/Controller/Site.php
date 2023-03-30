<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Model\Student;
use Model\dist;
use Src\Auth\Auth;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/go');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function sgroup(): string
    {
        return (new View())->render('site.sgroup');
    }

    public function nstud(Request $request): string
    {
        if ($request->method === 'POST' && Student::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.nstud');
    }

    public function sdis(Request $request): string
    {
        if ($request->method === 'POST' && dist::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return (new View())->render('site.sdis');
    }

    public function strStud(): string
    {
        return (new View())->render('site.strStud');
    }

    public function log(): string
    {
        return (new View())->render('site.log');
    }

    public function izm(): string
    {
        return (new View())->render('site.izm');
    }
}


