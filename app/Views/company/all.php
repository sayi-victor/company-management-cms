<?= $this->extend('layouts/guest') ?>
<?= $this->section('content') ?>
<div class="overflow-x-auto rounded-md p-10 bg-white">
  <h1 class="text-xl mb-2 font-medium"> All Companies </h1>
  <?php if (count($companies) > 0 ) { ?>
  <table class="min-w-full border-collapse border border-gray-300">
    <thead>
      <tr>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Name</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Model Number</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Address</th>
        <?php $session = session();
          if ($session->has('role')) {
            $role = $session->get('role');

            if ($role == 'admin') {  
          ?>
            <th colspan="2" class="px-4 py-2 bg-gray-200 border border-gray-300">Action</th>
        <?php } }?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($companies as $company ) {?>
        <tr>
        <td class="px-4 py-2 border border-gray-300"><?=$company['name']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$company['vat_number']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$company['address']?></td>
        <?php
          if ($session->has('role')) {
            $role = $session->get('role');

            if ($role == 'admin') {  ?>
          <td colspan="2" class="px-4 flex flex-row flex-nowrap py-2 border border-gray-300">
            <a class="hover:underline mr-2 bg-blue-500 p-2 text-white rounded-md" href="/company/edit?id=<?=$company['vat_number']?>">Edit</a>
            <form action="/company/delete" method="post">
              <input type="hidden" name="id" value="<?=$company['vat_number']?>" />
              <button type="submit" class="bg-red-200 text-red-700 rounded-md p-2 hover:bg-red-300">Delete</button>
            </form>
          </td>
        <?php } } ?>
      </tr>
    <?php }?>
    </tbody>
  </table>
  <?php } 
   if (count($companies) == 0) {
    echo 'No companies found';
  } ?>
</div>
<?= $this->endSection() ?>