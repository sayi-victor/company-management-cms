<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<h2 class="text-2xl font-semibold text-center mb-6"> Update Company  </h2>
    <form method="post" action="/update-company" class="max-w-md mx-auto bg-white p-4 rounded shadow-md">
        <input type="hidden" name="id" value="<?=$company['vat_number']?>">
        <div class="mb-4">
            <label for="companyName" class="block font-semibold mb-1">Company Name</label>
            <input type="text" id="companyName" name="name" value="<?=$company['name']?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['name'])) { ?>
                <span class="text-red-500"><?=$errors['name']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="companyAddress" class="block font-semibold mb-1">Company Address</label>
            <input type="text" id="companyAddress" name="address" value="<?=$company['address']?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['address'])) { ?>
                <span class="text-red-500"><?=$errors['address']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="vatNumber" class="block font-semibold mb-1">VAT Number</label>
            <input type="text" id="vatNumber" name="vat_number" value="<?=$company['vat_number']?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['vat_number'])) { ?>
                <span class="text-red-500"><?=$errors['vat_number']?></span>
            <?php } ?>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 w-1/2 rounded font-semibold hover:bg-blue-600 focus:outline-none">
                Update Company
            </button>
        </div>
    </form>
<?= $this->endSection() ?>