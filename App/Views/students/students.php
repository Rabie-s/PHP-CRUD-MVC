<?php include(App\Config::LAYOUTS . 'head.php'); ?>

<body class="bg-white">
    <?php include(App\Config::LAYOUTS . 'nav-bar.php'); ?>
    <div class="container mx-auto">

        <?php include(App\Config::LAYOUTS . 'button-group.php'); ?>

        <div class="bg-white rounded-lg">

            <div class="overflow-auto rounded-lg shadow">
                <table class="text-black w-full">
                    <thead class="border-b-2 bg-gray-200">
                        <tr>
                            <th class="text-left text-lg p-2">Name</th>
                            <th class="text-left text-lg p-2">Email</th>
                            <th class="text-left text-lg p-2">Phone number</th>
                            <th class="text-left text-lg p-2">Address</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data['students'] as $student) : ?>
                            <tr class="odd:bg-gray-100">
                                <td class="text-base p-2 mb-5 whitespace-nowrap"><?= $student['full_name'] ?></td>
                                <td class="text-base p-2 mb-5 whitespace-nowrap"><?= $student['email'] ?></td>
                                <td class="text-base p-2 mb-5 whitespace-nowrap"><?= $student['phone_number'] ?></td>
                                <td class="text-base p-2 mb-5 whitespace-nowrap"><?= $student['address'] ?></td>
                                <td class="space-x-3 whitespace-nowrap">
                                    <a href='<?= App\Config::BASE_URL ?>/admin/students/edit/<?= $student['id'] ?>' class="text-blue-600" href="http://">Edit</a>
                                    <a href='<?= App\Config::BASE_URL ?>/admin/students/delete/<?= $student['id'] ?>' class="text-red-600" href="http://">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

    <?php include(App\Config::LAYOUTS . 'footer.php'); ?>