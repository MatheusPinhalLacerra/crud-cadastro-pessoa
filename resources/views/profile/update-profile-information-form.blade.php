
<x-jet-form-section submit="updateProfileInformation">
    <div class="test">
        <x-slot name="title">
            {{ __('Informações do Usuário') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Atualize seu nome e email') }}
        </x-slot>

        <x-slot name="form">

            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="name" value="{{ __('Nome') }}" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name"
                    autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>


            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="date" value="{{ __('Data de Nascimento') }}" />
                <x-jet-input id="date" type="date" class="mt-1 block w-full" wire:model.defer="state.date" />
                <x-jet-input-error for="date" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="sexo" value="{{ __('Sexo') }}" />
                <x-jet-input id="sexo" type="text" class="mt-1 block w-full" wire:model.defer="state.sexo" />
                <x-jet-input-error for="sexo" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="cpf" value="{{ __('CPF') }}" />
                <x-jet-input id="cpf" type="text" class="mt-1 block w-full" wire:model.defer="state.cpf" />
                <x-jet-input-error for="cpf" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="rg" value="{{ __('RG') }}" />
                <x-jet-input id="rg" type="text" class="mt-1 block w-full" wire:model.defer="state.rg" />
                <x-jet-input-error for="rg" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="telefone" value="{{ __('Telefone') }}" />
                <x-jet-input id="telefone" type="text" class="mt-1 block w-full" wire:model.defer="state.telefone" />
                <x-jet-input-error for="telefone" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="celular" value="{{ __('Celular') }}" />
                <x-jet-input id="celular" type="text" class="mt-1 block w-full" wire:model.defer="state.celular" />
                <x-jet-input-error for="celular" class="mt-2" />
            </div>
            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="cep" value="{{ __('CEP') }}" />
                <x-jet-input id="cep" type="text" class="mt-1 block w-full" wire:model.defer="state.cep" />
                <x-jet-input-error for="cep" class="mt-2"  maxlength="9" onblur="pesquisacep(this.value);" />
            </div>

             <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="rua" value="{{ __('Rua') }}" />
                <x-jet-input id="rua" type="text" class="mt-1 block w-full" wire:model.defer="state.rua" />
                <x-jet-input-error for="rua" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="numero" value="{{ __('Numero') }}" />
                <x-jet-input id="numero" type="text" class="mt-1 block w-full" wire:model.defer="state.numero" />
                <x-jet-input-error for="numero" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="bairro" value="{{ __('Bairro') }}" />
                <x-jet-input id="bairro" type="text" class="mt-1 block w-full" wire:model.defer="state.bairro" />
                <x-jet-input-error for="bairro" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="uf" value="{{ __('Estado') }}" />
                <x-jet-input id="uf" type="text" class="mt-1 block w-full" wire:model.defer="state.uf" />
                <x-jet-input-error for="uf" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="cidade" value="{{ __('Cidade') }}" />
                <x-jet-input id="cidade" type="text" class="mt-1 block w-full" wire:model.defer="state.cidade" />
                <x-jet-input-error for="cidade" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="complemento" value="{{ __('Complemento') }}" />
                <x-jet-input id="complemento" type="text" class="mt-1 block w-full" wire:model.defer="state.complemento" />
                <x-jet-input-error for="complemento" class="mt-2" />
            </div>


        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Dados Alterados') }}
            </x-jet-action-message>

            <x-jet-button wire:loading.attr="disabled" wire:target="photo">
                {{ __('Salvar') }}
            </x-jet-button>
        </x-slot>
    </div>
</x-jet-form-section>
