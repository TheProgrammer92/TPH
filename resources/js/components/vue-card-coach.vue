<template>

    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->

    <div class="card-coach">

        <div class="card-coach-body">

            <img :src="'img/avatar1.png'" alt="coach">
            <div class="right" >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Dictumst pharetra, amet, tempus, scelerisque orci.
                Nec sed nulla tellus consequat, sed nu
            </div>

        </div>

        <div class="card-coach-footer">
            <span class="coach-name"><strong> Josué Nguimatio</strong></span>
        </div>
    </div>


</template>

<script>


export default {
    mounted() {
        console.log('je suis mounted')
    }

}
</script>
