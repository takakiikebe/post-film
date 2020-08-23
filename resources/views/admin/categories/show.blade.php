@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Category {{ $category->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/categories') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/categories/' . $category->id . '/edit') }}" title="Edit Category"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="CATEGORY" action="{{ url('admin/categories' . '/' . $category->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Category" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $category->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $category->name }} </td></tr>
                                    <tr><th> NameJapa </th><td> {{ $category->namejapa }} </td></tr>
                                    <tr><th> Content </th><td> {{ $category->content }} </td></tr>
                                    <tr><th> Url1 </th><td><form action="{{ url($category->url1) }}"><button type="submit" class="btn btn-primary">100info</button></form> {{ $category->url1 }} </td></tr>
                                    <tr><th> Url2 </th><td><form action="{{ url($category->url2) }}"><button type="submit" class="btn btn-primary">Facebook</button></form> {{ $category->url2 }} </td></tr>
                                 </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
