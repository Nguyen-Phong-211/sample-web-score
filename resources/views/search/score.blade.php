@if($student)
    <table class="table align-items-center mb-0">
        <thead class="thead-light">
            <tr>
                <th scope="col">Candidate Number</th>
                <th scope="col" class="text-end">Math</th>
                <th scope="col" class="text-end">Literature</th>
                <th scope="col" class="text-end">Foreign Language</th>

                @if(collect($student->scienceSubjects)->filter()->isNotEmpty())
                    @foreach($student->scienceSubjects as $subjectName => $score)
                        <th scope="col" class="text-end">{{ $subjectName }}</th>
                    @endforeach
                @endif

                @if(collect($student->socialSubjects)->filter()->isNotEmpty())
                    @foreach($student->socialSubjects as $subjectName => $score)
                        <th scope="col" class="text-end">{{ $subjectName }}</th>
                    @endforeach
                @endif

                <th scope="col" class="text-end">ID Foreign Language</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                        <i class="fa fa-check"></i>
                    </button>
                    {{ $student->sbd }}
                </th>

                <td class="text-end">{{ $student->toan ?? '-' }}</td>
                <td class="text-end">{{ $student->ngu_van ?? '-' }}</td>
                <td class="text-end">{{ $student->ngoai_ngu ?? '-' }}</td>

                @if(collect($student->scienceSubjects)->filter()->isNotEmpty())
                    @foreach($student->scienceSubjects as $score)
                        <td class="text-end">{{ $score ?? '-' }}</td>
                    @endforeach
                @endif

                @if(collect($student->socialSubjects)->filter()->isNotEmpty())
                    @foreach($student->socialSubjects as $score)
                        <td class="text-end">{{ $score ?? '-' }}</td>
                    @endforeach
                @endif

                <td class="text-end">{{ $student->ma_ngoai_ngu ?? '-' }}</td>
            </tr>
        </tbody>
    </table>
@else
    <p class="ms-3 mt-3">Không tìm thấy thí sinh với SBD này.</p>
@endif
