<?php

namespace App\Http\Livewire\Admin\Administrator;

use App\Enums\ERole;
use App\Models\Users;
use Livewire\Component;

class AdministratorList extends Component
{
    public function render()
    {
        // $admin = Users::where('role', ERole::ADMIN)->get();
        // return view('livewire.admin.administrator.administrator-list', compact('admin'));
        return view('livewire.admin.administrator.administrator-list');
    }
}
