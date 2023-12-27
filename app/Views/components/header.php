<header class="text-gray-50 p-3 w-screen">
<nav class="flex flex-row justify-between px-6">
    <div class="logo flex flex-row flex-nowrap">
      <h3 class="uppercase font-2xl font-semibold mr-5 ">
        <?= $_ENV['app.name'] ?>
      </h3>  
      <nav>
        <ul class="flex relative flex-row flex-nowrap gap-x-4">
          <li>
            <a class="hover:underline" href="/"> Home </a>
          </li>
          <li >
            <a class="hover:underline" href="/contact-us"> Contact Us </a>
          </li>
        </ul>
      </nav>
    </div>
    <?php $session = session();
    if ($session->has('id')) { ?>
    <button id="toggle-logout" class="bg-blue-700 hover:bg-blue-800 text-white p-2 rounded">
      Welcome, <?=$session->get('username')?>
    </button>
  </nav>
  <form class="logout hidden" id="logout-form" action="<?= site_url('logout')?>" method="post">
  <button type="submit" class="bg-blue-500 text-center w-full text-white py-2 px-4 rounded font-semibold hover:bg-blue-600 focus:outline-none"> <i class="fas mr-2 fa-power-off"></i>Logout </button>
  </form>
  <?php } ?>
</header>