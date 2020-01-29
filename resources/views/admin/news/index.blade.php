@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">News</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">News</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <p>
      <a href="{{route('admin.news.create')}}" class="btn btn-primary">Add New news</a>
    </p>
    <table class="table table-bordered table-striped">
      		<tr>
            <?php $no = 1; ?>
            <th> #</th>
      			<th>Title</th>
            <th>category</th>
      			<th>Action</th>
      		</tr>
          @if(count($news))
      		@foreach($news as $n)
      			<tr>
              <td>{{ $no }}</td>
                      <?php $no++; ?>
      				<td>{{ $n->title }}</td>
              <td> @if($n->category) {{ $n->category->title }} @endif </td>


      				<td>
                <a href="{{ route('admin.news.edit',$n->id) }}" class="btn btn-info">Edit</a>
          <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
          <form action="{{ route('admin.news.destroy',$n->id) }}" method="post">
            @method('DELETE')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>
        </td>
      </tr>
    @endforeach
    @else
    <tr><td colspan="3">No News Found</td></tr>
    @endif
</table>
{{ $news->render()}}
  </div>
</section>
@endsection
