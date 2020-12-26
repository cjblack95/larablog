let sidebarToggler = document.getElementById('sidebar-toggler');
sidebarToggler.addEventListener('click', function (event) {
    document.getElementById('mainSidebar').classList.toggle('minimized');
    document.getElementById('mainContent').classList.toggle('expanded');
});
