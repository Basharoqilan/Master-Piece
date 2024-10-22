<?php

// app/Http/Controllers/DiabetesAssessmentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiabetesAssessment;

class DiabetesAssessmentController extends Controller
{
    public function showForm()
    {
        return view('user.diabetes_assessment');
    }

    public function store(Request $request)
    {
        // Validate the form inputs
        $validated = $request->validate([
            'age_group' => 'required|integer',
            'gender' => 'required|integer',
            'descent' => 'required|integer',
            'birthplace' => 'required|integer',
            'parental_diabetes' => 'required|integer',
            'blood_glucose' => 'required|integer',
            'blood_pressure_medication' => 'required|integer',
            'smoking' => 'required|integer',
            'vegetable_intake' => 'required|integer',
            'physical_activity' => 'required|integer',
            'waist_measurement' => 'required|integer',
        ]);

        $waistScore = 0;
        if ($request->gender == 3) {
            if ($request->waist_measurement > 102) {
                $waistScore = 4;
            } elseif ($request->waist_measurement > 94) {
                $waistScore = 3;
            } else {
                $waistScore = 1;
            }
        } elseif ($request->gender == 0) {
            if ($request->waist_measurement > 88) {
                $waistScore = 4;
            } elseif ($request->waist_measurement > 80) {
                $waistScore = 3;
            } else {
                $waistScore = 1;
            }
        }

        $inputValues = [
            $request->age_group,
            $request->gender,
            $request->descent,
            $request->birthplace,
            $request->parental_diabetes,
            $request->blood_glucose,
            $request->blood_pressure_medication,
            $request->smoking,
            $request->vegetable_intake,
            $request->physical_activity
        ];

        // Calculate the total score by summing all factors and including waist score
        $totalScore = array_sum($inputValues) + $waistScore;

        // Determine the risk level based on the total score
        $riskLevel = '';
        if ($totalScore <= 5) {
            $riskLevel = 'Low';
        } elseif ($totalScore <= 10) {
            $riskLevel = 'Moderate';
        } else {
            $riskLevel = 'High';
        }

        if (auth()->check()) {
            DiabetesAssessment::create([
                'user_id' => auth()->id(),
                'age_group' => $request->age_group,
                'gender' => $request->gender,
                'descent' => $request->descent,
                'birthplace' => $request->birthplace,
                'parental_diabetes' => $request->parental_diabetes,
                'blood_glucose' => $request->blood_glucose,
                'blood_pressure_medication' => $request->blood_pressure_medication,
                'smoking' => $request->smoking,
                'vegetable_intake' => $request->vegetable_intake,
                'physical_activity' => $request->physical_activity,
                'waist_measurement' => $request->waist_measurement,
                'total_score' => $totalScore,
            ]);
        }

        // Pass the score and risk level to the result view
        return view('user.diabetesresult', compact('totalScore', 'riskLevel'));
    }

}
