<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller {
    public function index(Request $request) {
        //$request->session()->put('key', ['Laravel','PHP','JavaScript','Tooling']);
        return $request->session()->get('key', function() {
            return ['Laravel','PHP','JavaScript','Tooling'];
        });
    }
    public function store(Request $request) {
        $skill = $request->input('skill');
        $request->session()->push('key', $skill);
    }
}