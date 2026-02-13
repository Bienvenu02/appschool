@extends('app', ['title' => 'Dashboard', 'entete' => 'Tableau de bord'])

@section('content')
    @include('admin.layouts.entete', [
        'entete' => 'dashboard',
        'infos' => 'Commande',
    ])


    <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow transition-colors duration-300 mb-4">
        <h3 class="text-xl font-bold mb-4">Bienvenue sur votre tableau de bord</h3>
        <p>Ceci est un exemple d'interface administrateur avec mode sombre, sous-menus et menu utilisateur.</p>
    </div>

    <x-table.datatable title="La lisate des employés" :columns="['N°', 'Name', 'cree par', 'modifie par']" tableId="Role">
        @foreach ($roles as $index => $role)
            <x-table.tr>
                <x-table.td style="text-align: left">{{ $role->id }}</x-table.td>
                <x-table.td>{{ $role->name }}</x-table.td>
                <x-table.td>{{ $role->userCreated->name }}</x-table.td>
                <x-table.td>{{ $role->userUpdated ? $role->userUpdated->name : 'N/A' }}</x-table.td>
            </x-table.tr>
        @endforeach
    </x-table.datatable>
@endsection
