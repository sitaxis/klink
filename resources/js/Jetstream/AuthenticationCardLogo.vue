<template>
    <inertia-link :href="'/'">
        <application-logo/>
    </inertia-link>
</template>

<script>
import ApplicationLogo from '@/Jetstream/ApplicationLogo';
export default {
  components: {ApplicationLogo}
};
</script>
