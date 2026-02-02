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
        <form class="bg-white p-8 rounded-lg shadow-md w-full max-w-md" action="php2.php" method="post">
            <h2 class="text-2xl font-bold mb-6 text-center">Personal Information</h2>

            <!-- ID -->
            <div class="mb-4">
                <label for="id" class="block text-gray-700 font-semibold mb-2">ID</label>
                <input type="text" id="id" name="id" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Gender -->
            <div class="mb-4">
                <label for="gender" class="block text-gray-700 font-semibold mb-2">Gender</label>
                <select id="gender" name="gender" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">--Select Gender--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Phone -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{9,12}" placeholder="Enter phone number" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Province -->
            <div class="mb-6">
                <label for="province" class="block text-gray-700 font-semibold mb-2">Province</label>
                <select id="province" name="province" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
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
                class="w-full bg-blue-500 text-white font-semibold py-2 rounded hover:bg-blue-600 transition-colors">
                Submit
            </button>
        </form>
    </div>
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">User List</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-blue-500 text-white text-left">
                        <th class="py-3 px-4">ID</th>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Gender</th>
                        <th class="py-3 px-4">Phone</th>
                        <th class="py-3 px-4">Province</th>
                        <th class="py-3 px-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <?php if (!empty($id)): ?>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-2 px-4"><?= $id ?></td>
                            <td class="py-2 px-4">J<?= $name ?></td>
                            <td class="py-2 px-4"><?= $gender ?></td>
                            <td class="py-2 px-4"><?= $phone ?></td>
                            <td class="py-2 px-4"><?= $pro ?></td>
                            <td class="py-2 px-4">
                                <button class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">Edit</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                            </td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>