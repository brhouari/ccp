<div class="h-full w-full flex-1">

    <flux:button :href="route('cds.create')" class="mb-4">
        Créer
    </flux:button>

    <div class="min-w-full align-middle">
        <table class="min-w-full divide-y divide-gray-200 border">
            <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Titre</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Actions</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Benificiaire</span>
                </th>
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            @foreach($cds as $cd)
                <tr class="bg-white">
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        {{ $cd->title }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        <flux:button :href="route('cds.edit', $cd)">Modifier</flux:button>
                        <flux:button variant="danger" wire:click="delete({{ $cd->id }})" wire:confirm="Are you sure?">Supprimer</flux:button>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                       <flux:button :href="route('ligne-cds.index', $cd)">Ajouter</flux:button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-2">
        {{ $cds->links() }}
    </div>

</div>