<script setup lang="ts">
import Layout from '@/mycomponents/layouts/Layout.vue';
import type { BreadcrumbItemType } from '@/types';

interface Props {
  breadcrumbs?: BreadcrumbItemType[];
}

withDefaults(defineProps<Props>(), {
  breadcrumbs: () => [],
});
</script>

<template>
  <Layout>
    <!-- <AppLayout :breadcrumbs="breadcrumbs"> -->
      <slot />
    <!-- </AppLayout> -->
  </Layout>
</template>


