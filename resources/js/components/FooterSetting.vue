<template>
    <div
        class="container fixed-bottom bg-primary py-2 mt-5"
        style="max-width: 480px;"
    >
        <div class="row">
            <div class="col-12">
                <circle-menu
                    type="middle"
                    :number="4"
                    animate="animated jello"
                    mask="white"
                    circle
                >
                    <button type="button" slot="item_btn"></button>
                    <a slot="item_1" class="fa fa-twitter fa-lg"></a>
                    <a slot="item_2" class="fa fa-weixin fa-lg"></a>
                    <a slot="item_3" class="fa fa-weibo fa-lg"></a>
                    <a slot="item_4" class="fa fa-github fa-lg"></a>
                </circle-menu>
            </div>
            <div class="col-12 text-right">
                <img width="30px" src="img/icon/cog.png" alt />
            </div>
        </div>
    </div>
</template>
<script>
import CircleMenu from "vue-circle-menu";
export default {
    components: {
        CircleMenu
    }
};
</script>
