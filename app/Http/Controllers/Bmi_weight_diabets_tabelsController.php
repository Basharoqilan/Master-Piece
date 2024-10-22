<?php

namespace App\Http\Controllers;
use PDF;

use Illuminate\Http\Request;
use App\Models\BmiCalculation;
use App\Models\DiabetesAssessment;
use App\Models\BodyWeightPlanner;

class Bmi_weight_diabets_tabelsController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        $bmis = BmiCalculation::where('user_id', $user->id)->get();
        $diabetess = DiabetesAssessment::where('user_id', $user->id)->get();
        $bodyWeights = BodyWeightPlanner::where('user_id', $user->id)->get();

        return view('user.Bmi_weight_diabets_tabels', compact('bmis', 'diabetess', 'bodyWeights'));
    }


    public function downloadPDF()
    {
        $bmis = BmiCalculation::all();
        $diabetess = DiabetesAssessment::all();
        $bodyWeights = BodyWeightPlanner::all();

        $pdf = PDF::loadView('user.pdf', compact('bmis', 'diabetess', 'bodyWeights'));
        return $pdf->download('profile_report.pdf');
    }


}
