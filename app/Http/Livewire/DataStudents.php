<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class DataStudents extends Component
{
    public function render()
    {
        return view('livewire.data-students', [
            'students' => Student::paginate(10)
        ]);
    }
}
