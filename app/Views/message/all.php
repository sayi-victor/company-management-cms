<?= $this->extend('layouts/guest') ?>
<?= $this->section('content') ?>
<div class="overflow-x-auto rounded-md p-10 bg-white">
  <h1 class="text-xl mb-2 font-medium"> All Messages </h1>
  <?php if (count($messages) > 0 ) { ?>
    <table class="min-w-full border-collapse border border-gray-300">
    <thead>
      <tr>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Sender Name</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Sender Email</th>
        <th class="px-4 py-2 bg-gray-200 border border-gray-300">Message</th>
        <th colspan="2" class="px-4 py-2 bg-gray-200 border border-gray-300">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($messages as $message ) {?>
        <tr>
        <td class="px-4 py-2 border border-gray-300"><?=$message['name']?></td>
        <td class="px-4 py-2 border border-gray-300"><?=$message['email']?></td>
        <td class="px-4 py-2 border border-gray-300">
          <?= strlen($message['message']) > 20 ? substr($message['message'], 0, 20) . '...' : $message['message'] ?>
        </td>
        <td colspan="2" class="px-4 flex flex-row flex-nowrap py-2 border border-gray-300">
          <a class="hover:underline mr-2 bg-blue-500 p-2 text-white rounded-md" href="/message/view?id=<?=$message['id']?>">View</a>
          <form action="/message/delete" method="post">
            <input type="hidden" name="id" value="<?=$message['id']?>" />
            <button type="submit" class="bg-red-200 text-red-700 rounded-md p-2 hover:bg-red-300">Delete</button>
          </form>
        </td>
      </tr>
    <?php }?>
    </tbody>
  </table>
  <?php } 
   if (count($messages) == 0) {
    echo 'You have no messages';
  } ?>
</div>
<?= $this->endSection() ?>