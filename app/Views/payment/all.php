<?= $this->extend('layouts/guest') ?>
<?= $this->section('content') ?>
<div class="overflow-x-auto rounded-md p-10 bg-white">
  <h1 class="text-xl mb-2 font-medium"> All Payments </h1>
  <table class="min-w-full border-collapse border border-gray-300">
    <thead>
      <tr>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Company VAT</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Funding Model</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Contract Nratto</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($payments as $payment ) {?>
        <tr>
        <td class="px-4 py-2 border border-gray-300"><?=$payment['company_id']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$payment['contract_NrAtto']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$payment['funding_model_number']?></td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>