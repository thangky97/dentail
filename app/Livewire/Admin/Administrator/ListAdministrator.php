<?php

namespace App\Http\Livewire\Admin\Administrator;

// use App\Enums\ERole;

// use App\Models\Users;
use Livewire\Component;

class Administrator extends Component
{
    public function render()
    {
        // $staff = Users::where('role', ERole::STAFF)->get();
        // return view('livewire.admin.staff.list-staff', compact('staff'));
        return view('livewire.administrator.admin.list-administrator');
    }
}
