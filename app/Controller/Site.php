<?php

namespace Controller;

use Illuminate\Database\Capsule\Manager as DB;
use Model\Post;
use Model\strStuds;
use Src\View;
use Src\Request;
use Model\User;
use Model\Student;
use Model\dist;
use Model\groups;
use Model\strStudent;
use Model\usp_ocen;
use Model\kontr;
use Model\izm;
use Src\Auth\Auth;
use Src\Validator\Validator;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        $groups = groups::all();
        $usp_ocen = usp_ocen::all();
        $dist = dist::all();
        $students = DB::table('students')
            ->join('groups', 'students.GroupID', '=', 'groups.GroupID')
            ->join('usp_ocen', 'students.StudentsID', '=', 'usp_ocen.StudentsID')
            ->join('dist', 'usp_ocen.Distid', '=', 'dist.Distid')
            ->select('students.*', 'groups.*', 'usp_ocen.*', 'dist.*')
            ->get();

        return new View('site.hello', ['groups' => $groups, 'students' => $students, 'usp_ocen' => $usp_ocen, 'dist' => $dist]);
    }

//    public function signup(Request $request): string
//    {
//        if ($request->method === 'POST' && User::create($request->all())) {
//            app()->route->redirect('/go');
//        }
//        return new View('site.signup');
//    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'login' => ['required', 'unique:users,login'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if ($validator->fails()) {
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
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
        return new View('site.login', ['message' => 'Такого пользователя нет в системе']);
    }


    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function sgroup(Request $request): string
    {
        if ($request->method === 'POST' && groups::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.sgroup');

    }

    public function nstud(Request $request): string
    {
        $groups = groups::all();

        if ($request->method === 'POST' && Student::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.nstud',['groups' => $groups]);
    }

    public function sdis(Request $request): string
    {
        $kontr = kontr::all();

        if ($request->method === 'POST' && dist::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return (new View())->render('site.sdis',['kontr' => $kontr]);
    }

    public function strStud(Request $request): string
    {
        if ($request->method === 'POST' && strStuds::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return (new View())->render('site.strStud');
    }

    public function izm(Request $request): string
    {
        if ($request->method === 'POST' && izm::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return (new View())->render('site.izm');
    }

}

