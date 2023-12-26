<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<h2 class="text-2xl font-semibold text-center mb-6"> Add funding </h2>
    <form method="post" class="max-w-md mx-auto bg-white p-4 rounded shadow-md">
        <div class="mb-4">
            <label for="vsp" class="block font-semibold mb-1"> VSP </label>
            <input type="text" id="vsp" name="vsp" value="<?=set_value('vsp')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['vsp'])) { ?>
                <span class="text-red-500"><?=$errors['vsp']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="op" class="block font-semibold mb-1"> OP </label>
            <input type="text" id="op" name="op" value="<?=set_value('op')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['op'])) { ?>
                <span class="text-red-500"><?=$errors['op']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="modelNumber" class="block font-semibold mb-1"> Model Number </label>
            <input type="text" id="modelNumber" name="model_number" value="<?=set_value('model_number')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['model_number'])) { ?>
                <span class="text-red-500"><?=$errors['model_number']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="totalAmount" class="block font-semibold mb-1"> Total Amount </label>
            <input type="text" id="totalAmount" name="total_amount" value="<?=set_value('total_amount')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['total_amount'])) { ?>
                <span class="text-red-500"><?=$errors['total_amount']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="allocation" class="block font-semibold mb-1"> Allocation </label>
            <select id="allocation" name="allocation"
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                <option value="">Choose Allocation</option>
                <option value="7120/10">7120/10</option>
                <option value="7120/13">7120/13</option>
                <option value="7120/20">7120/20</option>
                <option value="7120/21">7120/21</option>
                <option value="7120/25">7120/25</option>
                <option value="7120/26">7120/26</option>
                <option value="7120/28">7120/28</option>
            </select>
            <?php if (isset($errors['allocation'])) { ?>
                <span class="text-red-500"><?=$errors['allocation']?></span>
            <?php } ?>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 w-1/2 rounded font-semibold hover:bg-blue-600 focus:outline-none">
                Add Funding
            </button>
        </div>
    </form>
    <script>  
        const amount = document.getElementById('totalAmount');
        const elem = new AutoNumeric(amount).french();    
    </script>
    <?= $this->endSection() ?>