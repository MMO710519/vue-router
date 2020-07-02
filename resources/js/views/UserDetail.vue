<template>
<div>
  <div>
    <h1>ユーザー詳細</h1>
    <ul>
      <p>User Id: {{ user.id }}</p>
      <p>User Name: {{ user.name }}</p>
      <p>User Email: {{ user.email }}</p>
    </ul>
  </div>
</div>
</template>
<script>
	export default {
		data(){
			return {
				id: this.$route.params.id,
				user: ''
			}
		},
		mounted(){
			axios.get('/api/user/' + this.id)
			.then(response => this.user = response.data.user)
			.catch(error=> console.log(error));
		}

	}
</script>
