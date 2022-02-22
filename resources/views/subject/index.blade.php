@extends('master')
@section('title')
    List Programs
@endsection
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{$title}} List</h6>

                        </div>
                      <a style = "float:right" class = "ps-3" href = "{{route('subject.add')}}">Add</a>

                    </div>

                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Program Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Subjects</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Semester</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($subjects as $subject)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">

                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$subject->program->name}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$subject->subject_name}}</p>
                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$subject->semester}}</p>
                                        </td>


                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">{{$subject->status == true ? 'active' : 'inactive'}}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{$subject->created_at}}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{route('subject.edit',['id' => $subject->id])}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit subject">
                                                Edit /
                                            </a>
                                            <a href="{{route('subject.delete',['id' => $subject->id])}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete subject" onclick="return confirm('Are you sure want to delete?')">
                                                Delete
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
