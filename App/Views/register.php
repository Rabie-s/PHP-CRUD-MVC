<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= App\Config::ASSETS ?>style/tailwind/output.css">
    <title>CLI</title>
</head>

<body class="bg-slate-700">



    <div class="h-screen flex justify-center items-center">

        <div class="w-96 p-4 bg-slate-800 rounded-lg">
            <div class="mb-3">
                <h1 class="text-center text-white text-4xl uppercase">Register</h1>
            </div>

            <?php if (Core\Flash::hasFlash('error')) : ?>
                <div class="w-full p-1 bg-red-700 rounded">
                    <?php foreach (Core\Flash::getFlash('error') as $error) : ?>
                        <ul class="text-white">
                            <li><?= $error ?></li>
                        </ul>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form action="register/store" method="post">
                <div class="mb-2">
                    <label class="block text-white mb-1" for="">Name</label>
                    <input class="input" name="name" type="text">
                </div>

                <div class="mb-2">
                    <label class="block text-white mb-1" for="">Email</label>
                    <input class="input" name="email" type="text">
                </div>

                <div class="mb-2">
                    <label class="block text-white mb-1" for="">Password</label>
                    <input class="input" name="password" type="password">
                </div>

                <div class="mb-2">
                    <button class="btn-emerald w-full" type="submit">Register</button>
                </div>
            </form>


        </div>


    </div>


</body>

</html>