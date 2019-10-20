@extends('layouts.app')

{{--@section('title','')--}}

{{--@push('css')--}}

{{--@endpush--}}

@section('content')
        <div class="container">
            <section>
                <div>
                    <b-jumbotron header="BootstrapVue" lead="Bootstrap v4 Components for Vue.js 2">
                        <p>For more information visit website</p>
                        <b-button variant="primary" href="{{url('/series')}}">Browse Course</b-button>
                    </b-jumbotron>
                </div>
            </section>
            <section>
                <div>
                    <b-card-group deck>
                        @foreach($featureSeries as $series)
                        <b-card title="{{$series->title}}"
                                img-src=" {{$series->image? asset('storage/'.$series->image) : 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSPOs4jT_cgp2si_Jeaz7glQ-l5zJ9PpjQSj4WjG3vMW-1jtCe3'}}" img-alt="Image" img-top>

                            <b-card-text>
                                @php $excerpt =  \Str::words($series->description,10) @endphp
                                {!! $excerpt !!}
                            </b-card-text>
                            <template v-slot:footer>
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </template>
                        </b-card>
                            @endforeach
                    </b-card-group>
                </div>
            </section>

            <section>
                <pricing></pricing>
            </section>
        </div>
@endsection

{{--@push('scripts')--}}

{{--@endpush--}}
