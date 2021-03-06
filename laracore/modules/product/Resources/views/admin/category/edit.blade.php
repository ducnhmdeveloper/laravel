@extends($viewExtend)
@section('content')
<form action="{{ route('product.categories.update', $category->id) }}" method="post">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}
    @include('product::category.form')
    <div class="action-btn">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> {{ trans('core::language.submit') }}</button>
        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> {{ trans('core::language.reset') }}</button>
    </div>
</form>
@endsection