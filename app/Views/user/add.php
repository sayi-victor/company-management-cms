<?= $this->extend('layouts/guest') ?>
<?= $this->section('content') ?>
<form method="post" class="bg-white w-96 rounded-md p-6 border flex flex-col gap-y-3">
<h2 class="text-2xl font-semibold mb-2"> Add new user</h2>
    <div class="flex flex-col gap-y-1">
        <label for="email"> Email Address </label>
        <input class="p-2 border border-gray-500 focus:border-2 hover:border-2 rounded" type="email" name="email" value="<?=set_value('email')?>" required />
        <?php if (isset($errors['email'])) { ?>
            <span class="text-red-400"><?=$errors['email']?></span>
        <?php } ?>
    </div>
    <div class="flex flex-col gap-y-1">
        <label for="email"> Username </label>
        <input class="p-2 border border-gray-500 focus:border-2 hover:border-2 rounded" type="username" name="username" value="<?=set_value('username')?>" required />
        <?php if (isset($errors['username'])) { ?>
            <span class="text-red-400"><?=$errors['username']?></span>
        <?php } ?>
    </div>
    <div class="flex flex-col gap-y-1">
        <label for="password"> Password </label>
        <input class="p-2 border border-gray-500 focus:border-2 hover:border-2 rounded" type="password" name="password" required />
        <?php if (isset($errors['password'])) { ?>
            <span class="text-red-400"><?=$errors['password']?></span>
        <?php } ?>
    </div>
    <div class="flex flex-col gap-y-1">
        <label for="confirm-password"> Confirm Password </label>
        <input class="p-2 border border-gray-500 focus:border-2 hover:border-2 rounded" type="password" name="confirm_password" required />
        <?php if (isset($errors['confirm_password'])) { ?>
            <span class="text-red-400"><?=$errors['confirm_password']?></span>
        <?php } ?>
    </div>
    <div class="flex flex-row justify-center">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 w-full text-center rounded font-semibold hover:bg-blue-600 focus:outline-none">
            Add User
        </button>
    </div>
</form>
<?= $this->endSection() ?>