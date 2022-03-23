@foreach($domains as $domain)
<a class="card mb-3 row project-item mb-3 py-2" style ="cursor:pointer" href = "{{route('sale.detail',[$domain->id])}}">

    <div class = "row">
        <div class="col-12 col-sm-3">
            chart
        </div>
        <div class = "col-12 col-sm-9 ">
            <div class="d-none d-sm-block col-sm-12">
                <h6>
                    {{$domain->title}}
                </h6>
                <div class = "d-flex w-100 justify-content-end p-2" >
                    <span class = "badge badge-info me-3">{{$domain->status}}</span>
                    <span class = "badge badge-warning me-1 ">{{__('explorer')}}:{{$domain->explorer}}</span>
                    <span class = "badge badge-success  me-1 ">{{__('contact')}}:{{$domain->contacted}}</span>
                    <span class = "badge badge-danger">{{__('release')}}:{{date("Y-m-d",$domain->create_at)}}</span>
                </div>
                <table class="col-12 mb-3 " >
                    <tr>
                        <th>希望売却価格</th>
                        <td>{{$domain->desired}}円</td>
                        <th>売上</th>
                        <td>{{$domain->sale}}円</td>
                    </tr>
                    <tr>
                        <th>営業利益</th>
                        <td>{{$domain->operating}}円</td>
                        <th>PV</th>
                        <td>{{$domain->pv}}</td>
                    </tr>
                </table>
            </div>
            <div class = "d-sm-none">
                <div class="d-sm-block col-sm-12">
                    <h6>
                        {{$domain->title}}
                    </h6>
                    <div class = "d-flex w-100 justify-content-end p-2" >
                        <span class = "badge badge-info me-3">{{$domain->status}}</span>
                        <span class = "badge badge-warning me-1 "><i class = "fas fa-eye"></i>&nbsp;{{$domain->explorer}}</span>
                        <span class = "badge badge-success  me-1 "><i class = "fas fa-handshake"></i>&nbsp;{{$domain->contacted}}</span>
                        <span class = "badge badge-danger">{{date("Y-m-d",$domain->create_at)}}</span>
                    </div>
                    <table class="col-12 mb-3 " >
                        <tr>
                            <th>希望売却価格</th>
                            <td>{{$domain->desired}}円</td>
                        </tr>
                        <tr>
                            <th>売上</th>
                            <td>{{$domain->sale}}円</td>
                        </tr>
                        <tr>
                            <th>営業利益</th>
                            <td>{{$domain->operating}}円</td>
                        </tr>
                        <tr>
                            <th>PV</th>
                            <td>{{$domain->pv}}</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

</a>

@endforeach
