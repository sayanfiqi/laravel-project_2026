<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Campaign</title>
</head>
<body class="bg-gray-100">

<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Edit Campaign</h1>

    <form action="{{ route('campaign.update', $campaign->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Title</label>
            <input type="text" name="title"
                value="{{ $campaign->title }}"
                class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Description</label>
            <textarea name="description"
                class="w-full border rounded px-3 py-2">{{ $campaign->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Target Donation</label>
            <input type="number" name="target_donation"
                value="{{ $campaign->target_donation }}"
                class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Collected Donation</label>
            <input type="number" name="collected_donation"
                value="{{ $campaign->collected_donation }}"
                class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Deadline</label>
            <input type="date" name="deadline"
                value="{{ $campaign->deadline }}"
                class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit"
            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Update
        </button>
    </form>
</div>

</body>
</html>