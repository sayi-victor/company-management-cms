<?= $this->extend('layouts/guest') ?>
<?= $this->section('content') ?>
<div class="overflow-x-auto rounded-md p-10 bg-white">
  <h1 class="text-xl mb-2 font-medium"> All contracts </h1>
  <table class="min-w-full border-collapse border border-gray-300">
    <thead>
      <tr>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">CODE ES</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300"> Model Number</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">ST App</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">CIG</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">NR ATTO</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Contract Value</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Annualities</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Installment Years</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Scelta Contraente</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Company</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($contracts as $contract ) {?>
        <tr>
        <td class="px-4 py-2 border border-gray-300"><?=$contract['code_es']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$contract['model_number']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$contract['st_app']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$contract['cig']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$contract['nr_atto']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$contract['contract_value']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$contract['annualities']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$contract['installment_years']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$contract['scelta_contraente']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$contract['company']?></td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>