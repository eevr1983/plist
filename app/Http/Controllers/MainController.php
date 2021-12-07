<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('base');
    }

    public function waybill() {
        return view('waybill');
    }

    public function contract() {
        return view('contract');
    }

    public function freighter_card() {
        return view('freighter_card');
    }

    public function memo() {
        return view('memo');
    }

    public function cars() {
        return view('cars');
    }

    public function employees() {
        return view('employees');
    }

    public function organizations() {
        return view('organizations');
    }

    public function settings() {
        return view('settings');
    }

    public function support() {
        return view('support');
    }

    public function dashboard() {
        return view('dashboard');
    }

    public function car($car = null) {
        return view('base');
    }

    public function admin($admin = null) {
        return view('admin');
    }
}
