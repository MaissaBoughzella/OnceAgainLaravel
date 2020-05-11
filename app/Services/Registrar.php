<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'lastName' => 'required|max:255',
			'cin' => 'required|max:8',
			'numTel' => 'required|max:8',
			'address' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'lastName' => $data['lastName'],
			'cin' => $data['cin'],
			'numTel' => $data['numTel'],
			'address' => $data['address'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
