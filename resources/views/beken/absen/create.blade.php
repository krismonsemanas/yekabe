@extends('tenpureto.beken.index')

@section('seo-title')
	Absen Perorangan
@endsection

@section('title')
  <h1>
    Absen
    <small>Absen Perorangan</small>
  </h1>
@endsection

@section('breadcrumb')
  <li><a href="#"><i class="fa fa-bullhorn"></i>Absen</a></li>
  <li class="active">Absen Perorangan</li>
@endsection

@push('css')
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('tenpureto/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endpush

@section('main')

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="content" >
            <div class="box box-default">
            <div class="box">
            <div class="box-header">
                    <div class="table-responsive">

                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Periode</th>
                                        <td>{{$guru->periode->tahun_ajaran}} Semester {{$guru->periode->semester}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>{{$guru->kelas->kelas}}</td>
                                    </tr>
                                    <tr>
                                        <th>Mata Pelajaran</th>
                                        <td>{{$guru->mapel->mapel}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><hr>
              <h3 class="box-title">Absen Perorangan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {!! Form::open(['url' => 'guru/absen/single']) !!}
                  @include('beken.absen.form', ['submitButtonText' => 'Tambah Absen Perorangan'])
                {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            </div>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
@endsection

@push('js')
  <!-- bootstrap datepicker -->
  <script src="{{asset('tenpureto/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- CK Editor -->
  <script src="{{asset('tenpureto/bower_components/ckeditor/ckeditor.js')}}"></script>
  <script>
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('isi')
    })
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
  </script>
@endpush
