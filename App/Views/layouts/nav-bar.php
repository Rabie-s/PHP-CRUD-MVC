<nav class="bg-blue-600 py-3 px-2 min-h-[70px]">

    <div class="hidden md:flex md:justify-between flex-col md:flex-row items-center" id="nav_items">
        <h1 class="text-2xl text-white">MVC-PROJECT</h1>


        <ul class="text-xl my-3 gap-x-4 text-center md:flex">
            <li class="text-white hover:text-black"><a href="<?= App\Config::BASE_URL ?>/admin/students">Home</a></li>
            <li class="text-white hover:text-black"><a href="<?= App\Config::BASE_URL ?>/admin/students/about">About</a></li>
            <li class="text-white hover:text-black"><a href="#">Contact us</a></li>
        </ul>

        <ul class="text-white rounded-lg text-center md:flex md:gap-x-3">
            <li>Welcome <?= $_SESSION['name'] ?></li>
            <li class="hover:text-black"><a href="<?= App\Config::BASE_URL ?>/logout">Logout</a></li>
        </ul>

    </div>

    <div class="md:hidden absolute top-3 right-3 text-2xl text-white cursor-pointer" id="btn">
        <i class="fa-solid fa-bars"></i>
    </div>
</nav>