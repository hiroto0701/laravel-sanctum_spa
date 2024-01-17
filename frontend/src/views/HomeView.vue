<script setup lang="ts">
import { ref } from 'vue';
import axios from 'axios';

const email = ref('');
const password = ref('');
 
const doLogin = () => {
  axios.get('/sanctum/csrf-cookie').then(() => {
    axios.post('/api/login', {
      email: email.value,
      password: password.value,
    })
  });
}

</script>

<template>
  <main>
    <div>
    <form @submit.prevent="doLogin">
      <div>
        <label>Eメール</label>
        <input type="text" />
      </div>
      <div>
        <label>パスワード</label>
        <input type="password" />
      </div>
      <button type="submit">ログイン</button>
    </form>
  </div>
  </main>
</template>
