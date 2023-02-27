@extends('base')

@section('main')


    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
					<div class="page-header">

						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Form</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="{{url('/'.$title)}}">Daftar {{$title}}</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Input {{$title}}
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-center">
								
							</div>
						</div>
					</div>
					<!-- Default Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4 ">Input {{$title}}</h4>
							</div>
					
						</div>
						<form id="input-container" action="{{url('/'.$title)}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            @foreach ($inputShape as $input)
							<div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">{{$input['name']}}</label>
                                    @if ($input['type'] === 'input')                                        
                                    <div class="col-sm-12 col-md-10">
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder=""
                                            name="{{$input['field']}}"
                                        />
                                    </div>
                                    @elseif($input['type'] === 'comboBox')
                                    <div class="col-sm-12 col-md-10">
                                        <select class="custom-select col-12">
                                            @foreach ($input['list'] as $list)
                                            <option value="{{$list['value']}}">{{$list['label']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @elseif($input['type'] === 'gender')
                                    <div class="col-sm-12 col-md-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="{{$input['field']}}" id="exampleRadios1" value="Laki-Laki" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Laki-Laki
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="{{$input['field']}}" id="exampleRadios2" value="Perempuan">
                                        <label class="form-check-label" for="exampleRadios2">
                                          Perempuan
                                        </label>
                                      </div>
                                    </div>
                                    @elseif($input['type' ]=== 'date')
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" name="{{$input['field']}}" placeholder="Choose Date anf time" type="date">
                                    </div>
                                    @endif
                                </div>
                                @endforeach
                                <input class="btn btn-primary" type="submit" value="Kirim">
                            </div>

                        </form>
							
@endsection

