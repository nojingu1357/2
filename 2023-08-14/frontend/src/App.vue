<template>
  <getClock />
  <CurrentTopic :state="state.topic" />
  <getLists />
</template>

<script>
import getClock from "./components/getClock.vue";
import getLists from "./components/getLists.vue";

import axios from "axios";
import { reactive } from "vue";

export default {
  name: "App",
  components: {
    getClock,
    getLists,
  },

  setup() {
    const state = reactive({
      topic: {},
    });
    axios.get("/api/topic").then((res) => {
      state.topic = res.data.data[1];
    });

    return {
      state,
    };
  },
};
</script>
