</main>
</div>
</div>


<script src="<?= base_url('assets/js/jquery-3.5.1.js') ?>"></script>
<script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


<script src="<?= base_url('assets/js/') ?>dashboard.js"></script>
<script src="<?= base_url('assets/js/') ?>jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/js/') ?>dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            fixedHeader: true
        });
    })
</script>
</body>

</html>