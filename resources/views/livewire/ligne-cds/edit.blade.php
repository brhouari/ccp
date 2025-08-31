<div>
    <form wire:submit="save" class="flex flex-col gap-6">
       

        <flux:input
            wire:model="montant"
            label="{{ __('Montant') }}"
            name="cle"
            required
        />

        <div>
            <flux:button variant="primary" type="submit">{{ __('Save') }}</flux:button>
        </div>
    </form>
</div>