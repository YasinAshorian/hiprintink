<?php

namespace App\Livewire\Managers\Users;

use App\Models\Manager;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use  WithPagination;


    public $name;
    public $email;
    public $password;
    public $isUpdate = false;
    public $isOpen = false;

    public $user;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'nullable|string',

        ];
    }


    public function create()
    {
        $validate = $this->validate();

        try {
            $validate['password'] = Hash::make($validate['password']);
            User::query()->create($validate);
            $this->isOpen = false;
            $this->unset();

        } catch (\Exception $e) {
            response_log('error', 'error in create admin user', $e->getMessage());
            $this->isOpen = false;
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند ثبت کاربر ادمین  به وجود آمده ! (ایمیل نباید تکراری باشد)']);
        }

        return back()->with(['success' => true, 'message' => 'ثبت کاربر ادمین  با موفقیت انجام شد.']);
    }

    public function setUpdate($value)
    {
        $this->isUpdate = true;
        $this->isOpen = true;
        $this->user = User::find($value);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function update()
    {
        $validate = $this->validate();

        try {

            if (empty($validate['password'])) {
                unset($validate['password']);
            } else {
                $validate['password'] = Hash::make($validate['password']);
            }

            User::query()->where('id', $this->user->id)->update($validate);
            $this->isOpen = false;
            $this->unset();

        } catch (\Exception $e) {
            response_log('error', 'error in update admin user', $e->getMessage());
            $this->isOpen = false;
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند ویرایش کاربر ادمین  به وجود آمده ! (ایمیل نباید تکراری باشد)']);
        }

        return back()->with(['success' => true, 'message' => 'ویرایش کاربر ادمین  با موفقیت انجام شد.']);

    }

    public function delete($value)
    {
        try {
            User::query()->where('id', $value)->delete();
            $this->unset();
        } catch (\Exception $e) {
            response_log('error', 'error in delete admin user', $e->getMessage());
            return back()->with(['error' => true, 'message' => 'مشکلی در فرآیند حذف کاربران ادمین  به وجود آمده !']);
        }

        return back()->with(['success' => true, 'message' => 'حذف کاربران ادمین با موفقیت انجام شد.']);
    }

    public function setIsUpdate($value)
    {
        $this->isUpdate = $value;
        $this->isOpen = true;
    }

    public function setDialog($value)
    {
        $this->isOpen = $value;
    }

    public function render()
    {
        $users = User::query()->paginate(15);
        return view('livewire.managers.users.users', ['users' => $users])->layout('livewire.layouts.managers');
    }

    private function unset()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
    }
}
