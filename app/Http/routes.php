<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return 'Contact us';
});

// สร้างเส้นทาง (Route) สำหรับ URL /about โดยใช้ HTTP GET
Route::get('/about', function () {
    // กำหนดตัวแปร $info ให้เป็น array ที่ประกอบด้วยข้อมูล 5 รายการ
    $info = [
        'condition',  // ข้อมูลเงื่อนไข
        'privacy',    // ข้อมูลนโยบายความเป็นส่วนตัว
        'terms',      // ข้อมูลข้อกำหนด
        'faq',        // คำถามที่พบบ่อย
        'contact'     // ข้อมูลติดต่อ
    ];

    // ส่งตัวแปร $info ไปยัง view ชื่อ 'about'
    // ใช้วิธีการส่งข้อมูลโดยการใช้คำสั่ง with()
    return view('about')->with('info', $info);
});


Route::get('/site', function () {
    $name = 'John Doe';
    return view('site/index', [
        'name' => $name
    ]);
});

Route::get('/product','ProductController@index');