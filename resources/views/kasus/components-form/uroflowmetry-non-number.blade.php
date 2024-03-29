@if(count($bulan_ke) > 1)
<div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        @foreach($bulan_ke as $bulan)
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 @if($loop->first) active @endif disable-loading" id="uriflowmetryForm{{$bulan}}-tab" data-toggle="tab" href="#uriflowmetryForm{{$bulan}}" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                {{unslugify($bulan)}}
            </a>
        </li>
        @endforeach
    </ul>
</div> 
@endif

<div class="card shadow">
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            @foreach($bulan_ke as $bulan)
            <div  class="tab-pane fade show @if($loop->first) active @endif" role="tabpanel" aria-labelledby="uriflowmetryForm{{$bulan}}-tab" id="uriflowmetryForm{{$bulan}}">
                <div>
                    <h5> 
                        {{unslugify($bulan)}}
                    </h5>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Q-Max
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uroflowmetry__max_rate[{{$bulan}}]" value="{{$default[$bulan]->max_rate ?? ''}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Voiding Time
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uroflowmetry__voiding_time[{{$bulan}}]" value="{{$default[$bulan]->voiding_time ?? ''}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Volume
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uroflowmetry__volume[{{$bulan}}]" value="{{$default[$bulan]->volume ?? ''}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Residual Urine
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uroflowmetry__residual_urine[{{$bulan}}]" value="{{$default[$bulan]->residual_urine ?? ''}}">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>