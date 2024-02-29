<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gradeclass;
use App\Http\Resources\TeacherClassessResource;

class SchoolClassesController extends Controller
{
    //
    public function listTeacherClasses()
    {
        $teacherClassess = auth('api')->user()->teacher->grades()->with('classes')->get();
        return response()->json($teacherClassess, 200);
    }
}
