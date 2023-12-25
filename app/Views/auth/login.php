<?= $this->extend('layouts/guest') ?>
<?= $this->section('content') ?>
<form action="<?= site_url('login')?>" method="post" class="bg-white w-96 rounded-md p-6 border flex flex-col gap-y-3">
<h2 class="text-2xl font-semibold mb-2"> Login </h2>
    <div class="flex flex-col gap-y-1">
        <label for="username"> Username </label>
        <input class="p-2 border border-gray-500 focus:border-2 hover:border-2 rounded" type="text" name="username" value="<?=set_value('username')?>" required auto-complete="username" />
    </div>
    <div class="flex flex-col gap-y-1">
        <label for="password"> Password </label>
        <input class="p-2 border border-gray-500 focus:border-2 hover:border-2 rounded" type="password" name="password" required />
        <?php if (isset($error)) { ?>
            <span class="text-red-400"><?=$error?></span>
        <?php } ?>
    </div>

    <div class="flex flex-row justify-center">
        <button type="submit" class="bg-blue-500 text-center w-full text-white py-2 px-4 rounded font-semibold hover:bg-blue-600 focus:outline-none">
            Login
        </button>
    </div>
    <div class="flex flex-col items-center gap-y-2 hidden">
        <a class="border border-gray-500 p-2 rounded w-full text-center hover:opacity-80 hover:underline" href="<?= site_url('login/magic-link') ?>"> Forgot Password?</a>
        <a class="border border-gray-500 p-2 rounded w-full text-center hover:opacity-80 hover:underline" href="<?= site_url('register') ?>"> Create an account </a>
    </div>
</form>
<?= $this->endSection() ?>