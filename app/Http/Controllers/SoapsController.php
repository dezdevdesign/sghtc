<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Soap;

class SoapsController extends Controller
{
    /**
     * Update patients SOAP on appointment.
     *
     * @param  \App\Soap $soap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soap $soap) 
    {
        $soap->update([
            'chief_complaint' => request('chief_complaint'),
            'history_present_illness' => request('history_present_illness'),
            'med_condition' => request('med_condition'),
            'allergies' => request('allergies'),
            'past_sx' => request('past_sx'),
            'social_hx' => request('social_hx'),
            'blood_pressure' => request('blood_pressure'),
            'heart_rate' => request('heart_rate'),
            'temperature' => request('temperature'),
            'height' => request('height'),
            'weight' => request('weight'),
            'extraoral' => request('extraoral'),
            'intraoral' => request('intraoral'),
            'radiology' => request('radiology'),
            'test1' => request('test1'),
            'test2' => request('test2'),
            'test3' => request('test3'),
            'test4' => request('test4'),
            'cold' => request('cold'),
            'ept' => request('ept'),
            'perc' => request('perc'),
            'palp' => request('palp'),
            'mob' => request('mob'),
            'assessment' => request('assessment'),
            'plan' => request('plan'),
            'treatment_rendered' => request('treatment_rendered')
        ]);
    }
}
