<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= App\Config::ASSETS ?>style/tailwind/output.css">
    <title>CLI</title>
</head>

<body class="bg-slate-700">

    <div class="container mx-auto">

        <div class="bg-slate-800 rounded-lg">

            <div class="space-x-3 mt-10">
                <button class="btn-primary px-3">Add student</button>
                <button class="btn-emerald px-3">Students</button>
            </div>

            <table class="text-white w-full">
                <thead class="border-b-2 bg-slate-900 ">
                    <tr>
                        <th class="text-left text-xl p-2">Name</th>
                        <th class="text-left text-xl p-2">Email</th>
                        <th class="text-left text-xl p-2">Phone number</th>
                        <th class="text-left text-xl p-2">Address</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data['students'] as $student) : ?>
                        <tr class="odd:bg-slate-700">
                            <td class="text-base p-2 mb-5"><?= $student['full_name'] ?></td>
                            <td class="text-base p-2 mb-5"><?= $student['email'] ?></td>
                            <td class="text-base p-2 mb-5"><?= $student['phone_number'] ?></td>
                            <td class="text-base p-2 mb-5"><?= $student['address'] ?></td>
                            <td class="space-x-3">
                                <a class="text-sky-600" href="http://">Edit</a>
                                <a class="text-red-600" href="http://">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>

</body>

</html>