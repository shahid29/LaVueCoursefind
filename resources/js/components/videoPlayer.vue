<template>
    <div class="container">
        <div id="course-player" style="padding:56.25% 0 0 0;position:relative;">

        </div>
    </div>
</template>

<script>
    import Player from '@vimeo/player'
    export default {
        name: "videoPlayer",
        props:['video','nextVideoUrl'],

        mounted(){
            var videoOptions = {
                id: this.video.vimeo_video_id,
                width: 500,
                autoplay:true
            };

            var player = new Player('course-player', videoOptions);

            player.on('ended', ()=>{
                window.location.replace(this.nextVideoUrl)
            });
        }
    }
</script>

<style>
    iframe {
        position: absolute;
        top: 0 ;
        left: 0 ;
        width: 100% !important;
        height: 100%;
    }
</style>
