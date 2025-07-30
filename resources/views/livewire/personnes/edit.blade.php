<div>
    <form wire:submit="save" class="flex flex-col gap-6">
       <flux:input
            wire:model="nom"
            label="{{ __('Nom') }}"
            type="text"
            name="nom"
            required
            autofocus
        />
        <flux:input
            wire:model="prenom"
            label="{{ __('Prenom') }}"
            type="text"
            name="nom"
            required
            autofocus
        />

        <flux:input
            wire:model="ccp"
            label="{{ __('Ccp') }}"
            name="ccp"
            required
        />

        <flux:input
            wire:model="cle"
            label="{{ __('Clé') }}"
            name="cle"
            required
        />

        <div>
            <flux:button variant="primary" type="submit">{{ __('Save') }}</flux:button>
        </div>
    </form>
</div>