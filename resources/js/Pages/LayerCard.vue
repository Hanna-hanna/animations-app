<template>
<div class="grid min-h-screen w-full place-items-center">
   <div class="final__layers">
        <img src="https://css-chalenge.netlify.app/img/back.svg" alt="img/.svg" class="back layer">
        <img src="https://css-chalenge.netlify.app/img/mid.svg" alt="img/.svg" class="mid layer">
        <img src="https://css-chalenge.netlify.app/img/top.svg" alt="img/.svg" class="top layer">
        <img src="https://css-chalenge.netlify.app/img/tippytop.svg" alt="img/.svg" class="tippy layer">
    </div> 
</div>
</template>
<style scoped>
.final__layers {
    position: relative;
    min-height: 638px;
    width: 360px;
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

.final__layers:hover img.mid {
    transform: perspective(1200px) rotateX(50deg) rotateY(20deg) rotateZ(-25deg) translateX(35px) translateY(0px) translateZ(240px);
}

.final__layers img.top {
    width: 300px;
    left: 30px;
    top: -5px;
}

.final__layers:hover img.tippy {
    transform: perspective(1200px) rotateX(60deg) rotateY(20deg) rotateZ(-25deg) translateX(-20px) translateY(20px) translateZ(260px);
}

.final__layers img.tippy {
    width: 280px;
    left: 40px;
    top: -150px;
}

.final__layers:hover img.top {
    transform: perspective(1200px) rotateX(50deg) rotateY(20deg) rotateZ(-25deg) translateX(35px) translateY(0px) translateZ(280px);
}

.final__layers:hover img {
    transform: perspective(1200px) rotateX(50deg) rotateY(20deg) rotateZ(-25deg) translateX(35px) translateY(0px) translateZ(180px);
}


</style>