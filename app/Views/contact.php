<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<h2 class="text-2xl font-semibold text-center mb-6"> Send Message </h2>
    <form method="post" class="max-w-md mx-auto bg-white p-4 rounded shadow-md">
        <div class="mb-4">
            <label for="name" class="block font-semibold mb-1"> Name </label>
            <input type="text" id="name" name="name" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <span class="text-red-600 text-sm">
                <?php if (isset($errors['name'])) {
                    echo $errors['name'];
                } ?>
            </span>
        </div>
        <div class="mb-4">
            <label for="email" class="block font-semibold mb-1"> Email </label>
            <input type="email" id="email" name="email" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                <span class="text-red-600 text-sm">
                    <?php if (isset($errors['email'])) {
                        echo $errors['email'];
                    } ?>
            </span>
        </div>
        <div class="mb-4">
            <label for="message" class="block font-semibold mb-1"> Message </label>
            <textarea name="message" id="message" cols="30" rows="10"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            </textarea>
            <span class="text-red-600 text-sm">
                <?php if (isset($errors['message'])) {
                    echo $errors['message'];
                } ?>
            </span>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 w-1/2 rounded font-semibold hover:bg-blue-600 focus:outline-none">
                Send Message
            </button>
        </div>
    </form>
    <?= $this->endSection() ?>