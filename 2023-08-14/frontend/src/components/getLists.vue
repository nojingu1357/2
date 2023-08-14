<template>
  <il>
    <ol v-for="list in lists" :key="list">
      <br />
      <p>{{ list.id }}</p>
      <p>{{ list.title }}</p>
      <p>{{ list.description }}</p>
      <p>{{ list.author }}</p>
    </ol>
  </il>
</template>

<script>
import axios from "axios";

export default {
  name: "getLists",

  data() {
    return {
      lists: "",
    };
  },
  mounted() {
    this.makeList();
  },
  methods: {
    makeList() {
      axios.get("/api/topic").then((res) => {
        this.lists = res.data.data;
      });
    },
  },
};
</script>
