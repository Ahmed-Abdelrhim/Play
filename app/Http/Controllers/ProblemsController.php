<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProblemsController extends Controller
{
    public function solveFirst()
    {
        $head = [1, 2, 3, 4, 5, 6];
        $length = count($head);

        if ($length % 2 !== 0) {
            $middle = floor($length / 2);
            $results = [];
            for ($i = $middle; $i < $length; $i++) {
                $results[] .= $head[$i];
            }
            return $results;
        }
        $middle = $length / 2;
        $results = [];
        for ($i = $middle; $i < $length; $i++) {
            $results[] .= $head[$i];
        }
        return $results;
    }

    public function tempProblem()
    {
        $temps = [73, 74, 75, 71, 69, 72, 76, 73];
        $length = count($temps);
        $result = [];
        $put = 0;
//        return $length;
        if ($length < pow(10, 5)) {
            for ($i = 0; $i < $length; $i++) {
                for ($j = $i + 1; $j < $length; $j++) {
                    if ($temps[$i] < $temps[$j]) {
                        // $put ++;
                        $put = ($j - $i);
                        break;
                        // $result[] .= $j;
                    }
                }
                $result[] .= $put;
                $put = 0;
            }
            return $result;
        }
        return null;
    }

    public function strings()
    {
        $strs = ["flower","flow","flight",'ahmed'];
        $chars = [];
        $arr = [];
//        return $strs[0][1];

        for ($i = 0 ; $i < count($strs) ; $i++) {
            // $digits = strlen($strs[$i]);

            for ($j = 0; $j < strlen($strs[$i]) ; $j++) {
                $arr[] .= $strs[$i][$j];
            }
        }
        return $arr;
    }

}

/*
 *
 * /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * //                         /||                                                             ||                          //
 * //   /                  /   ||                                                             ||                          //
 * //       /          /       ||                                                             ||                          //
 * //          ||||||||        ||                                                             ||                          //
 * //        /       /         ||                                                             ||                          //
 * //     /              /     ||                                                             ||                          //
 * //  /                     / ||                                                             ||                          //
 * /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * //                          ||                                                             ||                          //
 * /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 */
