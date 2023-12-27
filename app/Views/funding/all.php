<?= $this->extend('layouts/guest') ?>
<?= $this->section('content') ?>
<div class="overflow-x-auto rounded-md p-10 bg-white">
  <h1 class="text-xl mb-2 font-medium"> All Fundings </h1>
  <?php if (count($fundings) > 0 ) { ?>
  <table class="min-w-full border-collapse border border-gray-300">
    <thead>
      <tr>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">VSP</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">OP</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Model Number</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Total Amount</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Allocation</th>
        <?php $session = session();
          if ($session->has('role')) {
            $role = $session->get('role');

            if ($role == 'admin') {  
          ?>
            <th colspan="2" class="px-4 py-2 bg-gray-200 border border-gray-300">Action</th>
        <?php } }?>
      </tr>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($fundings as $funding ) {?>
        <tr>
        <td class="px-4 py-2 border border-gray-300"><?=$funding['vsp']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$funding['op']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$funding['model_number']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$funding['total_amount']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$funding['allocation']?></td>
        <?php
          if ($session->has('role')) {
            $role = $session->get('role');
            if ($role == 'admin') {  ?>
          <td colspan="2" class="px-4 flex flex-row flex-nowrap py-2 border border-gray-300">
            <a class="hover:underline mr-2 bg-blue-500 p-2 text-white rounded-md" href="/funding/edit?id=<?=$funding['id']?>">Edit</a>
            <form action="/funding/delete" method="post">
              <input type="hidden" name="id" value="<?=$funding['id']?>" />
              <button type="submit" class="bg-red-200 text-red-700 rounded-md p-2 hover:bg-red-300">Delete</button>
            </form>
          </td>
        <?php } } ?>
      </tr>
    <?php }?>
    </tbody>
  </table>
  <?php } 
   if (count($fundings) == 0) {
    echo 'No fundings found';
  } ?>
</div>
<?= $this->endSection() ?>