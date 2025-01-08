<!--Team One Start-->
<section class="team-one" id="team">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Team members</span>
            <h2 class="section-title__title">Meet our experts</h2>
        </div>
        <div class="row">
            @php
                $delay = 100;
            @endphp
            @foreach ($moniz->teams as $key => $team)
            @php
                $delay += 100;
            @endphp
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Team One Single-->
                <div class="team-one__single wow fadeInUp" data-wow-delay="{{$delay}}ms">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <x-editable-image :icon-center="true" key="teams->{{$key}}->avatar">
                                <img src="{{ filePath($team->avatar) }}" alt="">
                            </x-editable-image>
                        </div>
                        <div class="team-one__social">
                            @foreach ($team->socials as $icon => $social)
                            <a href="{{$social}}"><i class="fab fa-{{$icon}}"></i></a>
                            @endforeach
                            {{-- <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="clr-dri"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a> --}}
                        </div>
                    </div>
                    <div class="team-one__member-info">
                        <h4 class="team-one__member-name">
                            <x-editable key="teams->{{$key}}->name">
                                {{$team->name}}
                            </x-editable>
                        </h4>
                        <p class="team-one__member-title">
                            <x-editable key="teams->{{$key}}->designation">
                                {{$team->designation}}
                            </x-editable>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Team One Single-->
                <div class="team-one__single wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="{{ filePath('frontend/moniz/assets/images/team/team-1-2.jpg') }}" alt="">
                        </div>
                        <div class="team-one__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="clr-dri"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-one__member-info">
                        <h4 class="team-one__member-name">Christine eve</h4>
                        <p class="team-one__member-title">Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Team One Single-->
                <div class="team-one__single wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="{{ filePath('frontend/moniz/assets/images/team/team-1-3.jpg') }}" alt="">
                        </div>
                        <div class="team-one__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="clr-dri"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-one__member-info">
                        <h4 class="team-one__member-name">Mike hardson</h4>
                        <p class="team-one__member-title">Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Team One Single-->
                <div class="team-one__single wow fadeInUp" data-wow-delay="400ms">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="{{ filePath('frontend/moniz/assets/images/team/team-1-4.jpg') }}" alt="">
                        </div>
                        <div class="team-one__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="clr-dri"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-one__member-info">
                        <h4 class="team-one__member-name">Jessica brown</h4>
                        <p class="team-one__member-title">Developer</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!--Team One End-->