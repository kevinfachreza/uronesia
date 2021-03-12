<script type="text/javascript">
  $('.delete-button-swal').click(function(){
    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
      var id_form_delete = $(this).data('form-delete-id');
      $(id_form_delete).submit();
    }
    })
  }) 
</script>