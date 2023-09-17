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

        <form action="login" method="post">
            <div class="w-96 p-4 bg-slate-800 rounded-lg">
                <div class="mb-3">
                    <h1 class="text-center text-white text-4xl uppercase">Login</h1>
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
                    <button class="btn-emerald w-full" type="submit">Login</button>
                </div>
            </div>
        </form>

    </div>


</body>

</html>