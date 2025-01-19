<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class SearchController extends Controller
{
    //index
    public function index(Request $request)
    {
        $student = null;
        $sbd = $request->get('sbd');

        if ($sbd) {
            $student = Student::where('sbd', $sbd)->first();

            if ($student) {
                // Map column names to display names
                $subjectNames = [
                    'vat_li' => 'Physics',
                    'hoa_hoc' => 'Chemistry',
                    'sinh_hoc' => 'Biology',
                    'lich_su' => 'History',
                    'dia_li' => 'Geography',
                    'gdcd' => 'Civic education',
                ];

                // Group of Sciences subjects
                $student->scienceSubjects = [
                    'Physics' => $student->vat_li,
                    'Chemistry' => $student->hoa_hoc,
                    'Biology' => $student->sinh_hoc,
                ];

                // Group of Social Sciences subjects
                $student->socialSubjects = [
                    'History' => $student->lich_su,
                    'Geography' => $student->dia_li,
                    'Civic education' => $student->gdcd,
                ];
            }
        }

        return view('search.index', compact('student'));
    }
    
    // suggest
    public function suggest(Request $request)
    {
        $query = $request->get('term');
        $students = Student::where('sbd', 'like', "%$query%")->limit(10)->pluck('sbd');

        return response()->json($students);
    }
}
