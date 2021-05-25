
<template lang="pug">
<div>
  Olá {{user.name}} você esta na home.
</div>
</template>

<script>
export default {
  props: {
    user: String,
  },
};
</script>

<style>
</style>