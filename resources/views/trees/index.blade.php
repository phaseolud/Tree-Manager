<x-custom-layout>
    @foreach($trees as $tree)
        <x-tree-card :tree="$tree" />
    @endforeach
</x-custom-layout>
