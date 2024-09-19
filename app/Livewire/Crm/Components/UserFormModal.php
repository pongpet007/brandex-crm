<?php

namespace App\Livewire\Crm\Components;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Component;

class UserFormModal extends Component
{
    public $title = "User Add";
    public $id = 0;
    public $name = "";
    public $email = "";
    public $password = "";
    public $is_admin = 2;
    public $is_active = 1;

    public function save()
    {
        if ($this->id == 0) {
            User::create([
                'name' => trim($this->name),
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'is_admin' => $this->is_admin,
                'is_active' => $this->is_active,
                'cby' => Auth::user()->name
            ]);
            $msg = "User saved.";
        } else {

            $user = User::find($this->id);
            $user->name = $this->name;
            $user->email = $this->email;
            if (strlen($this->password) > 0)
                $user->password = Hash::make($this->password);
            $user->is_admin = $this->is_admin;
            $user->is_active = $this->is_active;
            $user->uby = Auth::user()->name;
            $user->save();
            $msg = "User updated.";
        }

        $this->reset('name');
        $this->reset('email');
        $this->reset('password');
        $this->reset('is_admin');
        $this->reset('is_active');

        $this->dispatch('user-refresh');       
        $this->dispatch('toast-alert', msg: [$msg, 'success']);
        $this->dispatch('user-modal-close');
    }

    #[On('user-edit')]
    public function setEdit($id)
    {
        $this->id = $id;
        $this->title = "User edit";
        
        $user = User::find($this->id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->is_admin = $user->is_admin;
        $this->is_active = $user->is_active;       
    }

    public function render()
    {
        return view('livewire.crm.components.user-form-modal');
    }
}
