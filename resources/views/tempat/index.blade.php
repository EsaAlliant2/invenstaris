@extends('template.layout')

@section('title')
    Barang
@endsection

@section('content')
    <section class="section-header">
        Barang
    </section>

    <section class="section-body">
        {{<!-- untuk data barang -->}}
        <div class="row">
            <div class="col-12 col-md-8 col0lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Data tempat
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td style="width: 5%">#</td>
                                    <td>Nama</td>
                                    <td style="width: 15%">Aksi</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        
            <!-- {{untuk tambah data}} -->
            <div class="col-12 col-md4 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Tambah tempat
                        </h4>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection