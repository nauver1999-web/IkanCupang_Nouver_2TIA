@include('layouts.partials.base-js')
<script>
    document.getElementById('sidebarToggle')?.addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('open');
    });
</script>
