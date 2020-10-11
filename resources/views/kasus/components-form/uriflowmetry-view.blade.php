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
                <table class="table table-no-border">
                    <tr>
                        <td colspan="2">
                            <h5> 
                                @if($bulan <= 12)
                                Bulan Ke {{$bulan}}
                                @else
                                Tahun Ke {{$bulan/12}}
                                @endif
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 130px">
                            Volume
                        </td>
                        <td>
                            : {{$default[$bulan]->volume ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Max Rate
                        </td>
                        <td>
                            : {{$default[$bulan]->max_rate ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Average Rate
                        </td>
                        <td>
                            : {{$default[$bulan]->average_rate ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Voiding Time
                        </td>
                        <td>
                            : {{$default[$bulan]->voiding_time ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Flow Time
                        </td>
                        <td>
                            : {{$default[$bulan]->flow_time ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Time to Max Flow
                        </td>
                        <td>
                            : {{$default[$bulan]->time_to_max_flow ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Position
                        </td>
                        <td>
                            @php $position = $default[$bulan]->position  ?? '' @endphp
                            : @if($position == 'standing') Standing @else Sitting @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Weight
                        </td>
                        <td>
                            : {{$default[$bulan]->weight ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Symptomps
                        </td>
                        <td>
                            : {{$default[$bulan]->symptomps ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Advice
                        </td>
                        <td>
                            : {{$default[$bulan]->advice ?? ''}}
                        </td>
                    </tr>
                </table>
            </div>
            @endforeach
        </div>
    </div>
</div>