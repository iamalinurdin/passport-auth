<template>
  <div class="card">
    <div class="card-header">Timeline</div>
    <div class="card-body">
      <post :tweets="this.tweets"></post>
      <hr>
      <div class="card mb-3" v-for="(tweet, index) in tweets" :key="index">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="https://via.placeholder.com/75" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="mt-0">{{ tweet.user.name }}</h5>
              <p class="card-text">{{ tweet.body }}</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Post from './Post'

export default {
  components: {
    Post,
  },
  data() {
    return {
      tweets: [],
    }
  },
  mounted() {
    axios.get('/tweets')
    .then(response => {
      this.tweets = response.data
    })
    .catch(err => {
      console.log(err)
    })
  }
}
</script>