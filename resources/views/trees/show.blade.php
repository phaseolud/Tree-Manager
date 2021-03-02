<x-custom-layout>
    <div class="bg-local bg-green-500 w-full h-64">

    </div>
    <div class="bg-white rounded-t-2xl w-full h-screen transform -translate-y-12 px-2">
        <div class="flex justify-between pt-6 pb-4">
            <div>
                <p class="text-3xl text-gray-800"> {{ $tree['name'] }}</p>
                <p class="text-xl text-gray-700">{{ $tree['name_latin'] }}</p>
            </div>

            <div class="text-right">
                <p class="text-base text-gray-600">Bloeiperiode: week {{ $tree['bloom_start_week'] . ' - ' . $tree['bloom_end_week'] }}</p>
                <p class="text-base text-gray-600">Oogstperiode: week {{ $tree['harvest_start_week'] . ' - ' . $tree['harvest_end_week'] }}</p>
            </div>
        </div>
        <p>Geplant op: {{ $tree['planting_date'] }}</p>
        <p>Onderstam: {{ $tree['rootstock'] }}</p>
        <div class="py-4">
            <p class="text-xl">Beschrijving</p>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fugiat officiis qui rerum tenetur voluptates. Consequuntur, cumque distinctio dolorem et facilis fuga, inventore magnam nam porro quas quisquam repudiandae vero? </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deleniti dolorem labore nihil quod similique vel. Atque, culpa distinctio dolore expedita fugit quaerat. Consequuntur, eaque error maxime mollitia suscipit vero.</p>
        </div>


        <div class="pt-2">
            <p class="text-xl pb-2">Logboek</p>
            @foreach($tree->logs as $log)
                <x-tree-log :log="$log"/>
            @endforeach
        </div>
    </div>
</x-custom-layout>
