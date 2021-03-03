<x-custom-layout>
    <div class="p-2">
    <p class="text-xl text-gray-800 pb-2">Voeg een boom toe</p>
        <div>
            @if ($errors->any())
                <div class="bg-red-300 border-red-500 px-2 py-1 m-1">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    <form action="{{route('trees.store')}}" method="POST">
        @csrf
        <x-text-input label="Naam" field="name"/>
        <x-text-input label="Latijnse naam" field="name_latin"/>
        <x-text-input label="Onderstam" field="rootstock"/>
        <x-text-input label="Origine" field="origin_from"/>
        <x-text-input label="Beschrijving" field="body"/>
        <x-date-input label="Plant datum" field="planting_date" />

        <x-date-range-input label="Bloei Periode" field="bloom" />
        <x-date-range-input label="Oogst Periode" field="harvest" />
        <button class="bg-green-700 px-2 py-1 text-white" type="submit">Sla op</button>
    </form>
    </div>
</x-custom-layout>
