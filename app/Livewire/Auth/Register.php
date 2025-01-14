<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $showPassword = false;
    public $passwordConfirmationTouched = false;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'password_confirmation' => 'required'
    ];

    protected $message = [
        'name.required' => 'Nama wajib diisi',
        'name.min' => 'Nama minimal 3 karakter',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Format email tidak valid',
        'email.unique' => 'Email sudah terdaftar',
        'password.required' => 'Password wajib diisi',
        'password.min' => 'Password minimal 8 karakter',
        'password_confirmation.required' => 'Konfirmasi password wajib diisi'
    ];

    public function updated($propertyName)
    {
        if ($propertyName === 'passworc_confirmation') {
            $this->passwordConfirmationTouched = true;
        }

        if ($this->passwordConfirmationTouched &&
            $this->passwordConfirmation !== '' &&
            $this->password !== $this->password_confirmation) {
                $this->addError('password', 'The password field must match password confirmation');
        } else {
            $this->resetValidation('password');
        }

        $this->validateOnly($propertyName);
    }

    public function register()
    {
        if ($this->password !== $this->password_confirmation) {
            $this->addError('password', 'The password field must match password confirmation');
            return;
        }

        $validateData = $this->validate();
        $isFirstUser = User::count() === 0;

        $user = User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
            'is_admin' => $isFirstUser
        ]);

        event(new Registered($user));

        Auth::login($user);

        if ($isFirstUser) {
            return redirect()->intended('/admin');
        }

        return redirect()->route('home');
    }

    public function togglePassword()
    {
        $this->showPassword = !$this->showPassword;
    }


    public function render()
    {
        return view('livewire.auth.register')
            ->layout('components.layouts.app', ['hideBottomNav' => true]);;
    }
}
