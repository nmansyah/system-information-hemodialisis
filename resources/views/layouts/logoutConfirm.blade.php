<script>
    function keluar(e) {
        e.preventDefault()
        let check = confirm("Apakah yakin akan keluar ? ")
        if (check) document.getElementById('logout-form').submit()
    }
</script>
