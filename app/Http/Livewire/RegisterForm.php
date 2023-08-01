<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public string $email = '';
    public string $password = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $role = 'customer';
    public string $company_name = '';
    public string $vat_number = '';

    protected $rules = [
        'first_name' => 'required|min:2',
        'last_name' => 'required|min:2',
        'email' => 'required|email',
        'password' => 'required|min:8',
        'company_name' => 'required_if:role,vendor',
        'vat_number' => 'required_if:role,vendor'
    ];

    public function render()
    {
        return view('livewire.register-form');
    }

    public function submit()
    {
        $this->validate();

        // Register customer
        session()->flash('message', 'Customer Created Successfully');

        // Reset all input fields
        $this->email = '';
        $this->last_name = '';
        $this->first_name = '';
        $this->vat_number = '';
        $this->company_name = '';
        $this->password = '';
        $this->role = 'customer';
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }
}
