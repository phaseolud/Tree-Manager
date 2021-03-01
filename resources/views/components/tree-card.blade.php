<a href="{{ route('trees.show', ['tree' => $tree->id]) }}" class="block bg-green-200 rounded-lg w-full h-32">
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <p class="px-2 pt-3 text-white text-5xl text-gray-700"> {{ $tree['name'] }}</p>
    <p class="px-2 pt-4 text-white text-2xl text-gray-500"> {{ $tree['name_latin'] }}</p>
</a>

