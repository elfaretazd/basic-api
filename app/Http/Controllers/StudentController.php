<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function destroy($nim)
{
    return response()->json([
        "message" => "Student {$nim} deleted successfully (dummy)"
    ]);
}
}