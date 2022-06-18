@extends('layouts.admin.app')
@section('css')
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card my-5">
        <div class="card-header d-flex justify-content-between">
          <h3 class="card-title">Listes des catégories</h3>
          <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Créer une catégorie</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Date de création</th>
                <th>Date de mise à jour</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $key => $category)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->created_at->diffForHumans() }}</td>
                  <td>{{ $category->updated_at->diffForHumans() }}</td>
                  <td>
                    <a href="{{ route('admin.category.edit', $category->slug) }}" class="btn btn-primary">Modfier</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                      data-target="#exampleModal{{ $category->id }}">Supprimer</button>
                  </td>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{ $category->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Suppression de catégorie</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Etes vous sûr de vouloir supprimer la catégorie {{ $category->name }} ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>
                          <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </tr>
              @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
