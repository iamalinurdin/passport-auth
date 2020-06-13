<template>
  <div>
    <form action="#" @submit.prevent="post">
      <div class="form-group">
        <textarea v-model="body" cols="30" rows="2" class="form-control"></textarea>
      </div>
      <button class="btn btn-primary" type="submit">Post</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      body: null,
    }
  },
  props: {
    tweets: Array,
  },
  methods: {
    post() {
      let data = JSON.stringify({
        body: this.body
      })

      axios.post('tweets', {
        body: this.body
      })
      .then((response) => {
        this.tweets.unshift(response.data)
        this.body = null
      })
      .catch((err) => {
        console.log(err)
      })
    }
  }
}
</script>