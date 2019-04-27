<table id="text-table" class="display cell-border" style="width:100%">
  <thead>
      <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Publication Date</th>
      </tr>
  </thead>
</table>

<script>
    $(document).ready(function() {
        $('#text-table').DataTable({
            serverSide: true,
            processing: true,
            responsive: true,
            ajax: "{{ route('get_text_datatable') }}",
            columns: [
                { name: 'title' },
                { name: 'description' },
                { name: 'Publication_date' }
            ]
        });
    });
</script>
