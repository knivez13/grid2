<?php

namespace App\Http\Controllers;

use App\Models\PropertyList;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $requestParams = $request->all();
        $search = Arr::get($requestParams, 'search', '');

        $list = User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orwhere('email', 'LIKE', "%{$search}%")
            ->orderBy('id', 'DESC')
            ->paginate(10);
        return view('usermanagement.user.index', compact('list', 'search'));
    }

    public function edit($id)
    {
        $data = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $data->roles->pluck('name', 'name')->all();

        return view('usermanagement.user.edit', compact('data', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required',
            'status' => 'required'
        ]);

        $data = User::find($id);
        $data->name = $request->get('name');
        $data->email = $request->get('email');

        $data->address = $request->get('address');
        $data->bio = $request->get('bio');
        $data->contact_number = $request->get('contact_number');
        $data->company_name = $request->get('company_name');
        $data->facebook = $request->get('facebook');
        $data->twitter = $request->get('twitter');
        $data->instagram = $request->get('instagram');
        $data->pinterest = $request->get('pinterest');
        $data->linkedin = $request->get('linkedin');

        $data->bank_details = $request->get('bank_details');
        $data->crypto_wallet = $request->get('crypto_wallet');
        $data->status = $request->get('status');
        $data->updated_by = Auth::user()->id;
        $data->save();
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $data->assignRole($request->input('role'));
        return back()->with('success', 'Update successfully');
    }

    public function personalInfo()
    {
        $data = User::find(Auth::user()->id);
        return view('account.personal-info', compact('data'));
    }

    public function passwordSecurity()
    {
        return view('account.password-security');
    }

    public function myProperty()
    {

        $list = PropertyList::query()
            ->where('created_by', Auth::user()->id)
            ->with('propertytype')
            ->with('listingcategory')
            ->with('listingtype')
            ->with('deliveryunit')
            ->with('priority')
            ->with('priorityunder')
            ->with('status')
            ->orderBy('id', 'DESC')
            ->paginate(5);
        return view('account.properties', compact('list'));
    }

    public function wishlist()
    {
        return view('account.wishlist');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'picture' => 'image|mimes:jpeg,png,jpg|max:5048',
        ]);

        $data = User::find(Auth::user()->id);
        $data->name = $request->get('name');
        $data->email = $request->get('email');

        $data->address = $request->get('address');
        $data->bio = $request->get('bio');
        $data->contact_number = $request->get('contact_number');
        $data->company_name = $request->get('company_name');
        $data->facebook = $request->get('facebook');
        $data->twitter = $request->get('twitter');
        $data->instagram = $request->get('instagram');
        $data->pinterest = $request->get('pinterest');
        $data->linkedin = $request->get('linkedin');

        $data->bank_details = $request->get('bank_details');
        $data->crypto_wallet = $request->get('crypto_wallet');
        $data->status = 1;
        $data->updated_by = Auth::user()->id;

        if ($request->picture) {
            $image_path = public_path('/upload/avatar/' . $data->picture);
            if ($data->picture) {
                if (File::exists($image_path)) {
                    unlink($image_path);
                    File::delete($image_path);
                }
            }
            $request->picture->store('avatar', 'public_uploads');
            $data->picture = $request->picture->hashName();
        }
        $data->save();
        return back()->with('success', 'Update successfully');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required', 'string', 'min:8',],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(Auth::user()->id)->update(['password' => Hash::make($request->new_password)]);
        return back()->with('success', 'Update successfully');
    }
}
