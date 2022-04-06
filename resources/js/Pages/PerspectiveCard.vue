<template>
    <div class="grid w-full place-items-center">
    <p>rotation: {{ rotation }}</p>
    <p>cartesian: {{ cartesian }}</p>
    <p>containerMousePosition: {{ containerMousePosition }}</p>
    <p>{{ boundingRectangle }}</p>
    <p>{{ event }}</p>
    <p>containerWidth: {{ containerWidth }}</p>
    <p>containerHeight: {{ containerHeight }}</p>
</div>
<div class="grid min-h-screen w-full place-items-center">
   <div class="final__layers" @mouseenter="mouseEnter" @mousemove="mousemove" @mouseleave="mouseLeave">
        <div class="inner">
            <img src="https://css-chalenge.netlify.app/img/back.svg" alt="img/.svg" class="back layer">
            <img src="https://css-chalenge.netlify.app/img/mid.svg" alt="img/.svg" class="mid layer">
            <img src="https://css-chalenge.netlify.app/img/top.svg" alt="img/.svg" class="top layer">
            <img src="https://css-chalenge.netlify.app/img/tippytop.svg" alt="img/.svg" class="tippy layer">
        </div>
    </div> 
</div>
</template>


<script>

export default {
    
    data() {
        return {
            maxRotationDeg: 60,
            boundingRectangle: null,
            event: null,
            containerWidth: null,
            containerHeight: null,
            cartesian: {
                x: null,
                y: null,
            },
            containerMousePosition: {
                x: null,
                y: null,
            },
            rotation: {
                x: 0,
                y: 0,
                z: 0,
            },
            container: null,
        }
    },
    methods: {
        mousemove(event) {
            let self = this;
            self.boundingRectangle = self.container.getBoundingClientRect()

            self.containerMousePosition.x = event.clientX - self.boundingRectangle.left; //x position within the element.
            self.containerMousePosition.y = event.clientY - self.boundingRectangle.top;  //y position within the element.

            self.cartesian.x = (self.containerWidth / 2) - self.containerMousePosition.x;
            self.cartesian.y = (self.containerHeight / 2) - self.containerMousePosition.y;

            self.containerWidth = self.boundingRectangle.width;
            self.containerHeight = self.boundingRectangle.height;

            self.rotation.x = -1*(self.cartesian.y / self.containerHeight) * self.maxRotationDeg;
            self.rotation.y = (self.cartesian.x / self.containerWidth) * self.maxRotationDeg;

            self.container.style.setProperty('--x', self.rotation.x + "deg");
            self.container.style.setProperty('--y', self.rotation.y + "deg");
        }
    },
    computed: {
       
    },
    mounted() {
        let self = this;
        self.container = document.querySelector(".final__layers")

    }
}
</script>
<style scoped>
.final__layers {
    --x: 0deg;
    --y: 0deg;

    position: relative;
    min-height: 638px;
    width: 360px;
}

.inner {
    position: relative;
    transition: all ease-out 900ms;
    transform-style: preserve-3d;
    min-height: 638px;
    width: 360px;
}
.final__layers:hover .inner {
    transform: perspective(12000px) rotateX(var(--x)) rotateY(var(--y)) ;
}

.final__layers img {
    position: absolute;
    max-width: 100%;
    height: 100%;
    transition: all ease 1600ms;
    transform-style: flat;
}

.final__layers img.mid {
    width: 320px;
    left: 20px;
}

.final__layers img.top {
    width: 300px;
    left: 30px;
    top: -5px;
}


.final__layers img.tippy {
    width: 280px;
    left: 40px;
    top: -150px;
}

.final__layers:hover img.back {
    transform: perspective(1200px) rotateX(5deg) rotateY(2deg) translateX(0px) translateY(0px) translateZ(0px);
}

.final__layers:hover img.mid {
    transform: perspective(1200px) rotateX(5deg) rotateY(2deg) translateX(0px) translateY(0px) translateZ(60px);
}

.final__layers:hover img.top {
    transform: perspective(1200px) rotateX(5deg) rotateY(2deg)  translateX(0px) translateY(0px) translateZ(90px);
}

.final__layers:hover img.tippy {
    transform: perspective(1200px) rotateX(5deg) rotateY(2deg)  translateX(0px) translateY(0px) translateZ(120px);
}

</style>