<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BmiCalculation;

class BmiController extends Controller
{
    public function showForm()
    {
        return view('user.bmi_calculator');
    }

    public function calculateBmi(Request $request)
    {
        $validated = $request->validate([
            'age' => 'required|integer',
            'gender' => 'required|string',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ]);

        $heightInMeters = $request->height / 100;
        $bmi = $request->weight / ($heightInMeters * $heightInMeters);
        $bmi = number_format($bmi, 1);

        $bmiCategory = '';
        if ($bmi < 18.5) {
            $bmiCategory = 'Underweight';
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            $bmiCategory = 'Normal';
        } elseif ($bmi >= 25 && $bmi < 30) {
            $bmiCategory = 'Overweight';
        } else {
            $bmiCategory = 'Obese';
        }

        if (auth()->check()) {
            BmiCalculation::create([
                'user_id' => auth()->id(),
                'age' => $request->age,
                'gender' => $request->gender,
                'weight' => $request->weight,
                'height' => $request->height,
                'bmi' => $bmi,
                'bmi_category' => $bmiCategory,
            ]);
        }

        return view('user.bmi_result', compact('bmi', 'bmiCategory'));
    }
}
