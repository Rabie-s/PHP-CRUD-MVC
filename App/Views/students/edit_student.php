<?php include(App\Config::LAYOUTS . 'head.php'); ?>

<body class="bg-gray-100">

    <?php include(App\Config::LAYOUTS . 'nav-bar.php'); ?>

    <div class="container mx-auto">

        <?php include(App\Config::LAYOUTS . 'button-group.php'); ?>

        <?php foreach ($data['student'] as $student) : ?>
            <form action="<?= App\Config::BASE_URL ?>/admin/students/update/<?= $student['id'] ?>" method="post">

                <div class="p-4 bg-white rounded-lg">
                    <div class="mb-3">
                        <h1 class="text-center text-white text-4xl uppercase">edit student</h1>
                    </div>

                    <?php if (Core\Flash::hasFlash('errors')) : ?>
                        <div class="w-full p-1 bg-red-600 rounded">
                            <?php foreach (Core\Flash::getFlash('errors') as $error) : ?>
                                <ul class="text-white">
                                    <li><?= $error ?></li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <label class="block text-black mb-2 text-lg">Full name</label>
                        <input class="outline outline-1 w-full px-1 rounded text-lg" value="<?= $student['full_name'] ?>" name="full_name" type="text">
                    </div>

                    <div class="mb-3">
                        <label class="block text-black mb-2 text-lg">Email</label>
                        <input class="outline outline-1 w-full px-1 rounded text-lg" value="<?= $student['email'] ?>" name="email" type="text">
                    </div>

                    <div class="mb-3">
                        <label class="block text-black mb-2 text-lg">Phone number</label>
                        <input class="outline outline-1 w-full px-1 rounded text-lg" value="<?= $student['phone_number'] ?>" name="phone_number" type="text">
                    </div>

                    <div class="mb-3">
                        <label class="block text-black mb-2 text-lg">Address</label>
                        <input class="outline outline-1 w-full px-1 rounded text-lg" value="<?= $student['address'] ?>" name="address" type="text">
                    </div>

                    <div class="mb-3">
                        <button class="py-1 text-white bg-blue-600 hover:bg-blue-700 rounded text-lg w-full" type="submit">Update student</button>
                    </div>
                </div>

            </form>

        <?php endforeach; ?>

    </div>

    <?php include(App\Config::LAYOUTS . 'footer.php'); ?>