<script setup lang="ts">
import axios from 'axios';

const csrf = () => {
  axios.get('/sanctum/csrf-cookie').then(response => {
    console.log(response);
  })
}
</script>

<template>
  <main>
    <div>
    <form @submit.prevent>
      <div>
        <label>Eメール</label>
        <input type="text" />
      </div>
      <div>
        <label>パスワード</label>
        <input type="password" />
      </div>
      <button @click="csrf" type="submit">ログイン</button>
    </form>
  </div>
  </main>
</template>
