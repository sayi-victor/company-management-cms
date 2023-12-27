<footer class="bg-inherit text-[#002e62] border-t-2 border-t-[#002e62] p-3 w-screen">
  <div class="flex flex-row items-center gap-x-6 px-5">
    <img src="<?=base_url('assets/'.$_ENV['app.logo'])?>" class="max-w-[100px] max-h-[100px]" alt="company_logo">
    <div class="flex flex-col">
    <span class="text-lg text-gray-600 font-medium"><?= $_ENV['app.info'] ?></span>
    <span class="text-gray-500"> <i class="fas mr-1 fa-envelope"></i><?= $_ENV['app.email'] ?></span>
    </div>
  </div>
  <div class="flex flex-row justify-center">
    <ul class=" flex-row justify-evenly text-lg max-w-lg hidden gap-x-4">
      <li><a class="hover:underline" href="/">Home</a></li>
      <li><a class="hover:underline" href="/about">About Us</a></li>
      <li><a class="hover:underline" href="/services">Services</a></li>
      <li><a class="hover:underline" href="/portfolio">Portfolio</a></li>
      <li><a class="hover:underline" href="/blog">Blog</a></li>
      <li><a class="hover:underline" href="/contact">Contact Us</a></li>
    </ul>
  </div>

  <div class="hidden flex-row justify-center gap-x-2 my-2">
    <a class="hover:underline" href="https://www.facebook.com" target="_blank">Facebook</a>
    <a class="hover:underline" href="https://www.twitter.com" target="_blank">Twitter 
    </a>
    <a class="hover:underline" href="https://www.linkedin.com" target="_blank">LinkedIn</a>
    <a class="hover:underline" href="https://www.instagram.com" target="_blank">Instagram</a>
  </div>

  <div class="flex flex-row justify-center items-center text-gray-400">
    <p>  &copy; <?php echo date('Y'); ?> Your Company Name. &nbsp; </p>
    <p> All Rights Reserved </p>
  </div>
</footer>
<script>
  const toggleBtn = document.getElementById('toggle-logout');
  const logoutForm = document.getElementById('logout-form');

  toggleBtn.addEventListener('click', () => {
    logoutForm.classList.toggle('hidden');
  });
</script>