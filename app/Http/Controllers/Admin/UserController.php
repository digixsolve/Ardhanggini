<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Events\ActivityLogged;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;


class UserController extends Controller
{
    /**
     * The constructor function sets middleware permissions for specific user actions in a PHP class.
     */
    public function __construct()
    {
        $this->middleware('permission:view user|create user|show user|edit user|delete user')->only(['index', 'create', 'show', 'edit', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.users.index', ['users' => User::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.users.create', ['roles' => Role::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        event(new ActivityLogged('User created', $user));

        return redirect()->back()->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.pages.users.show', [
            'user' => User::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.users.edit', [
            'user' => User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'first_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:' . User::class . ',email,' . $user->id],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);

        $user->update([
            'first_name'     => $request->first_name ? $request->first_name  : $user->first_name,
            'last_name'     => $request->last_name ? $request->last_name  : $user->last_name,
            'email'                       => $request->email ? $request->email: $user->email,
            'phone'                       => $request->phone ? $request->email: $user->email,
            'address_one'                 => $request->address_one ? $request->email: $user->email,
            'address_two'                 => $request->address_two ? $request->email: $user->email,
            'zipcode'                     => $request->zipcode ? $request->email: $user->email,
            'state'                       => $request->state ? $request->email: $user->email,
            'country'                     => $request->country ? $request->email: $user->email,
            'company_name'                => $request->company_name ? $request->email: $user->email,
            'company_registration_number' => $request->company_registration_number ? $request->email: $user->email,
            'company_vat_number'          => $request->company_vat_number ? $request->email: $user->email,
            'selling_platforms'           => $request->selling_platforms ? $request->email: $user->email,
            'customer_type'               => $request->customer_type ? $request->email: $user->email,
            'referral_source'             => $request->referral_source ? $request->email: $user->email,
            'buying_group_membership'     => $request->buying_group_membership ? $request->email: $user->email,
            'website_address'             => $request->website_address ? $request->email: $user->email,
            'buying_group_name'           => $request->buying_group_name ? $request->email: $user->email,
            'current_suppliers'           => $request->current_suppliers ? $request->email: $user->email,
            'annual_spend'                => $request->annual_spend ? $request->email: $user->email,
            'newsletter_preference'       => $request->newsletter_preference ? $request->email: $user->email,
            'terms_condition'             => $request->terms_condition ? $request->email: $user->email,
            'status'                      => $request->status ? $request->email: $user->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        event(new ActivityLogged('User updated', $user));

        return redirect()->back()->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        event(new ActivityLogged('User deleted', $user));
    }
    public function toggleStatus(string $id)
    {
        $brand = User::findOrFail($id);
        $brand->status = $brand->status == 'active' ? 'inactive' : 'active';
        $brand->save();
        return response()->json(['success' => true]);
    }
}
