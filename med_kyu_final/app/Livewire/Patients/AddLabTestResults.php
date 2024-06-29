<?php

namespace App\Livewire\Patients;

use Livewire\Attributes\Validate;
use Livewire\Component;

class AddLabTestResults extends Component
{
    public $test;
    public $testResultForm_isOpen = false;
    #[Validate('required|string|min:3')]
    public $result;

    public function openTestResultForm()
    {
        $this->testResultForm_isOpen = true;
    }

    public function closeTestResultForm()
    {
        $this->testResultForm_isOpen = false;
    }

    public function mount($test)
    {
        $this->test = $test;
    }

    public function render()
    {
        return view('livewire.patients.add-lab-test-results');
    }

    public function saveTestResult()
    {
        $this->validate();

        $this->test->update([
            'result' => $this->result,
            'done_by' => auth()->user()->id
        ]);
        noty()->addSuccess('Saved');
        $this->closeTestResultForm();
    }
}
