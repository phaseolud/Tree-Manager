<div class="mb-4 bg-gray-100">
    <div class="w-full bg-gray-200 rounded-full px-2 h-1"></div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <div class="flex items-center">
        <p class="pr-2">{{\Carbon\Carbon::parse($log['created_at'])->format('d-m-Y')}}</p>
        <i class="fa fa-tree text-green-700"></i>
    </div>
    <p>
        {{ $log['log'] }}
    </p>
</div>
