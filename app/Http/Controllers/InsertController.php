<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class InsertController extends Controller {
    public function insertRows() {
        $result = DB::table('students')->insert(
            [
                ['name' => 'Karim', 'class' => 'One', 'roll' => 1],
                ['name' => 'Mina', 'class' => 'Two', 'roll' => 2],
                ['name' => 'Mitu', 'class' => 'Three', 'roll' => 3],
            ]
        );
        $data = $result == true ? 'Insert Success.' : 'Insert Failed.';
        return $data;

    }
}
