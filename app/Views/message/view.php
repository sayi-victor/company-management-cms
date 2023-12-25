<?= $this->extend('layouts/guest') ?>
<?= $this->section('content') ?>
<div class="overflow-x-auto rounded-md p-10 bg-white">
  <h1 class="text-xl mb-2 font-medium"> Message</h1>
  <div class="flex flex-row">
    <p class="font-medium mr-2">Sender Name: </p>
    <p> <?=$message['name']?></p>
  </div>
  <div class="flex flex-row">
    <p class="font-medium mr-2">Sender Email: </p>
    <p><?=$message['email']?></p>
  </div>
  <div class="flex flex-row">
    <p class="font-medium mr-2">Sent At: </p>
    <p>
    <?php
    $createdAt = new DateTime($message['created_at']);
    echo $createdAt->format('H:i d M Y');
    ?>
    </p>
</div>

  <div class="flex flex-col">
    <p class="font-medium">Message</p>
    <p><?=$message['message']?></p>
  </div>
</div>
<?= $this->endSection() ?>