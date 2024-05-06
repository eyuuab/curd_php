<?php include('header.php'); ?>
<h2 class='text-xl text-center font-bold mb-4  py-6'> All Students</h2>
<table class="table-auto max-w-screen-lg mx-auto">
    <thead>
        <tr>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">First_Name</th>
            <th class="px-4 py-2">Last_Name</th>
            <th class="px-4 py-2">Age</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
    </thead>

    <tbody>
        <tr class='hover:bg-gray-100'>
            <td class="border px-4 py-2">1</td>
            <td class="border px-4 py-2">John</td>
            <td class="border px-4 py-2">Doe</td>
            <td class="border px-4 py-2">30</td>
            <td class="border px-4 py-2">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </td>
        </tr>
        <tr class='hover:bg-gray-100'>
            <td class="border px-4 py-2">2</td>
            <td class="border px-4 py-2">Jane</td>
            <td class="border px-4 py-2">Doe</td>
            <td class="border px-4 py-2">28</td>
            <td class="border px-4 py-2">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </td>
        </tr>
        <tr class='hover:bg-gray-100'>
            <td class="border px-4 py-2">2</td>
            <td class="border px-4 py-2">Eyobed</td>
            <td class="border px-4 py-2">Abreham</td>
            <td class="border px-4 py-2">28</td>
            <td class="border px-4 py-2">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </td>
        </tr>
    </tbody>
</table>
<?php include('footer.php'); ?>