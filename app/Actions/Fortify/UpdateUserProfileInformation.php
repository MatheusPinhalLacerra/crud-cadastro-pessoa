<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'date' => ['required', 'date'],
            'sexo' => ['required', 'string', 'max:250'],
            'cpf' => ['required', 'string', 'max:11'],
            'rg' => ['required', 'string', 'max:9'],
            'telefone' => ['required', 'string', 'max:10'],
            'celular' => ['required', 'string', 'max:11'],
            'cep' => ['required', 'string', 'max:10'],
            'rua' => ['required', 'string', 'max:60'],
            'numero' => ['required', 'string', 'max:10'],
            'bairro' => ['required', 'string', 'max:60'],
            'uf' => ['required', 'string', 'max:2'],
            'cidade' => ['required', 'string', 'max:60'],
            'complemento' => ['required', 'string', 'max:60'],


        ])->validateWithBag('updateProfileInformation');



        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'date' => $input['date'],
                'sexo' => $input['sexo'],
                'cpf' => $input['cpf'],
                'rg' => $input['rg'],
                'telefone' => $input['telefone'],
                'celular' => $input['celular'],
                'cep' => $input['cep'],
                'rua' => $input['rua'],
                'numero' => $input['numero'],
                'bairro' => $input['bairro'],
                'uf' => $input['uf'],
                'bairro' => $input['bairro'],
                'cidade' => $input['cidade'],
                'complemento' => $input['complemento'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
