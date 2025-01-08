<!--Counter One Start-->
<section class="counters-one">
    <div class="container">
        <ul class="counters-one__box list-unstyled">
            @php
                $delay = 100;
            @endphp
            @foreach ($moniz->counters as $key => $item)
                @php
                    $delay += 100;
                @endphp
                <li class="counter-one__single wow fadeInUp" data-wow-delay="{{ $delay }}ms">
                    <div class="counter-one__icon">
                        <span class="{{ $item->icon }}"></span>
                    </div>

                    @can('Admin')
                        <h3>
                            <x-editable key="counters->{{ $key }}->count">
                                {{$item->count}}
                            </x-editable>
                        </h3>
                    @else
                        <h3 class="odometer" data-count="{{ $item->count }}">
                            00
                        </h3>
                    @endcan
                    <p class="counter-one__text">
                        <x-editable key="counters->{{ $key }}->label">
                            {{ $item->label }}
                        </x-editable>

                    </p>
                </li>
            @endforeach
            <li class="counter-one__shape wow fadeInUp" data-wow-delay="500ms"></li>
        </ul>
    </div>
</section>
<!--Counter One End-->
