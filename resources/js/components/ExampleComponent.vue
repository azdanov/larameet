<template>
  <div class="text-center">
    {{ greeting }}<br />
    <button @click="updateTimestamp">Update</button>
  </div>
</template>

<script>
export default {
  name: "ExampleComponent",
  data() {
    return {
      greeting: "Click the button to view the latest date and time!"
    };
  },
  methods: {
    updateTimestamp() {
      this.greeting = new Date().toLocaleString();
    }
  }
};
</script>

<style scoped></style>
