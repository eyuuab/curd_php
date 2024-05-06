<?php include ('header.php'); ?>
<?php include ('dbcon.php'); ?>

<body>
    <h1 class="text-3xl text-center font-bold mb-4 bg-black py-6 text-white">CRUD Operation in PHP</h1>

    <div class='container'>
        <!-- add student form -->

        <div id="addStudentForm" class="hidden">
            <h2 class="text-xl text-center font-bold py-6">Add Student</h2>
            <form method="POST" action="add_student.php" class="max-w-2xl mx-auto">
                <div class="flex flex-col mb-4">
                    <label for="first_name" class="font-bold mb-2">First Name:</label>
                    <input type="text" id="first_name" name="first_name" class="border px-4 py-2">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="last_name" class="font-bold mb-2">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" class="border px-4 py-2">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="age" class="font-bold mb-2">Age:</label>
                    <input type="number" id="age" name="age" class="border px-4 py-2">
                </div>
                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </form>
        </div>

        <!-- edit students  -->

        <div id='editStudentForm' class='hidden'>
            <h2 class='text-xl text-center font-bold py-6'>Edit Student</h2>
            <form method='POST' action='edit_student.php' class='max-w-2xl mx-auto'>
                <input type="hidden" id="edit_id" name="edit_id">
                <div class='flex flex-col mb-4'>
                    <label for='edit_first_name' class='font-bold mb-2'>First Name:</label>
                    <input type='text' id='edit_first_name' name='edit_first_name' class='border px-4 py-2'>
                </div>
                <div class='flex flex-col mb-4'>
                    <label for="edit_last_name" class="font-bold mb-2">Last Name></label>
                    <input type="text" id="edit_last_name" name="edit_last_name" class="border px-4 py-2">
                </div>
                <div class='flex flex-col mb-4'>
                    <label for='edit_age' class='font-bold mb-2'>Age:</label>
                    <input type='number' id='edit_age' name='edit_age' class='border px-4 py-2'>
                </div>
                <button type='submit'
                    class='bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded'>Save Changes</button>
            </form>
        </div>

        <div class="flex justify-between  max-w-2xl mx-auto ">
            <h2 class="text-xl text-center font-bold py-6">All Students</h2>
            <button id="addStudentButton"
                class="bg-green-500 text-sm hover:bg-green-700 w-20 h-12 text-white font-bold py-1 px-4 rounded mt-4">Add
                Student</button>
        </div>
        <table class="table-auto max-w-2xl mx-auto">
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
                <!-- fetch data -->
                <?php

                $query = "SELECT * FROM students";

                $res = mysqli_query($connection, $query);

                if (!$res) {
                    die("QUERY FAILED" . mysqli_error($connection));
                } else {
                    while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr class='hover:bg-gray-100'>
                            <td class="border px-4 py-2 id"><?php echo $row['id']; ?></td>
                            <td class="border px-4 py-2 first_name"><?php echo $row['first_name']; ?></td>
                            <td class="border px-4 py-2 last_name"><?php echo $row['last_name']; ?></td>
                            <td class="border px-4 py-2 age"><?php echo $row['age']; ?></td>

                            <!-- delet student -->
                            <td class=" flex border px-4 py-2 ">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2 edit-btn">Edit</button>
                                <form method="POST" action="delete_student.php">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            </td>
                            <?php
                    }
                }

                ?>

            </tbody>
        </table>

    </div>

    <script>

        document.addEventListener("DOMContentLoaded", function () {
            const addButton = document.querySelector('#addStudentButton');
            const addStudentForm = document.querySelector('#addStudentForm');
            const editStudentForm = document.querySelector('#editStudentForm');

            addButton.addEventListener('click', function () {
                addStudentForm.classList.toggle('hidden');
            });

            const editButtons = document.querySelectorAll('.edit-btn');

            editButtons.forEach(button => {
                button.addEventListener('click', function () {
                    editStudentForm.classList.toggle('hidden');

                    // Populate form with current student's data
                    const row = button.closest('tr');
                    const id = row.querySelector('.id').innerText;
                    const firstName = row.querySelector('.first_name').innerText;
                    const lastName = row.querySelector('.last_name').innerText;
                    const age = row.querySelector('.age').innerText;

                    document.querySelector('#edit_id').value = id;
                    document.querySelector('#edit_first_name').value = firstName;
                    document.querySelector('#edit_last_name').value = lastName;
                    document.querySelector('#edit_age').value = age;
                });
            });
        });
    </script>

</body>

</html>