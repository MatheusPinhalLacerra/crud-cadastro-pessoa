<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'rua' => ['required', 'string', 'max:60'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'sexo' => $input['sexo'],
            'date' => $input['date'],
            'cpf' => $input['cpf'],
            'rg' => $input['rg'],
            'telefone' => $input['telefone'],
            'celular' => $input['celular'],
            'cep' => $input['cep'],
            'rua' => $input['rua'],
            'numero' => $input['numero'],
            'bairro' => $input['bairro'],
            'complemento' => $input['complemento'],
            'uf' => $input['uf'],
            'cidade' => $input['cidade'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
