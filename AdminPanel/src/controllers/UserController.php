<?php
namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function createUser($data)
    {
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->profile_picture = $data['profile_picture'] ?? 'src/images/profile_picture/default.png';
        return $user->save();
    }

    public function updateUser($id, $data)
    {
        $user = User::findById($id);
        if ($user) {
            $user->name = $data['name'] ?? $user->name;
            $user->email = $data['email'] ?? $user->email;
            $user->profile_picture = $data['profile_picture'] ?? $user->profile_picture;
            return $user->save();
        }
        return false;
    }

    public function deleteUser($id)
    {
        $user = User::findById($id);
        if ($user) {
            return $user->delete();
        }
        return false;
    }

    public function getUserProfile($id)
    {
        return User::findById($id);
    }
}
?>