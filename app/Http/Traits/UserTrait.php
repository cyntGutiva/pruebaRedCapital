<?php

namespace App\Http\Traits;
use App\Models\Student;
use App\User;

trait UserTrait {
    public function getAll() {
        // Fetch all the users from the 'users' table.
        return User::all();
    }
}