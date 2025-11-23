<script setup lang="ts">
import { useRuntimeConfig, useFetch } from '#app'

const config = useRuntimeConfig()
const apiBase = config.public.apiBase

const { data, pending, error } = await useFetch(`${apiBase}/ping`)
</script>

<template>
  <main class="min-h-screen flex items-center justify-center bg-slate-900 text-slate-100">
    <div class="p-6 rounded-xl border border-slate-700 bg-slate-800/80 max-w-md w-full text-center">
      <h1 class="text-2xl font-semibold mb-4">API Ping Test</h1>

      <div v-if="pending">Loading...</div>

      <div v-else-if="error">
        <p class="text-red-400 font-mono text-sm">
          Failed to reach backend: {{ error?.message }}
        </p>
      </div>

      <div v-else class="space-y-2">
        <p>Message from backend: <strong>{{ data?.message }}</strong></p>
        <p class="text-xs text-slate-400">
          Timestamp: {{ data?.timestamp }}
        </p>
      </div>
    </div>
  </main>
</template>
