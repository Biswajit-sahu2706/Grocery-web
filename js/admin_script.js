// Admin Dashboard Script
document.addEventListener('DOMContentLoaded', function() {
   const sidebarToggle = document.getElementById('sidebar-toggle');
   const sidebar = document.querySelector('.sidebar');
   const mainContent = document.querySelector('.main-content');
   const profile = document.querySelector('.header-profile');

   // Sidebar toggle
   if (sidebarToggle) {
      sidebarToggle.addEventListener('click', function() {
         sidebar.classList.toggle('collapsed');
         mainContent.classList.toggle('expanded');
      });
   }

   // Profile dropdown toggle
   if (profile) {
      profile.addEventListener('click', function(e) {
         e.stopPropagation();
         const dropdown = profile.querySelector('.profile-dropdown');
         dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
      });

      // Close dropdown when clicking outside
      document.addEventListener('click', function() {
         const dropdown = profile.querySelector('.profile-dropdown');
         if (dropdown) {
            dropdown.style.display = 'none';
         }
      });
   }

   // Mobile sidebar toggle
   function checkScreenSize() {
      if (window.innerWidth <= 768) {
         sidebar.classList.add('collapsed');
         mainContent.classList.add('expanded');
      } else {
         sidebar.classList.remove('collapsed');
         mainContent.classList.remove('expanded');
      }
   }

   window.addEventListener('resize', checkScreenSize);
   checkScreenSize();

   // Active menu item
   const currentPage = window.location.pathname.split('/').pop();
   const menuLinks = document.querySelectorAll('.menu-link');
   
   menuLinks.forEach(link => {
      if (link.getAttribute('href') === currentPage) {
         link.classList.add('active');
      }
   });

   // Smooth animations for stat cards
   const statCards = document.querySelectorAll('.stat-card');
   const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
   };

   const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
         if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
         }
      });
   }, observerOptions);

   statCards.forEach(card => {
      card.style.opacity = '0';
      card.style.transform = 'translateY(20px)';
      card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      observer.observe(card);
   });
});