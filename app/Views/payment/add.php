<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<h2 class="text-2xl font-semibold text-center mb-6"> Add Payment </h2>
    <form method="post" class="max-w-md mx-auto bg-white p-4 rounded shadow-md">
    <div class="mb-4">
        <label for="company" class="block font-semibold mb-1"> Company </label>
        <select name="company_id"  required
            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <option value=""> Choose Company</option>
            <?php
                if (isset($companies) && count($companies) > 0) { 
                    foreach ($companies as $company) { ?>
                    <option value="<?=$company['vat_number']?>"> <?=$company['name']?> </option>
            <?php
                }}     ?>
            </select>
            <?php if (isset($errors['company_id'])) { ?>
                <span class="text-red-500"><?=$errors['company_id']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
        <label for="contract" class="block font-semibold mb-1"> Contract </label>
        <select name="contract_NrAtto" id="contract" required
            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <option value=""> Choose Contract</option>
            <?php
                if (isset($contracts) && count($contracts) > 0) { 
                    foreach ($contracts as $contract) { ?>
                    <option value="<?=$contract['nr_atto'] ?>"> <?=$contract['nr_atto']?> </option>
            <?php
                }}     ?>
            </select>
            <?php if (isset($errors['contract_NrAtto'])) { ?>
                <span class="text-red-500"><?=$errors['contract_NrAtto']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
        <label for="funding" class="block font-semibold mb-1"> Funding </label>
        <select name="funding_model_number" id="funding" required
            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <option value=""> Choose Funding</option>
            <?php
                if (isset($fundings) && count($fundings) > 0) { 
                    foreach ($fundings as $funding) { ?>
                    <option value="<?=$funding['model_number']?>"> <?=$funding['model_number'] ?> </option>
            <?php
                }}     ?>
            </select>
            <?php if (isset($errors['funding_model_number'])) { ?>
                <span class="text-red-500"><?=$errors['funding_model_number']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="amount" class="block font-semibold mb-1"> Amount </label>
            <input type="text" id="amount" name="amount" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['amount'])) { ?>
                <span class="text-red-500"><?=$errors['amount']?></span>
            <?php } ?>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 w-1/2 rounded font-semibold hover:bg-blue-600 focus:outline-none">
                Add Payment
            </button>
        </div>
    </form>
    <script>  
        const amount = document.getElementById('amount');
        const elem = new AutoNumeric(amount).french();    
    </script>
    <?= $this->endSection() ?>