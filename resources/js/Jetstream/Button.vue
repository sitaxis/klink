<template>
  <component
    :is="href ? 'inertia-link' : 'button'"
    :href="href"
    :method="method"
    :type="type"
    class="border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring transition"
    :class="[
      sizeClass,
      colorClass,
      blockClass,
      {'shadow': hero},
      {'pointer-events-none opacity-75': disabled || loading}
    ]"
    :disabled="disabled || loading"
  >
    <div v-if="loading" class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
    <slot v-else/>
  </component>
</template>

<script>
export default {
  props: {
    href: String,
    method: String,
    type: String,
    size: {type: String, default: 'md'},
    color: {type: String},
    hero: {type: Boolean, default: false},
    block: {type: Boolean, default: false},
    loading: {type: Boolean, default: false},
    disabled: {type: Boolean, default: false}
  },
  computed: {
    sizeClass: function () {
      switch (this.size) {
        case 'xs':
          return 'px-2.5 py-1.5 text-xs leading-4 rounded-lg';
        case 'sm':
          return 'px-3 py-2 text-sm leading-4 rounded-lg';
        case 'md':
          return 'px-4 py-2';
        case 'lg':
          return 'px-5 py-3 text-base leading-6 rounded-md';
        case 'xl':
          return 'px-8 py-3 text-base leading-6 rounded-md';
        default:
          return this.size;
      }
    },
    colorClass: function () {
      switch (this.color) {
        case 'primary':
          return 'bg-blue-500 text-white hover:bg-blue-600 active:bg-blue-500 focus:border-blue-700 focus:ring-blue-200';
        case 'secondary':
          return 'bg-white border-gray-300 text-gray-700 hover:text-gray-500 active:text-gray-800 active:bg-gray-50 focus:border-blue-300 focus:ring-blue-200';
        case 'danger':
          return 'bg-red-600 text-white hover:bg-red-500 active:bg-red-600 focus:border-red-700 focus:ring-red-200';
        default:
          return 'bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900 focus:ring-gray-300';
      }
    },
    blockClass: function () {
      return this.block ? 'w-full' : 'inline-flex items-center';
    }
  }
}
</script>

<style scoped>
.spinner > div {
  height: 10px;
  width: 10px;
  background-color: #fff;
  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}
.spinner .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
.spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}
@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0); opacity:0 }
  40% { -webkit-transform: scale(1.0); opacity: 1 }
}
@keyframes sk-bouncedelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0;
  } 40% {
      -webkit-transform: scale(1.0);
      transform: scale(1.0);
      opacity: 1;
    }
}
</style>
