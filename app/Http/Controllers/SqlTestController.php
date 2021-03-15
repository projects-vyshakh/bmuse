<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SqlTestController extends Controller
{
    public function index() {
        $data = Posts::Join('tags As t', 'posts.id','=', 't.post_id')
                ->get()->groupBy('post_id')->toArray();

        $tableData = "";
        $tableData .= "<table border='1' cellpadding='10' cellspacing='5'>";


        foreach($data as $key=> $item) {
            if(isset($item[0])) {
                $tableData .= "<tr>";
                    $tableData .= "<td>".$key++."</td>";
                    $tableData .= "<td>".$item[0]['title']."</td>";
                    $tableData .= "<td>";
                    foreach($item as $index=> $inner) {
                        $tableData .= $inner['tag'].",";
                    }
                    $tableData .= "</td>";

                $tableData .= "</tr>";
            }
        }

        $tableData .= "</table>";

        echo $tableData;

    }

    public function handleUserUpdate() {

        $users = User::all();
        $numPosts = [3,8,1];

        if ($users) {
            foreach ($users as $index=> $items) {
                User::where('id', $items['id'])->update(['num_posts'=>$numPosts[$index]]);
            }
        }

        $users = User::all();
        print_r(json_encode($users));

    }
}
