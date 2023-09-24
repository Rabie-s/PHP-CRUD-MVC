<?php include(App\Config::LAYOUTS . 'head.php'); ?>

<body class="bg-gray-100">
    <div class="h-screen flex justify-center items-center">

        <form action="login" method="post">
            <div class="w-96 p-4 bg-white rounded-lg">
                <div class="mb-3">
                    <h1 class="text-center text-black text-4xl uppercase">Login</h1>
                </div>

                <?php if (Core\Flash::hasFlash('error')) : ?>
                    <div class="w-full p-1 bg-red-600 rounded">
                        <?php foreach (Core\Flash::getFlash('error') as $error) : ?>
                            <ul class="text-white">
                                <li><?= $error ?></li>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="mb-2">
                    <label class="block text-black mb-1" for="">Email</label>
                    <input class="outline outline-1 w-full px-1 rounded text-lg" name="email" type="text">
                </div>

                <div class="mb-2">
                    <label class="block text-black mb-1" for="">Password</label>
                    <input class="outline outline-1 w-full px-1 rounded text-lg" name="password" type="password">
                </div>
                <div class="mb-2">
                    <button class="py-1 text-white bg-blue-600 hover:bg-blue-700 rounded text-lg w-full" type="submit">Login</button>
                </div>

                <div class="w-full flex justify-center">
                    <a class="text-blue-600" href="<?= App\Config::BASE_URL ?>/register">Register</a>
                </div>


            </div>
        </form>



    </div>


</body>

</html>