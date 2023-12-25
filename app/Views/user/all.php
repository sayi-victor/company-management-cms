<?= $this->extend('layouts/guest') ?>
<?= $this->section('content') ?>
<div class="overflow-x-auto rounded-md p-10 bg-white">
  <h1 class="text-xl mb-2 font-medium"> All Users </h1>
  <table class="min-w-full border-collapse border border-gray-300">
    <thead>
      <tr>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Username</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user ) {?>
        <tr>
        <td class="px-4 py-2 border border-gray-300"><?=$user['username']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$user['email']?></td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>