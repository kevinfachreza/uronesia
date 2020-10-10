<div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        @foreach($bulan_ke as $bulan)
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 @if($loop->first) active @endif" id="uriflowmetryForm{{$bulan}}-tab" data-toggle="tab" href="#uriflowmetryForm{{$bulan}}" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                @if($bulan <= 12)
                Bulan Ke {{$bulan}}
                @else
                Tahun Ke {{$bulan/12}}
                @endif
            </a>
        </li>
        @endforeach
    </ul>
</div>  

<div class="card shadow">
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            @foreach($bulan_ke as $bulan)
            <div  class="tab-pane fade show @if($loop->first) active @endif" role="tabpanel" aria-labelledby="uriflowmetryForm{{$bulan}}-tab" id="uriflowmetryForm{{$bulan}}">
                <div>
                    <h5> 
                        @if($bulan <= 12)
                        Bulan Ke {{$bulan}}
                        @else
                        Tahun Ke {{$bulan/12}}
                        @endif
                    </h5>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Volume
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uriflowmetry_volume[{{$bulan}}]" value="{{$default[$bulan]->volume ?? ''}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Max Rate
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uriflowmetry_max_rate[{{$bulan}}]" value="{{$default[$bulan]->max_rate ?? ''}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Average Rate
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uriflowmetry_average_rate[{{$bulan}}]" value="{{$default[$bulan]->average_rate ?? ''}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Voiding Time
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uriflowmetry_voiding_time[{{$bulan}}]" value="{{$default[$bulan]->voiding_time ?? ''}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Flow Time
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uriflowmetry_flow_time[{{$bulan}}]" value="{{$default[$bulan]->flow_time ?? ''}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Time to Max Flow
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uriflowmetry_time_to_max_flow[{{$bulan}}]" value="{{$default[$bulan]->time_to_max_flow ?? ''}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Position
                        </div>
                        <div class="col-lg-9 col-8">
                            @php $position = $default[$bulan]->position  ?? '' @endphp
                            <select class="form-control" name="uriflowmetry_position[{{$bulan}}]">
                                <option value="standing" @if($position == 'standing') selected @endif >Standing</option>
                                <option value="sitting" @if($position == 'sitting') selected @endif>Sitting</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Weight
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uriflowmetry_weight[{{$bulan}}]" value="{{$default[$bulan]->weight ?? ''}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Symptomps
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uriflowmetry_symptomps[{{$bulan}}]" value="{{$default[$bulan]->symptomps ?? ''}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-3 col-4">
                            Advice
                        </div>
                        <div class="col-lg-9 col-8">
                            <input class="form-control" type="number" name="uriflowmetry_advice[{{$bulan}}]" value="{{$default[$bulan]->advice ?? ''}}">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>