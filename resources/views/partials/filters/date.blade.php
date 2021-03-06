<div class="dropdown d-inline-block">
    <button class="btn btn-sm btn-link dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
        <i class="icon-filter"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
        <div class="wrapper-sm">

            <input class="d-none" name="filter[{{$column}}]"
                   data-controller="fields--datetime"
                   data-fields--datetime-inline="true"
                   value="{{get_filter_string($column)}}"
                   form="filters"
                   placeholder="{{ __('Filter') }}"
            >

            <div class="line line-dashed border-bottom line-lg"></div>
            <button type="submit" form="filters" class="btn btn-default btn-sm w-100">{{__('Apply')}}</button>
        </div>
    </div>
</div>
