<?php

namespace App\Http\Controllers;

use dekor\ArrayToTextTable;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        echo "task nr. 1";
        echo "<br>";
        $data = array(
            array(
                'Name' => 'Trikse',
                'Color' => 'Green',
                'Element' => 'Earth',
                'Likes' => 'Flowers'
            ),
            array(
                'Name' => 'Vardenis',
                'Element' => 'Air',
                'Likes' => 'Singning',
                'Color' => 'Blue'
            ),
            array(
                'Element' => 'Water',
                'Likes' => 'Dancing',
                'Name' => 'Jonas',
                'Color' => 'Pink'
            ),
        );
        // get headers
        $keys = array_keys($data[0]);
        // max length of each column
        $column_widths = array();
        foreach ($keys as $key) {
            $column_widths[$key] = strlen($key);
        }
        foreach ($data as $item) {
            foreach ($item as $key => $value) {
                $column_widths[$key] = max($column_widths[$key], strlen($value));
            }
        }

        // top border
       $this-> print_border($column_widths);

        // headers
        echo "|";
        foreach ($keys as $key) {
            echo " " . $key . " |";
        }
        echo "<br>";
        // second border
        $this-> print_border($column_widths);

        // data
        foreach ($data as $item) {
            echo "|";
            foreach ($keys as $key) {
                echo " " . $item[$key] . " |";
            }
            echo "<br>";
        }
        //  bottom border
        $this-> print_border($column_widths);
        // easy way with lib
        $task1 = array(
            array(
                'Name' => 'Trikse',
                'Color' => 'Green',
                'Element' => 'Earth',
                'Likes' => 'Flowers'
            ),
            array(
                'Name' => 'Vardenis',
                'Element' => 'Air',
                'Likes' => 'Singning',
                'Color' => 'Blue'
            ),
            array(
                'Element' => 'Water',
                'Likes' => 'Dancing',
                'Name' => 'Jonas',
                'Color' => 'Pink'
            ),
        );
        $table1 = (new ArrayToTextTable($task1))->render();
        $numbers = [1, 2, 4, 7, 1, 6, 2, 8];
        rsort($numbers);
        $part1 = 0;
        $part2 = 0;
        $part3 = 0;
        $arr1 = [];
        $arr2 = [];
        $arr3 = [];

        $size = count($numbers);

        for ($i = 0; $i < $size; $i++) {
            if ($part1 < $part2 && $part1 < $part3) {
                $part1 += $numbers[$i];
                array_push($arr1, $numbers[$i]);
            } elseif ($part2 < $part3) {
                $part2 += $numbers[$i];
                array_push($arr2, $numbers[$i]);
            } else {
                $part3 += $numbers[$i];
                array_push($arr3, $numbers[$i]);
            }
        }
        $sum1 = implode("+", $arr1);
        $sum2 = implode("+", $arr2);
        $sum3 = implode("+", $arr3);
        $rez1 = $sum1 . '=' . $part1;
        $rez2 = $sum2 . '=' . $part2;
        $rez3 = $sum3 . '=' . $part3;

        return view('home', ['table' => $table1, 'rez1' => $rez1, 'rez2' => $rez2, 'rez3' => $rez3]);
    }

    function print_border($column_widths) {
        echo "+";
        foreach ($column_widths as $width) {
            for ($i = 0; $i < $width + 2; $i++) {
                echo "-";
            }
            echo "+";
        }
        echo "<br>";
    }
}
