import axios from 'axios';

const state = {
    posts: []
};

const getters = {
    allposts: (state) => state.posts
};

const actions = {
    async fetchPosts({ commit })
    {
        const response = await axios.get('http://127.0.0.1:8000/api/posts');
        commit('setPosts', response.data);
    }
};

const mutations = {
    setPosts: (state, posts) => (state.posts = posts)
};

export default
{
    state,
    getters,
    actions,
    mutations
}
