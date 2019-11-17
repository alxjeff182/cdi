<template>
  <div class="container" :class="{ loader: true}">
    <div class="row">
      <div class="col-sm-12 text-right">
        <img class="w-75" src="img/splash-screen.png" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "splash-screen",
  created() {
    setTimeout(() => (window.location.href = "/login"), 2000);
  }
};
</script>

<style>
.loader {
  max-width: 480px;
  z-index: 1;
  background: linear-gradient(-120deg, #021b79, #0575e6, #205e9b);
  bottom: 0;
  color: white;
  display: block;
  font-size: 32px;
  left: 0;
  overflow: hidden;
  padding-top: 40vh;
  position: fixed;
  right: 0;
  text-align: center;
  top: 0;
}

@keyframes fadeout {
  to {
    opacity: 0;
    visibility: hidden;
  }
}
</style>