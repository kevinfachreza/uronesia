    @extends('layouts.app')

    @section('content')
    <div class="container main-content py-4">
        <div class="row">
            <div class="col-12">
                <h4 class="display-3">Urethral Stricture Case</h4>
                <a class="btn btn-primary" href="{{url('')}}/kasus/striktur-uretra/{{$kasus->id}}/form"><i class="fa fa-pencil"></i> Edit</a>
                <hr>
                    @include('kasus.layouts.form-view.patient-data')
                    @include('kasus.layouts.form-view.pre-ops')
                    @include('kasus.layouts.form-view.pre-ops-radiology')
                    @include('kasus.layouts.form-view.pre-ops-lab-sm')
                    @include('kasus.striktur-uretra.components-view.intra-operative')
                    @include('kasus.striktur-uretra.components-view.post-operative')

                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
</script>
@endsection
