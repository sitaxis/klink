<template>
  <div class="h-screen py-10 flex flex-col justify-center items-center bg-gray-100" style="background-image: url('https://images.pexels.com/photos/1072179/pexels-photo-1072179.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'); background-size: cover">
    <div v-if="canLogin" class="hidden fixed top-0 right-0 sm:block">
      <div class="bg-white px-6 py-3 rounded-bl-md">
        <inertia-link v-if="$page.props.user" href="/dashboard" class="text-sm text-gray-700 underline">
          Dashboard
        </inertia-link>

        <template v-else>
          <inertia-link :href="route('login')" class="text-sm text-gray-700 underline">
            Log in
          </inertia-link>

          <inertia-link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
            Register
          </inertia-link>
        </template>
      </div>
    </div>

    <div class="container max-w-lg px-5 my-6">
      <div class="bg-white shadow-md rounded-lg">
        <div class="p-8">
          <h1 class="text-2xl font-semibold">Shorten a link</h1>
          <p class="text-gray-500">Enter any url to get a shorter version generated for you.</p>

          <form v-if="!result" @submit.prevent="submit">
            <div class="mt-4">
              <input
                type="text"
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                placeholder="Paste your looong url here"
                v-model="form.url"
              >
              <p v-if="form.errors.url" class="text-red-500 text-sm">{{form.errors.url}}</p>
            </div>
            <jet-button type="submit" class="mt-4" block :loading="form.processing">Shorten</jet-button>
          </form>
        </div>
      </div>
    </div>

    <p class="text-center text-gray-400 text-xs">
      Powered by <a href="https://klink.sitax.is" target="_blank">klink</a>
    </p>
  </div>
</template>

<script>
import ApplicationLogo from '@/Jetstream/ApplicationLogo';
import JetButton from '@/Jetstream/Button';

export default {
  components: {ApplicationLogo, JetButton},
  data() {
    return {
      form: this.$inertia.form({
        url: null
      })
    }
  },
  methods: {
    submit() {
      this.form.post(route('shorten'), {
        preserveScroll: true,
          onSuccess: r => console.log(r),
      })
    }
  }
};
</script>
