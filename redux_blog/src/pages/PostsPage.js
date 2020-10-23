import React from 'react';
import { connect } from 'react-redux';

import { fetchPosts } from '../actions/postsActions';
import { Post } from '../components/Post';

import magic from '../assets/magic.gif';

const PostsPage = ({ dispatch, loading, posts, hasErrors }) => {

  React.useEffect(() => {dispatch(fetchPosts())}, [dispatch])

  const renderPosts = () => {

    if (loading) 
    	return <p>Carregando tropa de magos...</p>;

    if (hasErrors) 
    	return <p>Parece que a varinha mágica quebrou!</p>;

    return posts.map(post => <Post key={post.id} post={post} />);
  }

  if(!hasErrors) {
    return (
      <section>
      	<h1>Olhe a mágica!</h1>
  		  <img src={magic} alt="" />
  		  {renderPosts()}
      </section>
    )
  }
  else {
    return (
      <section>
        <h1>Vixi...</h1>
        {renderPosts()}
      </section>
    );
  }
}

const mapStateToProps = state => ({
  loading: state.posts.loading,
  posts: state.posts.posts,
  hasErrors: state.posts.hasErrors,
})

export default connect(mapStateToProps)(PostsPage)