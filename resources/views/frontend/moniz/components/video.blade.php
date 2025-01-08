<!--Video One Start-->
<section class="video-one video-two">
    <x-editable-image style="position: absolute; right:20%; top:20%;" key="video->thumbnail">
        <div class="video-one-bg" style="background-image: url({{ filePath($moniz->video->thumbnail) }})"></div>

    </x-editable-image>

    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <div class="video-one__inner text-center">
                    <div class="video-one__link">
                        <a href="{{ $moniz->video->url }}" class="video-one__btn video-popup">
                            <div class="video-one__video-icon">
                                <span class="icon-play-button"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                    <h2 class="video-one__text" style="max-width: 25ch;margin:35px auto 0 auto;">
                        <x-editable key="video->text">
                            {{ $moniz->video->text }}
                        </x-editable>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video One End-->
