<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class DashboradController extends Controller
{
    public function index(Request $request)
    {
        $subjects = ['toan', 'ngu_van', 'ngoai_ngu', 'vat_li', 'hoa_hoc', 'sinh_hoc', 'lich_su', 'dia_li', 'gdcd'];
        
        // Calculation of reporting data for each subject
        foreach ($subjects as $subject) {
            $reportData[$subject] = Student::selectRaw("
                    SUM(CASE WHEN {$subject} >= 8 THEN 1 ELSE 0 END) as '>=8',
                    SUM(CASE WHEN {$subject} >= 6 AND {$subject} < 8 THEN 1 ELSE 0 END) as '>=6 && <8',
                    SUM(CASE WHEN {$subject} >= 4 AND {$subject} < 6 THEN 1 ELSE 0 END) as '>=4 && <6',
                    SUM(CASE WHEN {$subject} < 4 THEN 1 ELSE 0 END) as '<4'
                ")
                ->first();
        }

        // Top 10 students with the highest total score in Block A
        $topStudents = Student::select('id', 'sbd', 'toan', 'vat_li', 'hoa_hoc')
            ->whereNotNull('toan')
            ->whereNotNull('vat_li')
            ->whereNotNull('hoa_hoc')
            ->selectRaw('(toan + vat_li + hoa_hoc) as total')
            ->orderByDesc('total')
            ->take(10)
            ->get();

        // Maximum total score in blocks A, B, C, D
        $maxBlockA = Student::whereNotNull('toan')
            ->whereNotNull('vat_li')
            ->whereNotNull('hoa_hoc')
            ->selectRaw('(toan + vat_li + hoa_hoc) as total')
            ->orderByDesc('total')
            ->value('total');

        $maxBlockB = Student::whereNotNull('toan')
            ->whereNotNull('sinh_hoc')
            ->whereNotNull('hoa_hoc')
            ->selectRaw('(toan + sinh_hoc + hoa_hoc) as total')
            ->orderByDesc('total')
            ->value('total');

        $maxBlockC = Student::whereNotNull('lich_su')
            ->whereNotNull('dia_li')
            ->whereNotNull('gdcd')
            ->selectRaw('(lich_su + dia_li + gdcd) as total')
            ->orderByDesc('total')
            ->value('total');

        $maxBlockD = Student::whereNotNull('toan')
            ->whereNotNull('ngu_van')
            ->whereNotNull('ngoai_ngu')
            ->selectRaw('(toan + ngu_van + ngoai_ngu) as total')
            ->orderByDesc('total')
            ->value('total');
        
        return view('dashboard.index', compact('reportData', 'topStudents', 'maxBlockB', 'maxBlockA', 'maxBlockC', 'maxBlockD'));
    }
}
