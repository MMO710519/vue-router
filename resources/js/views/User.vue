<template>
<div class="container">
    <h1>ユーザー一覧</h1>
    <router-link class="btn btn-secondary" to="/user/create">ユーザー作成</router-link><br>
    <br>
<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="alt-table-responsive">
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>User</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(user,index) in users" :key="user.id" class="mb-1">
                <td>{{ user.name }}</td>
                <td><router-link class="btn btn-success" :to="`/user/${user.id}`"> 詳細</router-link>
                <router-link class="btn btn-primary" :to="`/user/${user.id}/edit`"> 更新</router-link>
                <span class="btn btn-danger" @click="userDelete(index,user.id)"> 削除</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</template>

<script>
export default{
  data(){
    return{
      users:[],
    }
  },
  methods:{
    userDelete(index, id){
      axios.delete('/api/user/'+id)
      .then(response=>{this.users.slice(id,1)})
      .catch(error=>console.log(error));
    }
  },
  mounted(){
			axios.get('/api/user')
				.then(response=>{
					this.users = response.data.users
				})
				.catch(error => {
					console.log(error)
				});
		}
}
</script>
