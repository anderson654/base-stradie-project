<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form_elements()
    {
        return view('pages.form-elements');
    }

    public function form_layouts()
    {
        return view('pages.form-layouts');
    }

    public function form_advanced()
    {
        return view('pages.form-advanced');
    }

    public function form_editor()
    {
        return view('pages.form-editor');
    }

    public function form_validation()
    {
        return view('pages.form-validation');
    }

    public function form_input_spinners()
    {
        return view('pages.form-input-spinners');
    }

    public function select_2()
    {
        return view('pages.select-2');
    }

}
