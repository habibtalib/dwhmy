<section>
    <h2>Search Filter</h2>
    <form class="form inputs-underline" method="POST" action="\listing">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" name="keyword" placeholder="Enter keyword" value="{{$request->keyword}}">
        </div>
        <!--end form-group-->
        <div class="form-group">
            <select class="form-control selectpicker" name="category">
                <option value="" {{($request->category == '') ? 'selected' : ''}}>All Categories</option>
                <option value="Billboard" {{($request->category == 'Billboard') ? 'selected' : ''}}>Billboard</option>
                <option value="Digital Billboard" {{($request->category == 'Digital Billboard') ? 'selected' : ''}}>Digital Billboard</option>
            </select>
        </div>
        <!--end form-group-->
       {{--<div class="form-group">
            <div class="ui-slider" id="price-slider" data-value-min="10" data-value-max="400" data-value-type="price" data-currency="$" data-currency-placement="before">
                <div class="values clearfix">
                    <input class="value-min" name="value-min[]" readonly>
                    <input class="value-max" name="value-max[]" readonly>
                </div>
                <div class="element"></div>
            </div>
            <!--end price-slider-->
        </div>--}}
        <!--end form-group-->
        <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right">Search Now<i class="fa fa-search"></i></button>
        </div>
        <!--end form-group-->
    </form>
</section>