<?php


$person = array();
if (isset($_POST['btn-save'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $pro = $_POST['province'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/output.css">
</head>


<body>


    <div>
        <form class="p-8 w-full max-w-md bg-white rounded-lg shadow-md" action="php2.php" method="post">
            <h2 class="mb-6 text-2xl font-bold text-center">Personal Information</h2>

            <!-- ID -->
            <div class="mb-4">
                <label for="id" class="block mb-2 font-semibold text-gray-700">ID</label>
                <input type="text" id="id" name="id" required
                    class="px-3 py-2 w-full rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block mb-2 font-semibold text-gray-700">Name</label>
                <input type="text" id="name" name="name" required
                    class="px-3 py-2 w-full rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <!-- Gender -->
            <div class="mb-4">
                <label for="gender" class="block mb-2 font-semibold text-gray-700">Gender</label>
                <select id="gender" name="gender" required
                    class="px-3 py-2 w-full rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">--Select Gender--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Phone -->
            <div class="mb-4">
                <label for="phone" class="block mb-2 font-semibold text-gray-700">Phone</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{9,12}" placeholder="Enter phone number"
                    required
                    class="px-3 py-2 w-full rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Province -->
            <div class="mb-6">
                <label for="province" class="block mb-2 font-semibold text-gray-700">Province</label>
                <select id="province" name="province" required
                    class="px-3 py-2 w-full rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">--Select Province--</option>
                    <option value="phnom-penh">Phnom Penh</option>
                    <option value="kandal">Kandal</option>
                    <option value="siem-reap">Siem Reap</option>
                    <option value="kampong-som">Kampong Som</option>
                    <option value="battambang">Battambang</option>
                    <!-- Add more provinces if needed -->
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" name="btn-save"
                class="py-2 w-full font-semibold text-white bg-blue-500 rounded transition-colors hover:bg-blue-600">
                Submit
            </button>
        </form>
    </div>
    <div class="p-6 mx-auto max-w-5xl bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-bold text-center">User List</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="text-left text-white bg-blue-500">
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Gender</th>
                        <th class="px-4 py-3">Phone</th>
                        <th class="px-4 py-3">Province</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <?php if (!empty($id)): ?>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2"><?= $id ?></td>
                            <td class="px-4 py-2">J<?= $name ?></td>
                            <td class="px-4 py-2"><?= $gender ?></td>
                            <td class="px-4 py-2"><?= $phone ?></td>
                            <td class="px-4 py-2"><?= $pro ?></td>
                            <td class="px-4 py-2">
                                <button class="px-2 py-1 text-white bg-green-500 rounded hover:bg-green-600">Edit</button>
                                <button class="px-2 py-1 text-white bg-red-500 rounded hover:bg-red-600">Delete</button>
                            </td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>