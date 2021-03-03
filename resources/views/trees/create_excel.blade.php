<x-custom-layout>
    <p class="text-xl">Voeg bomen toe via excel</p>
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
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel_file"/>
        <button type="submit" class="px-2 py-1 bg-green-700 rounded-lg text-white">Submit</button>
    </form>
</x-custom-layout>
