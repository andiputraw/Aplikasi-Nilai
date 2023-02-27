@extends('base')
@section('main')



<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">

    @if (session('status'))
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>{{session('status')}}</h4>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-center">
                
            </div>
        </div>
    </div>
    @endif
        
        <!-- Simple Datatable start -->
        <div class="card-box mb-30">
            <div class="pd-20" >
                <h4 class="text-blue h4 text-center">Daftar {{$title}}</h4>
                <a class="btn btn-primary " href="{{url('/'. $title . '/create')}}" role="button">Tambah</a>
                
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            @foreach ($dataLabel as $label )

                         
                            <th class="table-plus datatable-nosort">{{$label}}</th>
                            
                    

                            @endforeach                
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataTable as $item)
                        <tr>

                            @foreach ($dataField as $field)

                            @if (preg_match('/\[(.*?)\]/', $field) )
                                @php
                                $field = str_replace(['[', ']'], '', $field);
                                $explodedField = explode('.',$field);
                                @endphp
                               {{-- @dd($item,$explodedField) --}}
                               @if(isset($item['jurusan']['nama_jurusan']))
                                <td class="table-plus">{{$item['jurusan']['nama_jurusan'] }}</td>
                        
                                @endif
                            @else
                                <td class="table-plus">{{$item[$field]}}</td>
                            @endif
                            
                            @endforeach

                  
                        
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
                                        <a class="dropdown-item" href="{{url('/'.$title.'/'. $item['id'] .'/edit')}}"
                                            ><i class="dw dw-edit2"></i> Edit</a
                                        >
                                        <form action="{{url('/'. $title . '/' . $item['id'])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" onclick="return alert('Apakah Kamu Yakin?')" class="dropdown-item" href="#"
                                            ><i class="dw dw-delete-3"></i> Delete</a
                                        >
                                    </form>
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