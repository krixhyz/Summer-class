  <!-- FOOTER -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="max-w-6xl mx-auto text-center">
      <p>&copy; 2025 MyWebsite. All rights reserved.</p>
      <div class="mt-2 space-x-4">
        <a href="#" class="hover:text-blue-400">Facebook</a>
        <a href="#" class="hover:text-blue-400">Twitter</a>
        <a href="#" class="hover:text-blue-400">Instagram</a>
      </div>
    </div>
  </footer>

  <!-- JavaScript for Mobile Menu -->
  <script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
  <script>
  document.getElementById('menu-btn').addEventListener('click', function () {
    document.getElementById('mobile-menu').classList.toggle('hidden');
  });
</script>
