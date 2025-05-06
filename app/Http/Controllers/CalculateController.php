<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function calculate(Request $request)
    {
        $validate = $request->validate([
            'num1' => 'required|numeric',
            'num2' => 'required|numeric',
            'operation' => 'required|in:addition,subtraction,multiplication,division'
        ]);

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operation = $request->input('operation');
        $result = 0;

        switch ($operation) {
            case 'addition':
                $result = $num1 + $num2;
                break;
            case 'subtraction':
                $result = $num1 - $num2;
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                break;
            case 'division':
                if ($num2 == 0) {
                    $result = 'Error: Division by zero';
                } else {
                    $result = $num1 / $num2;
                }
                break;
        }
        $operationSymbols = [
            'addition' => '+',
            'subtraction' => '-',
            'multiplication' => '×',
            'division' => '÷'
        ];

        $symbol = $operationSymbols[$operation];
        return view('index', compact('num1', 'num2', 'operation', 'result', 'symbol'));
    }
}
