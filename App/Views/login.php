<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= App\Config::ASSETS ?>style/tailwind/output.css">
    <title>CLI</title>
</head>

<body class="bg-gray-100">
    <div class="h-screen flex justify-center items-center">

        <form action="login" method="post">
            <div class="w-96 p-4 bg-white rounded-lg">
                <div class="mb-3">
                    <h1 class="text-center text-black text-4xl uppercase">Login</h1>
                </div>

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
            </div>
        </form>

    </div>


</body>

</html>