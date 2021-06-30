<template>
  <div class="h-screen flex flex-col justify-center items-center bg-white">
    <div class="container max-w-lg px-5 my-6">
      <div class="p-8">
        <img class="w-auto mx-auto" width="300px" src="/img/undraw/undraw_empty_street_sfxm.svg" alt="">
        <div class="text-center my-10">
          <h1 class="text-4xl font-bold text-dark">Link not found</h1>
          <p class="text-gray-700">The link you tried to access does not exist, it is either incorrect or has been deleted by the owner.</p>
        </div>
        <div class="text-center">
          <inertia-link href="/">&larr; Go back home</inertia-link>
        </div>
      </div>
    </div>
    <p class="text-center text-gray-400 text-xs">
      Powered by <a href="https://klink.sitax.is" target="_blank">klink</a>
    </p>
  </div>
</template>

<script>
export default {

}
</script>
