<a href="{{ route('trees.show', ['tree' => $tree->id]) }}" class="block bg-green-300 rounded-lg w-full h-32 mb-3">
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <p class="px-2 pt-3 text-3xl text-gray-700"> {{ $tree['name'] }}</p>
    <p class="px-2 pt-1 text-xl text-gray-700">{{$tree['species']}}</p>
    <p class="px-2 pt-1 text-xl text-gray-600"> {{ $tree['name_latin'] }}</p>
</a>

