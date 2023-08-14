<template>
  <div>
    <p class="time">{{ time }}</p>
  </div>
</template>
<script type="text/javascript">
export default {
  name: "getClock",
  data() {
    return {
      time: "00:00:00",
    };
  },
  methods: {
    ShowDTnow: function () {
      const dThisNow = this;
      setInterval(() => {
        var tdTEN = new Date();
        dThisNow.time =
          String(tdTEN.getHours()).padStart(2, "0") +
          ":" +
          String(tdTEN.getMinutes()).padStart(2, "0") +
          ":" +
          String(tdTEN.getSeconds()).padStart(2, "0");
      }, 100);
    },
  },
  mounted() {
    this.ShowDTnow();
  },
};
</script>
