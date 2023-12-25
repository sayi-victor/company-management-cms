<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<h2 class="text-2xl font-semibold text-center mb-6"> Add Payment </h2>
<?php if (isset($errors)) {
    print(var_dump($errors));
} ?>
    <form method="post" class="max-w-md mx-auto bg-white p-4 rounded shadow-md">
    <div class="mb-4">
        <label for="company" class="block font-semibold mb-1"> Company </label>
        <select name="company" id=""
            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <option value=""> Choose Company</option>
            <?php
                if (isset($companies) && count($companies) > 0) { 
                    foreach ($companies as $company) { ?>
                    <option value="<?=$company['vat_number']?>"> <?=$company['name']?> </option>
            <?php
                }}     ?>
            </select>
            <?php if (isset($errors['company'])) { ?>
                <span class="text-red-500"><?=$errors['company']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
        <label for="contract" class="block font-semibold mb-1"> Contract </label>
        <select name="contract" id="contract"
            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <option value=""> Choose Contract</option>
            <?php
                if (isset($contracts) && count($contracts) > 0) { 
                    foreach ($contracts as $contract) { ?>
                    <option value="<?=$contract['nr_atto'] ?>"> <?=$contract['nr_atto']?> </option>
            <?php
                }}     ?>
            </select>
            <?php if (isset($errors['contract'])) { ?>
                <span class="text-red-500"><?=$errors['contract']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
        <label for="funding" class="block font-semibold mb-1"> Funding </label>
        <select name="funding" id="funding"
            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <option value=""> Choose Funding</option>
            <?php
                if (isset($fundings) && count($fundings) > 0) { 
                    foreach ($fundings as $funding) { ?>
                    <option value="<?=$funding['model_number']?>"> <?=$funding['model_number'] ?> </option>
            <?php
                }}     ?>
            </select>
            <?php if (isset($errors['funding'])) { ?>
                <span class="text-red-500"><?=$errors['funding']?></span>
            <?php } ?>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 w-1/2 rounded font-semibold hover:bg-blue-600 focus:outline-none">
                Add Payment
            </button>
        </div>
    </form>
    <?= $this->endSection() ?>