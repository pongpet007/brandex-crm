<?php

namespace App\Livewire\Crm;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layout.themebd')]
class UsersForm extends Component
{
    public $id = 0;
    public $name="";
    public $email="";
    public $password="";
    public $is_admin=2;
    public $is_active=1;

    public function mount($id = 0)
    {
        $this->id = $id;
    }

    public function save()
    {
        if ($this->id == 0) {           
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'is_admin' => $this->is_admin,
                'is_active' => $this->is_active,
                'cby' => Auth::user()->name
            ]);
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
        }
        redirect("users");
    }

    public function render()
    {
        if ($this->id > 0) {
            $user = User::find($this->id);
            $this->name = $user->name;
            $this->email = $user->email;
            $this->is_admin = $user->is_admin;
            $this->is_active = $user->is_active;
        }
        return view('livewire.crm.users-form');
    }
}
