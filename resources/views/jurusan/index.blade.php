@extends('base')
@section('main')

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        
        <!-- Simple Datatable start -->
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4 text-center">Daftar {{$title}}</h4>
                
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Nama Jurusan</th>
                            <th>Kode Jurusan</th>
                            <th>Program Keahlian</th>
                            <th>Bidang keahlian</th>
                


                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td class="table-plus">{{$item->kode_jurusan}}</td>
                            <td>{{$item->nama_jurusan}}</td>
                            <td>{{$item->prog_keahlian}}</td>
                            <td>{{$item->bid_keahlian}}</td>
                        
                            <td>
                                <div class="dropdown">
                                    <a
                                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                        href="#"
                                        role="button"
                                        data-toggle="dropdown"
                                    >
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                    >
                                        <a class="dropdown-item" href="#"
                                            ><i class="dw dw-eye"></i> View</a
                                        >
                                        <a class="dropdown-item" href="#"
                                            ><i class="dw dw-edit2"></i> Edit</a
                                        >
                                        <a class="dropdown-item" href="#"
                                            ><i class="dw dw-delete-3"></i> Delete</a
                                        >
                                    </div>
                                </div>
                            </td>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>

    
@endsection