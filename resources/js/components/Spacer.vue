<template>
  <div :class="this.class + ' ' + this.card.classes" :style="this.card.style">&nbsp;</div>
</template>

<script>
export default {
  props: [
    'card',
    'class'

    // The following props are only available on resource detail cards...
    // 'resource',
    // 'resourceId',
    // 'resourceName',
  ],
  mounted() {
    //
  },
}
</script>
