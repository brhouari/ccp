<div class="max-w-xl mx-auto mt-8">

    

    <form wire:submit.prevent="save" class="space-y-6">

        <!-- Sélection du nom -->
        <div>
            <flux:label for="selected_nom" >Nom de la personne</flux:label>
            <flux:select wire:model.live="selected_id" id="selected_id">
                <option value="">-- Choisir un nom --</option>
                @foreach($personnes as $personne)
                    <option value="{{ $personne['id'] }}"> {{ $personne['nom'] }} {{ $personne['prenom'] }}</option>
                @endforeach
            </flux:select>
            
        </div>

            <div>
                <flux:label for="nom">prenom</flux:label>
                <flux:input id="nom" type="text" wire:model="nom" />
            </div>

            <!-- prenom -->
            <div>
                <flux:label for="prenom">prenom</flux:label>
                <flux:input id="prenom" type="text" wire:model="prenom" />
            </div>

            <!-- Téléphone -->
            <div>
                <flux:label for="ccp">ccp</flux:label>
                <flux:input id="ccp" type="text" wire:model="ccp" />
            </div>

             <div>
                <flux:label for="cle">cle</flux:label>
                <flux:input id="cle" type="text" wire:model="cle" />
            </div>

             <div>
                <flux:label for="montant">montant</flux:label>
                <flux:input id="montant" type="text" wire:model="montant" />
            </div>

        <div>
            <flux:button type="submit" color="primary">
                Enregistrer
            </flux:button>
        </div>
    </form>
</div>
