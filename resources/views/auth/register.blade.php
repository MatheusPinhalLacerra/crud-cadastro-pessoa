@extends('master')

@section('title', 'Cadastro')
@section('content')

    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo" id="logo-test">
                <img src="img/logo.png" alt="logo ecode" id="logo-register">
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div style="margin-top: 20px">
                    <x-jet-label for="name" value="{{ __('Nome') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Senha') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>


                <div class="row" style="margin-top: 20px">
                    <div class=" col-6">
                        <x-jet-label for="data-nascimento" value="{{ __('Data de Nascimento') }}" />
                        <x-jet-input id="data-nascimento" class="date block mt-1 w-full" type="date" name="date" />
                    </div>

                    <div class="col-6">
                        <x-jet-label for="sexo" value="{{ __('Sexo') }}" />
                        <select name="sexo"
                            class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px">
                    <div class=" col-6">
                        <x-jet-label for="cpf" value="{{ __('CPF') }}" />
                        <x-jet-input id="cpf" class="cpf block mt-1 w-full" type="text" name="cpf" />
                    </div>

                    <div class=" col-6">
                        <x-jet-label for="rg" value="{{ __('RG') }}" />
                        <x-jet-input id="rg" class="rg block mt-1 w-full" type="text" name="rg" />
                    </div>
                </div>

                <div class="row" style="margin-top: 20px">
                    <div class="col-6">
                        <x-jet-label for="telefone" value="{{ __('Telefone') }}" />
                        <x-jet-input id="telefone" class="telefone block mt-1 w-full" type="text" name="telefone" />
                    </div>

                    <div class="col-6">
                        <x-jet-label for="celular" value="{{ __('Celular') }}" />
                        <x-jet-input id="celular" class="celular block mt-1 w-full" type="text" name="celular" />
                    </div>
                </div>

                <div style="margin-top: 20px">
                    <x-jet-label for="rua" value="{{ __('Rua') }}" />
                    <x-jet-input id="rua" class="block mt-1 w-full" type="text" name="rua"/>
                </div>

                <div>
                    <div class="col-6" style="margin-top: 20px">
                        <x-jet-label for="cep" value="{{ __('Digite seu CEP *') }}" />
                        <x-jet-input id="cep" class="cep block mt-1 w-full" type="text" name="cep" value="" size="10"
                            maxlength="9" onblur="pesquisacep(this.value);" />
                    </div>

                    <div class="row" style="margin-top: 20px">
                        <div class="col-6" >
                            <x-jet-label for="numero" value="{{ __('Número') }}" />
                            <x-jet-input id="numero" class="cep block mt-1 w-full" type="text" name="numero" value=""
                                size="60" />
                        </div>

                        <div class="col-6">
                            <x-jet-label for="bairro" value="{{ __('Bairro') }}" />
                            <x-jet-input id="bairro" class="cep block mt-1 w-full" type="text" name="bairro" value=""
                                size="60" />
                        </div>
                    </div>

                    <div class="col-12">
                        <x-jet-label for="complemento" value="{{ __('Complemento') }}" />
                        <x-jet-input id="complemento" class="cep block mt-1 w-full" type="text" name="complemento" size="60" />
                    </div>


                    <div class="row" style="margin-top: 20px">
                        <div class="col-6">
                            <x-jet-label for="uf" value="{{ __('Estado') }}" />
                            <x-jet-input id="uf" class="cep block mt-1 w-full" type="text" name="uf" size="2" />
                        </div>

                        <div class="col-6">
                            <x-jet-label for="cidade" value="{{ __('Cidade') }}" />
                            <x-jet-input id="cidade" class="cep block mt-1 w-full" type="text" name="cidade" value=""
                                size="60" />
                        </div>

                    </div>

                </div>
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Já possui cadastro?') }}
                    </a>

                    <x-jet-button class="ml-4" onclick="myFunction()">
                        {{ __('Cadastrar') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>

@endsection
