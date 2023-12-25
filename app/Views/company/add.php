<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<h2 class="text-2xl font-semibold text-center mb-6"> Company Registration Form </h2>
    <form method="post" class="max-w-md mx-auto bg-white p-4 rounded shadow-md">
        <div class="mb-4">
            <label for="companyName" class="block font-semibold mb-1">Company Name</label>
            <input type="text" id="companyName" name="name" value="<?=set_value('name')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['name'])) { ?>
                <span class="text-red-500"><?=$errors['name']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="companyAddress" class="block font-semibold mb-1">Company Address</label>
            <input type="text" id="companyAddress" name="address" value="<?=set_value('address')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['address'])) { ?>
                <span class="text-red-500"><?=$errors['address']?></span>
            <?php } ?>
        </div>
        <div class="mb-4">
            <label for="vatNumber" class="block font-semibold mb-1">VAT Number</label>
            <input type="text" id="vatNumber" name="vat_number" value="<?=set_value('vat_number')?>" required
                class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <?php if (isset($errors['vat_number'])) { ?>
                <span class="text-red-500"><?=$errors['vat_number']?></span>
            <?php } ?>
        </div>
        <label for="currencyInput">Enter Currency:</label>
  <input type="text" id="currencyInput" oninput="formatCurrency(this)">
  
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 w-1/2 rounded font-semibold hover:bg-blue-600 focus:outline-none">
                Add Company
            </button>
        </div>
    </form>
    <script>
    function formatCurrency(input) {
      // Get the input value and remove non-numeric characters
      let value = input.value.replace(/[^\d.]/g, '');

      // Split the value into whole and decimal parts
      let parts = value.split('.');
      let wholePart = parts[0];
      let decimalPart = parts[1] ? '.' + parts[1] : '';

      // Format the whole part of the number
      wholePart = wholePart.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

      // Update the input value with formatted currency
      input.value = wholePart + decimalPart;
    }
  </script>
<?= $this->endSection() ?>