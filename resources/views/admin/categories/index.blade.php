@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
  @component('admin.components.breadcrumb')
  @slot('title') Список категорій @endslot
  @slot('parent') Головна @endslot
  @slot('active') Категорії @endslot
  @endcomponent

<hr />

<a href="{{('route.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-0"></i>Створити категорію</a>
<table class="table table-striped">
  <thead>
    <th>
      Назва
    </th>
    <th>
      Публікація
    </th>
    <th class="text-right">
      Дія
    </th>
  </thead>
  <tbody>
    @forelse ($categories as $category)
    <tr>
      <td>{{$category->title}}</td>
      <td>{{$category->published}}</td>
      <td>
        <a href="{{route('admin.category.edit', ['id'=>$category->id])}}"><i class="fa fa-edit"</a>
      </td>
    </tr>
    @empty
      <tr>
        <td colspan="3" class="text-center"><h2>Дані відсутні</h2>

        </td>
      </tr>
      @endforelse
  </tbody>
  <tfoot>
    <tr>
      <td colspan="3">
        <ul class="pagintation pull-right">
          {{$categories->links()}}
        </ul>
      </td>
    </tr>
  </tfoot>
</table>
</div>
@endsection
