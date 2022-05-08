<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class MergeController extends Controller {
    public function mergeData() {
        $students = DB::table('students')->get();
        $exam_marks = DB::table('exam_marks')->get();

        $total_data = $students->merge($exam_marks);
        return $total_data;
    }
}
